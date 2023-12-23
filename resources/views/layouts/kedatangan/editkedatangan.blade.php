<div id="editkedatangan{{ $data->id }}" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Kedatangan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action='/editkedatangan/{{ $data->id }}' method="post">
                    @csrf
                    <div class="modal-body">
                        {{-- tanggal --}}
                        <input value="{{ $data->tanggal }}" name='tanggal' type="date"
                            class="form-control mt-3 shadow @error('tanggal')
                                    is-invalid
                                @enderror"
                            placeholder="Tanggal">
                        @error('namabarang')
                            <span class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        {{-- namabarang --}}
                        <select name="namabarang"
                            class="form-control mt-3 shadow @error('namabarang') is-invalid @enderror">
                                <option value="{{ $data->id }}">{{ $data->dataBarang->namabarang }}</option>
                        </select>
                        @error('namabarang')
                            <span class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        {{-- sj --}}
                        <input value="{{ $data->sj }}" name='sj' type="text"
                            class="form-control mt-3 shadow  @error('sj')
                    is-invalid
                @enderror"
                            placeholder="SJ">
                        @error('sj')
                            <span class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        {{-- po --}}
                        <input value="{{ $data->po }}" name='po' type="text"
                            class="form-control mt-3 shadow @error('po') is-invalid
                        @enderror"
                            placeholder="PO">
                        @error('po')
                            <span class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        {{-- vendor --}}
                        <select
                            class="form-select shadow mt-3 @error('vendor') is-invalid
                        @enderror"
                            name='vendor'>
                            @foreach ($vendors as $v)
                                <option value="{{ $v->id }}">{{ $v->namavendor }}</option>
                            @endforeach
                        </select>
                        @error('vendor')
                            <span class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        {{-- kategori --}}
                        <select
                            class="form-select mt-3 shadow @error('kategori') is-invalid
                        @enderror"
                            name='kategori'>
                            <option value="Packaging">Packaging</option>
                            <option value="Network">Network</option>
                            <option value="Return">Return</option>
                            <option value="Device">Device</option>
                            <option value="Atk">Atk</option>
                        </select>
                        @error('kategori')
                            <span class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        {{-- distributor --}}
                        <input value="{{ $data->distributor }}" name='distributor' type="text"
                            class="form-control mt-3 shadow" placeholder="Distributor">
                        {{-- transporter --}}
                        <input value="{{ $data->transporter }}" name='transporter' type="text"
                            class="form-control mt-3 shadow" placeholder="Transporter">
                        {{-- satuan --}}
                        <select value="{{ $data->satuan }}"
                            class="form-select mt-3 shadow @error('satuan')
                    is-invalid
                @enderror"
                            name='satuan'>
                            <option value="pcs">pcs</option>
                            <option value="roll">roll</option>
                            <option value="pack">pack</option>
                            <option value="unit">unit</option>
                        </select>
                        @error('satuan')
                            <span class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        {{-- qty --}}
                        <input value="{{ $data->qty_kedatangan }}"
                            class="form-control mt-3 shadow @error('qty')
                            is-invalid
                        @enderror"
                            name='qty' type="number" placeholder="Qty">
                        @error('qty')
                            <span class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary  w-25">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>
