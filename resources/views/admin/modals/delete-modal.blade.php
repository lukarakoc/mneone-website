<div class="modal fade" id="deleteBlogModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title">Blog</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="deleteBlogId">
                <p>Da li ste sigurni da želite izbrisati blog?</p>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal" id="closeModalBtn">Zatvori</button>
                <button type="button" class="btn btn-danger" id="deleteBlogBtn" onclick="deleteBlog()"><i class="fas fa-trash" ></i> Izbriši</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
