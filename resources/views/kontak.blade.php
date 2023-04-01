@extends('layouts.front')

@section('title', 'Kontak')
@section('content')
    <section class="secthero" id="hero-kontak">
        @include('layouts.headers.header')
        <div class="container">
            <div class="content-kontak">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-kontak bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item text-white text-sm active" aria-current="page">Kontak Kami</li>
                    </ol>
                </nav>
                <div class="titlehero-kontak">
                    <img src="{{ asset('img/forest2.png') }}">
                    <h2>Kontak Kami</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="maps">
        <div class="listkontak">
            <ul>
                <li><i class="fab fa-lg fa-whatsapp"></i> 0895 -3659-3000-16</li><div class="pipe"></div>
                <li><i class="far fa-lg fa-envelope"></i> DuskAdv@gmail.com</li><div class="pipe"></div>
                <li><i class="fab fa-lg fa-facebook"></i> Adv Sewa</li><div class="pipe"></div>
                <li><i class="fab fa-lg fa-instagram"></i> @DuskAdv.Sewa</li>
            </ul>
        </div>
        <div id="googleMap"></div>
    </section>
    @include('layouts.footers.guest.footer')
@endsection
