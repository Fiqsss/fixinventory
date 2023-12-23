<div class="mt-5 mx-2">
    <div class="card shadow">
        <div class="card-header">
            <div class=" d-flex justify-content-between">
                <h4>Data Vendor</h4>
                <button data-bs-toggle="modal" data-bs-target="#addvendor" class="btn btn-success">
                    Tambah
                </button>
            </div>
        </div>
        <div class="paginateselect header-2 d-flex justify-content-start align-items-center">
            <select class="form-select ms-3 mt-3" style="width: 70px;" wire:model.live="paginate" id="">
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="15">15</option>
            </select>
        </div>
        <hr class="border border-dark border-1 opacity-50">
        {{--  --}}
        <div class="card-body overflow-auto">
            <table class="table table table-bordered table-striped">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">#</th>
                        <th class="text-center" scope="col">Nama Vendor</th>
                        <th class="text-center" scope="col">Alamat</th>
                        <th class="text-center" scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    @foreach ($vendors as $data)
                        <tr>
                            <th class="text-center" scope="row">{{ $i++ }}</th>
                            <td class="text-center">{{ $data->namavendor }}</td>
                            <td class="text-center">{{ $data->alamat }}</td>
                            <td class="text-center">
                                <a data-bs-toggle="modal" data-bs-target="#editvendor{{ $data->id }}"
                                    class=" btn text-white pt-1">
                                    <i class="fa-solid fa-pen-to-square text-warning"></i>
                                </a> ||
                                <a wire:click='deletevendor({{ $data->id }})'
                                    class="btn text-white pt-1">
                                    <i class="fa-solid fa-trash text-danger"></i>
                                </a>
                            </td>
                        </tr>
                        @include('layouts.vendor.editvendor')
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="pagination d-flex justify-content-end me-3">
            {{ $vendors->links() }}
        </div>
    </div>
</div>
