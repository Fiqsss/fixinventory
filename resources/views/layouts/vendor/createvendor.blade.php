<div id="addvendor" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Vendor</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('postvendor') }}" method="post">
                <div class="modal-body">
                    @csrf
                    <div class="modal-body">
                        <label for="namavendor">Nama Vendor</label>
                        <input name="namavendor" id="namavendor" class="form-control" type="text">
                        <label class="mt-3" for="alamat">Alamat</label>
                        <input name="alamat" id="alamat" class="form-control" type="text">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary  w-25">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
