
<div class="modal fade bd-example-modal-lg" id="addBlogModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            @csrf
            <div class="modal-body">
            <ul class="nav nav-tabs card-header-tabs mb-3 text-center" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link" id="card-gallery-btn-3" data-toggle="tab" href="#card-gallery-3"
                       role="tab" aria-controls="card-2" aria-selected="false">Slika</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" id="card-gallery-btn-1" data-toggle="tab" href="#card-gallery-1"
                       role="tab" aria-controls="card-1" aria-selected="true">Crnogorski</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="card-gallery-btn-2" data-toggle="tab" href="#card-gallery-2"
                       role="tab" aria-controls="card-2" aria-selected="false">Engleski</a>
                </li>

            </ul>
            <div class="container-fluid col-md-12">
                <div class="tab-content">
                    <div class="tab-pane fade" id="card-gallery-3" role="tabpanel" aria-labelledby="card-tab-2">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="coverImage"></label>
                                    <input type="file" id="coverImage" class="form-control-file">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade show active" id="card-gallery-1" role="tabpanel"
                         aria-labelledby="card-tab-1">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="titleMne" class="col-form-label">Naslov *</label>
                                    <input type="text" id="titleMne" class="form-control" maxlength="255">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="col-form-label" for="textMne">Tekst *</label>
                                    <textarea id="textMne" cols="3" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="col-form-label" for="textMne">Citat</label>
                                    <textarea id="quoteMne" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="card-gallery-2" role="tabpanel" aria-labelledby="card-tab-2">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="col-form-label" for="volcanoTitleEng">Naslov *</label>
                                    <input type="text" id="titleEng" class="form-control">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label class="col-form-label" for="volcanoTitleEng">Tekst *</label>
                                    <textarea type="text" id="textEng" class="form-control"></textarea>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label class="col-form-label" for="volcanoTitleEng">Citat</label>
                                    <textarea cols="3" id="quoteEng" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="modal-footer justify-content-center">

                <button type="button" class="btn btn-danger" id="closeBlogModaltn" data-dismiss="modal">Zatvori
                </button>
                <button type="button" class="btn btn-primary" name="save" id="saveBlogBtn"
                        onclick="saveBlog()">Sačuvaj
                </button>
            </div>
            </div>
        </div>
        </div>
    </div>

