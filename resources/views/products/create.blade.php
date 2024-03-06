
    @extends('layouts.main')

   @section('container')
   <br>
   <div class="h4 pb-2 mb-4 text-danger border-bottom border-danger">
    <p style="font-size: 30px;">{{ 'Buat ProdukMu | DioFactory' }}</p>
  </div>

   <div>
       @if($errors->any())
       <ul>
           @foreach($errors->all() as $error)
               <li>{{$error}}</li> <br>
           @endforeach
       </ul>
       @endif
   </div>

   <form method="post" action="{{route('product.store')}}">
       @csrf
       @method('post')
       <label><h5>Masukkan Nama Produk :</h5></label> <br>
       <div class="input-group mb-3">
           <span class="input-group-text id" id="basic-addon1"><label>Nama</label></span>
           <input type="text" class="form-control" aria-label="Username" name="name"  aria-describedby="basic-addon1" placeholder="Set Nama Produk" />
       </div>
       @error('name')
            <div class="alert alert-danger">{{ "Harap Isi Kolom  Nama!" }}</div>
       @enderror

       <label><h5>Set Jumlah produk : </h5></label>
       <div class="input-group mb-3">
           <span class="input-group-text id" id="basic-addon1"><label>Jumlah</label></span>
           <input type="text" class="form-control" aria-label="Username" name="qty" aria-describedby="basic-addon1"  placeholder="Jumlah Stok Produk" />
       </div>
       @error('qty')
            <div class="alert alert-danger">{{ "Harap Isi Kolom Jumlah!" }}</div>
       @enderror

       <label><h5>Masukkan Harga Barang : </h5></label> <br>
       <div class="input-group mb-3">
           <span class="input-group-text">Harga</span>
           <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="price" placeholder="Set Harga Produk" />
           <span class="input-group-text">.00</span>
       </div>

       @error('price')
       <div class="alert alert-danger">{{ "Harap Isi Kolom Harga!" }}</div>
       @enderror

       <label><h5>Masukkan Deskripsi Barang : </h5></label> <br>
       <div class="input-group">
           <span class="input-group-text"><label >Deskripsi</label></span>
           <textarea class="form-control" aria-label="With textarea" type="text" name="description" placeholder="Tambahkan Deskripsi Produk" ></textarea>
       </div>
       <br>
       <div class="button-group mb-3">
           <input type="submit" value="Buat Produk Baru" class="btn btn-danger"  class="btn btn-outline-dark"/>
       </div>
   </form>
   @endsection
