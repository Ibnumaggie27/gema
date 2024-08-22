@extends('layouts.frontend.awal1')
@section('content')
<!-- Konten Utama -->
<div class="row h-100 justify-content-center" style="margin-top: 80px;">
    <div class="col-lg-12 col-12">
        <div id="auth-left">
            <div class="text-center mb-4">
                <h1>Selamat Datang di Halaman Utama</h1>
                <p>Ini adalah contoh nilai ppgd</p>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Pangkalan</th>
                        <th>Regu</th>
                        <th>No Regu</th>
                        <th>Hasil</th>
                        <th>Detail</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Contoh Data -->
                    <tr>
                        <td>1</td>
                        <td>Pangkalan A</td>
                        <td>Regu 1</td>
                        <td>01</td>
                        <td>85</td>
                        <td><a href="#">Lihat Detail</a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Pangkalan B</td>
                        <td>Regu 2</td>
                        <td>02</td>
                        <td>90</td>
                        <td><a href="#">Lihat Detail</a></td>
                    </tr>
                    <!-- Tambahkan baris lainnya sesuai kebutuhan -->
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection