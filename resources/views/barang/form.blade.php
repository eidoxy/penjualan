@extends('layout.app')

@section('title')
    Barang
@endsection

@section('content')
<div class="card mt-3">
    <div class="card-header">
        <div class="card-title">
            <h5>Edit Barang</h5>

            <form action="{{route('barang.update', $barang->id)}}" method="POST">
                <div class="card-body">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama" value="{{$barang->nama}}" class="form-control @error('nama') is-invalid @enderror">
                        @error('nama')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror

                        <label for="nama">Harga</label>
                        <input type="text" name="harga" id="harga" value="{{$barang->harga}}" class="form-control @error('harga') is-invalid @enderror">
                        @error('harga')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror

                        <label for="nama">Stock</label>
                        <input type="text" name="stock" id="stock" value="{{$barang->stock}}" class="form-control @error('stock') is-invalid @enderror">
                        @error('stock')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror

                        <label for="nama">Supplier</label>
                        <input type="text" name="supplier_id" id="supplier_id" value="{{$barang->supplier_id}}" class="form-control @error('supplier_id') is-invalid @enderror">
                        @error('supplier_id')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror

                        <label for="nama">Kategori</label>
                        <input type="text" name="kategori_id" id="kategori_id" value="{{$barang->kategori_id}}" class="form-control @error('kategori_id') is-invalid @enderror">
                        @error('kategori_id')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection