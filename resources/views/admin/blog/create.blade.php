@extends('layouts.admin')

@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Dodaj / Izmijeni Blog</h3>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="x_panel">
                    <div class="x_content">

                        <form class="form-horizontal form-label-left" method="POST" action="{{route('admin-blogs.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="coverimage">Dodaj naslovnu
                                    sliku<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6">
                                    <input type="file" id="slika" class="form-control-file">
                                </div>
                            </div>
                            <hr>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Naslov | MNE <span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6">
                                    <input id="titleMNE" class="form-control" data-validate-length-range="6" data-validate-words="2"
                                           name="title" placeholder="Unesite naslov na crnogorskom jeziku" required="required" type="text">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="textarea">Tekst | MNE <span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6">
                        <textarea id="textMNE" required="required" name="text" class="form-control" rows="8"
                                  placeholder="Unesite tekst bloga na crnogorskom jeziku"></textarea>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Citat | MNE
                                </label>
                                <div class="col-md-6 col-sm-6">
                                    <input id="quoteMNE" class="form-control" data-validate-length-range="6" data-validate-words="2"
                                           name="quote" placeholder="Unesite citat na crnogorskom jeziku" required="required" type="text">
                                </div>
                            </div>
                            <hr>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Naslov | ENG <span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6">
                                    <input id="titleENG" class="form-control" data-validate-length-range="6" data-validate-words="2"
                                           name="title" placeholder="Unesite naslov na engleskom jeziku" required="required" type="text">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="textarea">Tekst | ENG <span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6">
                        <textarea id="textENG" required="required" name="text" class="form-control" rows="8"
                                  placeholder="Unesite tekst bloga na engleskom jeziku"></textarea>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Citat | ENG
                                </label>
                                <div class="col-md-6 col-sm-6">
                                    <input id="quoteENG" class="form-control" data-validate-length-range="6" data-validate-words="2"
                                           name="quote" placeholder="Unesite citat na engleskom jeziku" required="required" type="text">
                                </div>
                            </div>

                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 offset-md-3">
                                    <button type="submit" class="btn btn-primary">Otkaži</button>
                                    <button id="send" type="button" onclick="saveBlog()" class="btn btn-success">Sačuvaj</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
