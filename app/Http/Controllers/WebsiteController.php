<?php

namespace App\Http\Controllers;
use App\BlogTranslation;
use App\Blog;

use App\Mail\ContactFormQuestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;

class WebsiteController extends Controller
{
    public function index() {

        $blogs = Blog::where('deleted_at', null)->limit(3)->get();
        foreach ($blogs as $b) {
            $b->mne = BlogTranslation::where('language_id', function ($query) {
                $query->from('languages')->where('languages.code', '=', 'mne')->select('languages.id');
            })->where('blog_id', $b->id)->first();

            $b->eng = BlogTranslation::where('language_id', function ($query) {
                $query->from('languages')->where('languages.code', '=', 'en')->select('languages.id');
            })->where('blog_id', $b->id)->first();

        }
        return view('index', compact('blogs'));
    }

    public function findBlog($id) {

      $blog = Blog::find($id);

            $blog->mne = BlogTranslation::where('language_id', function ($query) {
                $query->from('languages')->where('languages.code', '=', 'mne')->select('languages.id');
            })->where('blog_id', $blog->id)->first();

            $blog->eng = BlogTranslation::where('language_id', function ($query) {
                $query->from('languages')->where('languages.code', '=', 'en')->select('languages.id');
            })->where('blog_id', $blog->id)->first();

       $recommended = Blog::where('deleted_at', null)->limit(3)->get();

        foreach ($recommended as $b) {
            $b->mne = BlogTranslation::where('language_id', function ($query) {
                $query->from('languages')->where('languages.code', '=', 'mne')->select('languages.id');
            })->where('blog_id', $b->id)->first();

            $b->eng = BlogTranslation::where('language_id', function ($query) {
                $query->from('languages')->where('languages.code', '=', 'en')->select('languages.id');
            })->where('blog_id', $b->id)->first();

        }


        return view('blogdetail', compact('blog', 'recommended'));
    }

    public function contactUs() {

        return view('contact');
    }

    public function projects() {

        return view('projects');
    }

    public function contactQuestion(Request $request) {

        $request->validate([
            'email' => 'required|email|max:100',
            'subject' => 'required|max:255',
            'question' => 'required|max:1000'
        ],[
            'email.required' => 'Morate unijeti email!',
            'email.email' => 'Email nije validan!',
            'email.max' => 'Email može sadržati najviše 100 karaktera!',
            'subject.required' => 'Morate unijeti naslov emaila!',
            'subject.max' => 'Naslov emaila može sadržati najviše 255 karaktera!',
            'question.required' => 'Morate unijeti pitanje!',
            'question.max' => 'Pitanje može sadržati najviše 1000 karaktera!',
        ]);

        $data = array(
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->question
        );

        $locale = App::getLocale();
        Mail::send('mail.contact-form-question', ['contentMessage' => $request->question, 'from' => $request->email, 'emailSubject' => $request->subject], function ($message) use ($data){
           $message->from($data['email']);
           $message->to('montenegrosoneinfo@gmail.com');
           $message->subject($data['subject']);
        });
            if($locale == 'mne') {
                return "mne";
            } else {
                return "en";
            }

    }

    public function footerContactMail(Request $request) {

        $locale = App::getLocale();
        if($locale == 'mne') {
            $request->validate([
                'name' => 'required|max:100',
                'email' => 'required|email|max:100',
                'message' => 'required|max:1000'
            ],[
                'name.required' => 'Morate unijeti ime i prezime!',
                'name.max' => 'Ime i prezime može sadržati najviše 100 karaktera!',
                'email.required' => 'Morate unijeti email!',
                'email.email' => 'Email nije validan!',
                'email.max' => 'Email može sadržati najviše 100 karaktera!',
                'message.required' => 'Morate unijeti pitanje!',
                'message.max' => 'Pitanje može sadržati najviše 1000 karaktera!'
            ]);
        } else {
            $request->validate([
                'name' => 'required|max:100',
                'email' => 'required|email|max:100',
                'message' => 'required|max:1000'
            ],[
                'name.required' => 'Name field is required!',
                'name.max' => 'The name may not be greater than 100 characters.',
                'email.required' => 'Email field is required!',
                'email.email' => 'Email is not valid!',
                'email.max' => 'The email may not be greater than 100 characters.',
                'message.required' => 'Message field is required!',
                'message.max' => 'The message may not be greater than 1000 characters.'
            ]);
        }


        $data = array(
            'email' => $request->email,
            'name' => $request->name,
            'message' => $request->message
        );


        Mail::send('mail.footer-contact', ['contentMessage' => $request->message, 'from' => $request->name, 'emailFrom' => $request->email], function ($message) use ($data){
            $message->from($data['email']);
            $message->to('montenegrosoneinfo@gmail.com');
        });
        if($locale == 'mne') {
            return "mne";
        } else {
            return "en";
        }

    }

    public function projectView($id)
    {
        return view('project', compact('id'));
    }


    public function sendContact(Request $request)
    {
        $locale = App::getLocale();
        if($locale == 'en') {
            $request->validate([
                'name' => 'required|max:100',
                'email' => 'required|email|max:100',
                'subject' => 'nullable|max:100',
                'message' => 'required|max:1000'
            ],[
                'name.required' => 'Name field is required!',
                'name.max' => 'The name may not be greater than 100 characters.',
                'email.required' => 'Email field is required!',
                'email.email' => 'Email is not valid!',
                'email.max' => 'The email may not be greater than 100 characters.',
                'subject.max' => 'The subject may not be greater than 100 characters.',
                'message.required' => 'Message field is required!',
                'message.max' => 'The message may not be greater than 1000 characters.'
            ]);
        } else {
            $request->validate([
                'name' => 'required|max:100',
                'email' => 'required|email|max:100',
                'subject' => 'nullable|max:100',
                'message' => 'required|max:1000',
            ],[
                'name.required' => 'Morate unijeti ime i prezime!',
                'name.max' => 'Ime i prezime može sadržati najviše 100 karaktera!',
                'email.required' => 'Morate unijeti email!',
                'email.email' => 'Email nije validan!',
                'email.max' => 'Email može sadržati najviše 100 karaktera!',
                'subject.max' => 'Naslov može sadržati najviše 100 karaktera!',
                'message.required' => 'Morate unijeti pitanje!',
                'message.max' => 'Pitanje može sadržati najviše 1000 karaktera!'
            ]);
        }


        $data = array(
            'email' => $request->email,
            'name' => $request->name,
            'message' => $request->message
        );


        Mail::send('mail.footer-contact', ['contentMessage' => $request->message, 'from' => $request->name, 'emailFrom' => $request->email], function ($message) use ($data){
            $message->from($data['email']);
            $message->to('montenegrosoneinfo@gmail.com');
        });
        if($locale == 'mne') {
            return "mne";
        } else {
            return "en";
        }
    }

}
