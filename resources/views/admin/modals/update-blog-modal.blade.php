
<div class="modal fade bd-example-modal-lg" id="updateBlogModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            @csrf
            <input type="hidden" id="blogId">
            <div class="modal-body">
                <ul class="nav nav-tabs card-header-tabs mb-3 text-center" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link" id="card-gallery-update-btn-3" data-toggle="tab" href="#card-update-gallery-3"
                           role="tab" aria-controls="card-2" aria-selected="false">Slika</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" id="card-gallery-update-btn-1" data-toggle="tab" href="#card-update-gallery-1"
                           role="tab" aria-controls="card-1" aria-selected="true">Crnogorski</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="card-gallery-update-btn-2" data-toggle="tab" href="#card-update-gallery-2"
                           role="tab" aria-controls="card-2" aria-selected="false">Engleski</a>
                    </li>

                </ul>
                <div class="container-fluid col-md-12">
                    <div class="tab-content">
                        <div class="tab-pane fade" id="card-update-gallery-3" role="tabpanel" aria-labelledby="card-tab-2">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="coverImage"></label>
                                        <input type="file" id="coverImageUpdate" class="form-control-file">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade show active" id="card-update-gallery-1" role="tabpanel"
                             aria-labelledby="card-tab-1">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="titleMneUpdate" class="col-form-label">Naslov *</label>
                                        <input type="text" id="titleMneUpdate" class="form-control" maxlength="255">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="col-form-label" for="textMneUpdate">Tekst *</label>
                                        <textarea id="textMneUpdate" cols="3" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="col-form-label" for="textMneUpdate">Citat</label>
                                        <textarea id="quoteMneUpdate" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="card-update-gallery-2" role="tabpanel" aria-labelledby="card-tab-2">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="col-form-label" for="titleEngUpdate">Naslov *</label>
                                        <input type="text" id="titleEngUpdate" class="form-control">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="col-form-label" for="textEngUpdate">Tekst *</label>
                                        <textarea type="text" id="textEngUpdate" class="form-control"></textarea>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="col-form-label" for="quoteEngUpdate">Citat</label>
                                        <textarea cols="3" id="quoteEngUpdate" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer justify-content-center">

                    <button type="button" class="btn btn-danger" id="closeUpdateBlogModaltn" data-dismiss="modal">Zatvori
                    </button>
                    <button type="button" class="btn btn-primary" name="save" id="updateBlogBtn"
                            onclick="updateBlog()">Sačuvaj
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

