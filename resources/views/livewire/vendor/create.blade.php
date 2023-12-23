
<div  wire:transition.in.out.opacity.duration.200ms style="width: 100%; height:100%; " class="position-absolute top-0 start-0 bg-dark bg-opacity-25">
    <div class="bg-white shadow rounded fade show position-absolute top-50 start-50 translate-middle w-25" data-bs-backdrop="static" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel">
        <div class="container modal-dialog-centered ">
            <div class="modal-content mt-4 mx-3">
                <div class="modal-header " class="id">
                    <h5 class="modal-title">Tambah Vendor</h5>
                    <button wire:click="closeTambahVendor" type="submit"  class="btn btn-close p-1"></button>
                </div>
                <hr class="border border-danger border-2 opacity-50">
                <form wire:submit.prevent='addvendor'>
                    <div class="modal-body mt-4">
                        <input wire:model='namavendor' type="text" class="form-control" placeholder="Nama Vendor">
                        <input wire:model='alamat' type="text" class="form-control mt-4" placeholder="Alamat">
                    </div>
                    <div class="modal-footer mt-4">
                        <button type="submit" class="btn btn-primary w-25">
                            <span >Save</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
