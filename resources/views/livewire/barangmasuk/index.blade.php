<div class="mt-5 mx-2">
    <div class="card shadow">
        <div class="card-header ">
            <div class="btn-tambah d-flex justify-content-between">
                <h4 style="display: inline-block">Data Kedatangan Barang</h4>
                <button data-bs-toggle="modal" data-bs-target="#tambahkedatangan" class="btn btn-success">
                    Tambah
                </button>
            </div>
        </div>
        <div class="header-2 d-flex justify-content-start align-items-center">
            <div class="paginateselect">
                <select class="form-select ms-3 mt-3" style="width: 70px;" wire:model.live="paginate"
                    id="">
                    <option value="1">1</option>
                    <option value="10">10</option>
                    <option value="15">15</option>
                </select>
            </div>
            {{-- <div class="export mt-3 ms-3">
                <button class="btn btn-success" style="height: 38px" wire:click='export'>Export</button>
            </div> --}}
        </div>
        <!-- /.card-header -->
        <div class="card-body overflow-auto">
            <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th class="text-center" scope="col">#</th>
                            <th class="text-center" scope="col">Tanggal</th>
                            <th class="text-center" scope="col">Nama Barang</th>
                            <th class="text-center" scope="col">SJ</th>
                            <th class="text-center" scope="col">PO</th>
                            <th class="text-center" scope="col">Vendor</th>
                            <th class="text-center" scope="col">Kategori</th>
                            <th class="text-center" scope="col">Distributor</th>
                            <th class="text-center" scope="col">Transporter</th>
                            <th class="text-center" scope="col">Qty</th>
                            <th class="text-center" scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        @foreach ($kedatangans as $data)
                            <tr>
                                <th class="text-center" scope="row">{{ $i++ }}</th>
                                <td class="text-center">{{ $data->tanggal }}</td>
                                <td class="text-center">{{ $data->dataBarang->namabarang }}</td>
                                <td class="text-center">{{ $data->sj }}</td>
                                <td class="text-center">{{ $data->po }}</td>
                                <td class="text-center">{{ $data->vendor->namavendor }} </td>
                                <td class="text-center">{{ $data->kategori }} </td>
                                <td class="text-center">{{ $data->distributor }}</td>
                                <td class="text-center">{{ $data->transporter }}</td>
                                <td class="text-center">{{ $data->qty_kedatangan }} {{ $data->satuan }}</td>
                                <td class="text-center">
                                    <a data-bs-toggle="modal" data-bs-target="#editkedatangan{{ $data->id }}"  class="btn text-white pt-1"><i
                                            class="fa-solid fa-pen-to-square text-warning"></i></a>|
                                    <a wire:click='deleteKedatangan({{ $data->id }})'
                                        class="btn text-white pt-1"><i class="fa-solid fa-trash text-danger"></i></a>
                                </td>
                            </tr>
                    </tbody>
                    @include('layouts.kedatangan.editkedatangan')
                    @endforeach
            </table>
        </div>
        <!-- /.card-body -->
        <div class="pagination  d-flex justify-content-end me-3">
            {{ $kedatangans->links() }}
        </div>
      </div>
</div>
