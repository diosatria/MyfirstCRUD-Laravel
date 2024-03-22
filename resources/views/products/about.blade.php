@extends('layouts.main')
@section('container')
<div class="group mt-4">
    <div class="h4 pb-2 mb-4 text-danger border-bottom border-danger">
        <p style="font-size: 30px;">{{ 'About Me | DioFactory' }}</p>
        </div>
        <h3>{{ $nama }}</h3>
        <h4>{{ $email }}</h4>
        <div class="text-center" class="rounded-circle">
            <img src="img/{{ $gambar }}" alt=" {{ $nama }} " width="200px" class="rounded-circle" >
            <style>
                .rounded-circle {
                    border-top: 10px solid  #ff9933;
                    border-right: 20px solid transparent;
                    border-left: 20px solid transparent;
                }
            </style>
        </div>

        <p style="font-size: 28px;">{{ 'Know Me More : ' }}</p>
            <a href="/experience" class="btn btn-outline-primary my-3">Experience</a>
        </div>
        <style>
                    .rounded-circle {
                    border: 20px solid #fff;
                    box-shadow: 0 / 0 / 8px rgba(17, 17, 17, .6);
                    }
            </style>
        </div>
        <br><br>
        <div class="d-flex justify-content-start flex-wrap" class="d-flex flex-row">
            <a href="/" class="btn btn-outline-dark text-decoration-none me-3" class="p-2"><-Kembali ke Halaman Home</a>
            </style>
        </div>
        <br>
    </div>
@endsection
