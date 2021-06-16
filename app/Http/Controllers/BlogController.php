<?php

namespace App\Http\Controllers;

use App\Blog;
use App\BlogTranslation;
use App\Language;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::all();
        foreach ($blogs as $b) {
            $b->mne = BlogTranslation::where('language_id', function ($query) {
                $query->from('languages')->where('languages.code', '=', 'mne')->select('languages.id');
            })->where('blog_id', $b->id)->first();

            $b->eng = BlogTranslation::where('language_id', function ($query) {
                $query->from('languages')->where('languages.code', '=', 'en')->select('languages.id');
            })->where('blog_id', $b->id)->first();
            $b->update = false;
        }
        return view('admin.blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $languages = Language::all();
        return view('admin.blog.create', compact('languages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'image' => 'required|mimes:jpg,jpeg,png,svg,gif|max:4096',
                'title_mne' => 'required|max:255',
                'text_mne' => 'required|max:5000',
                'quote_mne' => 'nullable|max:500',
                'title_eng' => 'required|max:255',
                'text_eng' => 'required|max:255',
                'quote_eng' => 'nullable|max:500'
            ],
            [
                'image.required' => 'Morate dodati sliku!',
                'image.mimes' => 'Slika mora biti u formatu JPG, JPEG, PNG, SVG, GIF!',
                'image.max' => 'Najveća veličina slike je 4MB!',
                'title_mne.required' => 'Naslov na crnogorskom jeziku je obavezan!',
                'title_mne.max' => 'Najveći broj karaktera u naslovu na crnogorskom jeziku je 255!',
                'text_mne.required' => 'Tekst na crnogorskom jeziku je obavezan!',
                'text_mne.max' => 'Najveći broj karaktera u tekstu na crnogorskom jeziku je 5000!',
                'quote_mne' => 'Najveći broj karaktera u citatu na crnogorskom jeziku je 500!',
                'title_eng.required' => 'Naslov na engleskom jeziku je obavezan!',
                'title_eng.max' => 'Najveći broj karaktera u naslovu na engleskom jeziku je 255!',
                'text_eng.required' => 'Tekst na engleskom jeziku je obavezan!',
                'text_eng.max' => 'Najveći broj karaktera u tekstu na engleskom jeziku je 5000!',
                'quote_eng' => 'Najveći broj karaktera u citatu na engleskom jeziku je 500!'
            ]);


        $blog = new Blog();
        $destinationPath = '/blog/';
        $imageName = $request->image->getClientOriginalName();
        $filenameCover = time() . str_replace(' ', '_', $imageName);
        $request->image->move(public_path() . $destinationPath, $filenameCover);
        $blog->imagePath = $destinationPath . $filenameCover;
        $blog->save();

//      Prevod bloga na crnogorski jezik
        $mne = Language::where('code', 'mne')->first();
        $blogTranslationMNE = new BlogTranslation();
        $blogTranslationMNE->blog_id = $blog->id;
        $blogTranslationMNE->language_id = $mne->id;
        $blogTranslationMNE->title = $request->title_mne;
        $blogTranslationMNE->text = $request->text_mne;
        $blogTranslationMNE->quote = $request->quote_mne;
        $blogTranslationMNE->save();

//      Prevod bloga na engleski jezik
        $en = Language::where('code', 'en')->first();
        $blogTranslationENG = new BlogTranslation();
        $blogTranslationENG->blog_id = $blog->id;
        $blogTranslationENG->language_id = $en->id;
        $blogTranslationENG->title = $request->title_eng;
        $blogTranslationENG->text = $request->text_eng;
        $blogTranslationENG->quote = $request->quote_eng;
        $blogTranslationENG->save();

        return response('Blog uspješno kreiran', 200);


    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        if($blog) {
            $blog->mne = BlogTranslation::where('blog_id', $blog->id)->where('language_id', function ($query) {
                $query->from('languages')->where('languages.code', 'mne')->select('languages.id');
            })->first();
            $blog->en = BlogTranslation::where('blog_id', $blog->id)->where('language_id', function ($query) {
                $query->from('languages')->where('languages.code', 'en')->select('languages.id');
            })->first();
            $blog->update = true;
            return $blog;
        }
        return response('Blog nije pronadjen!', 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateBlog(Request $request, $id)
    {
        $request->validate(
            [
                'image' => 'nullable|mimes:jpg,jpeg,png,svg,gif|max:4096',
                'title_mne' => 'required|max:255',
                'text_mne' => 'required|max:5000',
                'quote_mne' => 'nullable|max:500',
                'title_eng' => 'required|max:255',
                'text_eng' => 'required|max:255',
                'quote_eng' => 'nullable|max:500'
            ],
            [
                'image.mimes' => 'Slika mora biti u formatu JPG, JPEG, PNG, SVG, GIF!',
                'image.max' => 'Najveća veličina slike je 4MB!',
                'title_mne.required' => 'Naslov na crnogorskom jeziku je obavezan!',
                'title_mne.max' => 'Najveći broj karaktera u naslovu na crnogorskom jeziku je 255!',
                'text_mne.required' => 'Tekst na crnogorskom jeziku je obavezan!',
                'text_mne.max' => 'Najveći broj karaktera u tekstu na crnogorskom jeziku je 5000!',
                'quote_mne' => 'Najveći broj karaktera u citatu na crnogorskom jeziku je 500!',
                'title_eng.required' => 'Naslov na engleskom jeziku je obavezan!',
                'title_eng.max' => 'Najveći broj karaktera u naslovu na engleskom jeziku je 255!',
                'text_eng.required' => 'Tekst na engleskom jeziku je obavezan!',
                'text_eng.max' => 'Najveći broj karaktera u tekstu na engleskom jeziku je 5000!',
                'quote_eng' => 'Najveći broj karaktera u citatu na engleskom jeziku je 500!'
            ]);


        $blog = Blog::find($id);
        if($blog) {
            if($request->image) {
                $destinationPath = '/blog/';
                $imageName = $request->image->getClientOriginalName();
                $filenameCover = time() . str_replace(' ', '_', $imageName);
                $request->image->move(public_path() . $destinationPath, $filenameCover);
                $blog->imagePath = $destinationPath . $filenameCover;
                $blog->save();
            }


//      Prevod bloga na crnogorski jezik
            $mne = Language::where('code', 'mne')->first();
            $blogTranslationMNE = BlogTranslation::where('blog_id', $blog->id)->where('language_id', $mne->id)->first();
            $blogTranslationMNE->title = $request->title_mne;
            $blogTranslationMNE->text = $request->text_mne;
            $blogTranslationMNE->quote = $request->quote_mne;
            $blogTranslationMNE->save();

//      Prevod bloga na engleski jezik
            $en = Language::where('code', 'en')->first();
            $blogTranslationENG = BlogTranslation::where('blog_id', $blog->id)->where('language_id', $en->id)->first();
            $blogTranslationENG->title = $request->title_eng;
            $blogTranslationENG->text = $request->text_eng;
            $blogTranslationENG->quote = $request->quote_eng;
            $blogTranslationENG->save();

        } else {
            return response('Blog nije pronadjen', 404);
        }


        return response('Blog uspješno izmijenjen', 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Blog::find($id)->delete();
        return response('Blog uspješno izbrisan!', 200);
    }
}
