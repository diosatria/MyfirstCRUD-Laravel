@extends('layouts.main')

@section('container')
<div class="container mt-4" class="mb-4">

    <!-- Main Content -->
    <div class="h4 pb-2 mb-4 text-danger border-bottom border-danger">
        <p style="font-size: 80px;">{{ 'Dashboard | DioFactory' }}</p>
    </div>
    <br>
    <div>
        @if(session()->has('success'))
            <div>
                {{ session('success') }}
            </div>
        @endif
    </div>
    <div>
        <div>
            <a class="btn btn-danger" href="{{ route('product.create') }}" role="button">Tambah Produk +</a>
        </div>
        <br>
        @if(isset($products) && count($products) > 0)
            <table class="table table-striped" border="1">
                <tr>
                    <th class="table-dark" style="padding: 5px;">ID</th>
                    <th class="table-dark" style="padding: 5px;">Nama Barang</th>
                    <th class="table-dark" style="padding: 5px;">Jumlah Barang</th>
                    <th class="table-dark" style="padding: 5px;">Harga Barang</th>
                    <th class="table-dark" style="padding: 5px;">Deskripsi Barang</th>
                    <th class="table-dark" style="padding: 5px;">Ubah</th>
                    <th class="table-dark" style="padding: 5px;">Hapus</th>
                </tr>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->qty }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->description }}</td>
                        <td>
                            <a href="{{ route('product.edit', ['product' => $product]) }}">Edit</a>
                        </td>
                        <td>
                            <form method="post" action="{{ route('product.destroy', ['product' => $product]) }}">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Delete" />
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
            <br>
        @else
        <div class="h6 pb-0 mb-4 text-danger border-bottom border-danger">
            <p><h5>Tidak ada produk yang sesuai.</h5> </p>
          </div>
          <br>
          <a class="btn btn-danger" href="/prsoduct" role="button">Kembali</a>
        @endif
    </div>
</div>
@endsection
