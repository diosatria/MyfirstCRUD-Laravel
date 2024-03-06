@extends('layouts.main')

@section('container')
<br>
<div class="h4 pb-2 mb-4 text-danger border-bottom border-danger">
    <p style="font-size: 30px;">{{ 'Edit ProdukMu | DioFactory' }}</p>
</div>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>

        @endif
    </div>
    <form method="post" action="{{route('product.update', ['product' => $product])}}">
        @csrf
        @method('put')
        <label><h5>Ubah Nama Produk : </h5></label>
        <div class="input-group mb-3">
            <span class="input-group-text id" id="basic-addon1">Nama</span>
            <input type="text" class="form-control" aria-label="Username" name="name" aria-describedby="basic-addon1" placeholder="Ubah Nama Produk" value="{{$product->name}}" />
        </div>
        @error('name')
        <div class="alert alert-danger">{{ "* Harap Isi Bagian Nama" }}</div>
        @enderror

        <label><h5>Ubah Jumlah Barang : </h5></label> <br>
        <div class="input-group mb-3">
            <span class="input-group-text id" id="basic-addon1"><label>Jumlah</label></span>
            <input type="text" class="form-control" aria-label="Username"  name="qty" aria-describedby="basic-addon1" placeholder="Ubah Jumlah Prouk" value="{{$product->qty}}" />
        </div>
        @error('qty')
        <div class="alert alert-danger">{{ "* Harap Isi Bagian Jumlah" }}</div>
        @enderror

        <label><h5>Masukkan Harga Barang : </h5></label> <br>
        <div class="input-group mb-3">
            <span class="input-group-text">Harga</span>
            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="price" placeholder="Ubah Harga Produk" value="{{$product->price}}" />
            <span class="input-group-text">.00</span>
        </div>
        @error('price')
        <div class="alert alert-danger">{{ "* Harap Isi Pada Bagian Harga" }}</div>
        @enderror

        <label><h5>Ubah Deskripsi Produk :</h5></label> <br>
        <div class="input-group">
            <span class="input-group-text">Deskripsi</span>
            <textarea type = "text" class="form-control" aria-label="With textarea" name="description" placeholder="Ubah Deskripsi Produk" value="{{$product->description}}"></textarea>
        </div>
        @error('description')
            <div class="alert alert-danger">{{ "* Harap Isi Bagian Deskripsi" }} </div>
        @enderror

        <br>
        <div class="button-group mb-3">
            <input type="submit" value="Simpan Perubahan" class="btn btn-danger" class="btn btn-outline-dark"/>
        </div>
    </form>
</div>
@endsection
