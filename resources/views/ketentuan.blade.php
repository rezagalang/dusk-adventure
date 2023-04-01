@extends('layouts.front')

@section('title', 'Ketentuan')
@section('content')
    <section class="secthero" id="hero">
        @include('layouts.headers.header')
    </section>
    <section class="sectmain" id="main">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5" href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item text-sm active" aria-current="page">Ketentuan</li>
                </ol>
            </nav>
            <div class="ketentuan">
                <h2>Dusk Adventure</h2>
                <div class="card">
                    <div class="header-ketentuan">
                        <h6>SYARAT & KETENTUAN SEWA (WAJIB BACA)</h6>
                    </div>
                    <div class="card-body">
                        <ol>
                            <li>Pemesan harus berusia 18 tahun atau lebih.</li>
                            <li>Pemesan harus memberikan deposit sejumlah uang yang telah disepakati sebagai jaminan.</li>
                            <li>Pemesan harus memastikan bahwa peralatan yang disewa akan digunakan dengan baik dan benar sesuai dengan petunjuk pemakaian yang diberikan.</li>
                            <li>Pemesan bertanggung jawab atas kerusakan atau kehilangan peralatan yang disewa selama masa sewa.</li>
                            <li>Pemesan harus mengembalikan peralatan yang disewa pada waktu yang ditentukan dan dalam kondisi yang sama dengan saat diterima.</li>
                            <li>Pemesan harus membayar biaya sewa dan biaya tambahan lainnya sesuai dengan harga yang disepakati sebelumnya.</li>
                            <li>Pemesan tidak diperbolehkan untuk menyewakan peralatan yang disewa kepada pihak lain tanpa persetujuan dari Dusk Adventure.</li>
                            <li>Dusk Adventure berhak untuk membatalkan sewa peralatan tanpa pengembalian deposit jika terjadi pelanggaran syarat dan ketentuan.</li>
                            <li>Dusk Adventure tidak bertanggung jawab atas kerugian, kecelakaan, atau kerusakan yang terjadi selama masa sewa.</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.footers.guest.footer')
@endsection
