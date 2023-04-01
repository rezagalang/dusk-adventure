@extends('layouts.front')

@section('title', 'Home')
@section('content')
    <section class="secthero" id="hero">
        @include('layouts.headers.header')
        <div class="container">
            <div class="titlehero">
                <h1>Dusk Adventure</h1>
                <p>Nikmati pengalaman camping yang tidak terlupakan dengan peralatan kemah terbaik yang kami sewakan. Dari tenda hingga peralatan memasak, 
                    kami memiliki semuanya untuk membuat liburan Anda luar biasa!</p>
                <button class="btn btn-success button">Sewa Sekarang</button>
            </div>
        </div>
    </section>
    <section class="sectmain">
        <div class="chooseus">
            <h2 class="mid">Kenapa Memilih Kami</h2>
            <div class="container">
                <div class="choose">
                    <div class="circleicon">
                        <img src="{{ asset('img/assets/check.png') }}" alt="">
                    </div>
                    <h6>Berkualitas Tinggi</h6>
                    <p class="putih">Dengan penyewaan Dusk Adventure, Anda dapat menikmati pengalaman camping yang nyaman dan aman dengan peralatan berkualitas tinggi.</p>
                </div>
                <div class="choose">
                    <div class="circleicon">
                        <img src="{{ asset('img/assets/dolar.png') }}" alt="">
                    </div>
                    <h6>Harga Terjangkau</h6>
                    <p class="putih">Pilihan peralatan camping yang beragam dan harga yang terjangkau membuat Dusk Adventure menjadi pilihan yang tepat bagi siapa saja, baik pemula atau pengalaman dalam berkemah.</p>
                </div>
                <div class="choose">
                    <div class="circleicon">
                        <img src="{{ asset('img/assets/thumb.png') }}" alt="">
                    </div>
                    <h6>Pelayanan Terbaik</h6>
                    <p class="putih">Dusk Adventure menawarkan layanan pelanggan yang baik dan memastikan kepuasan pelanggan dengan memberikan solusi terbaik untuk setiap kebutuhan Anda.</p>
                </div>
            </div>
        </div>
        <div class="divider">
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
        </div>
        <div class="rentpack">
            <div class="container">
                <h3 class="hitam">Paket Sewa</h3>
                <p class="hitam">Nikmati Kemudahan dan Keleluasaan dengan Paket Sewa Terbaik dari Kami</p>
                <div class="cardsewa">      
                    <div class="card z-index-2 h-100 card-zoom">
                        <div class="cardheader pb-0 pt-3">
                            <h6>Tenda 4P</h6>
                            <p class="putih">Paket 1</p>
                        </div>
                        <div class="card-body p-3">
                            <h2 class="text-capitalize hitam">Rp 90.000</h2>
                            <h6 class="hitam">Per Malam</h6>
                            <ul>
                                <li><div class="checklist">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 20 20">
                                        <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
                                    </svg>
                                    </div>Matras 4 pcs
                                </li>
                                <hr>
                                <li><div class="checklist">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 20 20">
                                        <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
                                    </svg>
                                    </div>Sleeping Bag 4 pcs
                                </li>
                                <hr>
                                <li><div class="crossx">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 20 20">
                                        <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                                    </svg>
                                    </div>Lampu Tenda 2 pcs
                                </li>
                                <hr>
                                <li><div class="crossx">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 20 20">
                                        <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                                    </svg>
                                    </div>Kompor 1 set
                                </li>
                                <hr>
                                <li><div class="crossx">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 20 20">
                                        <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                                    </svg>
                                    </div>Nesting 1 set
                                </li>
                                <hr>
                                <li><div class="crossx">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 20 20">
                                        <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                                    </svg>
                                    </div>Flysheet 1 pcs
                                </li>
                            </ul>
                            <button class="btn btn-dark btn-pesan" id="btn-pesan-hitam">Pesan Sekarang</button>
                        </div>
                    </div>
                    <div class="card z-index-2 h-100 card-zoom">
                        <div class="cardheader pb-0 pt-3" id="cardheader-hijau">
                            <h6>Tenda 4P</h6>
                            <p class="putih">Paket 2</p>
                        </div>
                        <div class="card-body p-3">
                            <h2 class="text-capitalize hitam">Rp 130.000</h2>
                            <h6 class="hitam">Per Malam</h6>
                            <ul>
                                <li><div class="checklist">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 20 20">
                                        <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
                                    </svg>
                                    </div>Matras 4 pcs
                                </li>
                                <hr>
                                <li><div class="checklist">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 20 20">
                                        <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
                                      </svg>
                                    </div>Sleeping Bag 4 pcs
                                </li>
                                <hr>
                                <li><div class="checklist">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 20 20">
                                        <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
                                    </svg>
                                    </div>Lampu Tenda 2 pcs
                                </li>
                                <hr>
                                <li><div class="checklist">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 20 20">
                                        <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
                                    </svg>
                                    </div>Kompor 1 set
                                </li>
                                <hr>
                                <li><div class="crossx">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" stroke-width="2" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 20 20">
                                        <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                                    </svg>
                                    </div>Nesting 1 set
                                </li>
                                <hr>
                                <li><div class="crossx">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 20 20">
                                        <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                                    </svg>
                                    </div>Flysheet 1 pcs
                                </li>
                            </ul>
                            <button class="btn btn-success btn-pesan">Pesan Sekarang</button>
                        </div>
                    </div>
                    <div class="card z-index-2 h-100 card-zoom">
                        <div class="cardheader pb-0 pt-3">
                            <h6>Tenda 4P</h6>
                            <p class="putih">Paket 3</p>
                        </div>
                        <div class="card-body p-3">
                            <h2 class="text-capitalize hitam">Rp 176.000</h2>
                            <h6 class="hitam">Per Malam</h6>
                            <ul>
                                <li><div class="checklist">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 20 20">
                                        <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
                                    </svg>
                                    </div>Matras 4 pcs
                                </li>
                                <hr>
                                <li><div class="checklist">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 20 20">
                                        <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
                                    </svg>
                                    </div>Sleeping Bag 4 pcs
                                </li>
                                <hr>
                                <li><div class="checklist">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 20 20">
                                        <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
                                    </svg>
                                    </div>Lampu Tenda 2 pcs
                                </li>
                                <hr>
                                <li><div class="checklist">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 20 20">
                                        <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
                                    </svg>
                                    </div>Kompor 1 set
                                </li>
                                <hr>
                                <li><div class="checklist">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 20 20">
                                        <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
                                    </svg>
                                    </div>Nesting 1 set
                                </li>
                                <hr>
                                <li><div class="checklist">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 20 20">
                                        <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
                                    </svg>
                                    </div>Flysheet 1 pcs
                                </li>
                            </ul>
                            <button class="btn btn-success btn-pesan" id="btn-pesan-hitam">Pesan Sekarang</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sewatenda">
            <div class="container">
                <h2 class="hitam">Sewa Tenda</h2>
                <div class="product">
                    <div class="row mt-6">
                        <div class="col-3 mb-4">
                            <div class="card z-index-2 h-100 text-center">
                                <div class="card-header pb-0 pt-3 bg-transparent">
                                    <img src="{{ asset('img/assets/tenda kap 7.png') }}" alt="" class="img-fluid">
                                </div>
                                <div class="card-body p-3">
                                    <h4 class="text-capitalize"></h4>
                                    <h6>Tenda 7P</h6>
                                    <p>Rp 100.000</p>
                                    <a href="#" class="btn btn-success btn-detail">Detail</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 mb-4">
                            <div class="card z-index-2 h-100 text-center">
                                <div class="card-header pb-0 pt-3 bg-transparent">
                                    <img src="{{ asset('img/assets/tenda kap 7.png') }}" alt="" class="img-fluid">
                                </div>
                                <div class="card-body p-3">
                                    <h4 class="text-capitalize"></h4>
                                    <h6>Tenda 7P</h6>
                                    <p>Rp 100.000</p>
                                    <a href="#" class="btn btn-success btn-detail">Detail</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 mb-4">
                            <div class="card z-index-2 h-100 text-center">
                                <div class="card-header pb-0 pt-3 bg-transparent">
                                    <img src="{{ asset('img/assets/tenda kap 7.png') }}" alt="" class="img-fluid">
                                </div>
                                <div class="card-body p-3">
                                    <h4 class="text-capitalize"></h4>
                                    <h6>Tenda 7P</h6>
                                    <p>Rp 100.000</p>
                                    <a href="#" class="btn btn-success btn-detail">Detail</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 mb-4">
                            <div class="card z-index-2 h-100 text-center">
                                <div class="card-header pb-0 pt-3 bg-transparent">
                                    <img src="{{ asset('img/assets/tenda kap 7.png') }}" alt="" class="img-fluid">
                                </div>
                                <div class="card-body p-3">
                                    <h4 class="text-capitalize"></h4>
                                    <h6>Tenda 7P</h6>
                                    <p>Rp 100.000</p>
                                    <a href="#" class="btn btn-success btn-detail">Detail</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 mb-4">
                            <div class="card z-index-2 h-100 text-center">
                                <div class="card-header pb-0 pt-3 bg-transparent">
                                    <img src="{{ asset('img/assets/tenda kap 7.png') }}" alt="" class="img-fluid">
                                </div>
                                <div class="card-body p-3">
                                    <h4 class="text-capitalize"></h4>
                                    <h6>Tenda 7P</h6>
                                    <p>Rp 100.000</p>
                                    <a href="#" class="btn btn-success btn-detail">Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="perlengkapan">
            <div class="container">
                <h2 class="hitam">Perlengkapan Camping</h2>
                <div class="product">
                    <div class="row mt-6">
                        <div class="col-3 mb-4">
                            <div class="card z-index-2 h-100 text-center">
                                <div class="card-header pb-0 pt-3 bg-transparent">
                                    <img src="{{ asset('img/assets/tenda kap 7.png') }}" alt="" class="img-fluid">
                                </div>
                                <div class="card-body p-3">
                                    <h4 class="text-capitalize"></h4>
                                    <h6>Tenda 7P</h6>
                                    <p>Rp 100.000</p>
                                    <a href="#" class="btn btn-success btn-detail">Detail</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 mb-4">
                            <div class="card z-index-2 h-100 text-center">
                                <div class="card-header pb-0 pt-3 bg-transparent">
                                    <img src="{{ asset('img/assets/tenda kap 7.png') }}" alt="" class="img-fluid">
                                </div>
                                <div class="card-body p-3">
                                    <h4 class="text-capitalize"></h4>
                                    <h6>Tenda 7P</h6>
                                    <p>Rp 100.000</p>
                                    <a href="#" class="btn btn-success btn-detail">Detail</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 mb-4">
                            <div class="card z-index-2 h-100 text-center">
                                <div class="card-header pb-0 pt-3 bg-transparent">
                                    <img src="{{ asset('img/assets/tenda kap 7.png') }}" alt="" class="img-fluid">
                                </div>
                                <div class="card-body p-3">
                                    <h4 class="text-capitalize"></h4>
                                    <h6>Tenda 7P</h6>
                                    <p>Rp 100.000</p>
                                    <a href="#" class="btn btn-success btn-detail">Detail</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 mb-4">
                            <div class="card z-index-2 h-100 text-center">
                                <div class="card-header pb-0 pt-3 bg-transparent">
                                    <img src="{{ asset('img/assets/tenda kap 7.png') }}" alt="" class="img-fluid">
                                </div>
                                <div class="card-body p-3">
                                    <h4 class="text-capitalize"></h4>
                                    <h6>Tenda 7P</h6>
                                    <p>Rp 100.000</p>
                                    <a href="#" class="btn btn-success btn-detail">Detail</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 mb-4">
                            <div class="card z-index-2 h-100 text-center">
                                <div class="card-header pb-0 pt-3 bg-transparent">
                                    <img src="{{ asset('img/assets/tenda kap 7.png') }}" alt="" class="img-fluid">
                                </div>
                                <div class="card-body p-3">
                                    <h4 class="text-capitalize"></h4>
                                    <h6>Tenda 7P</h6>
                                    <p>Rp 100.000</p>
                                    <a href="#" class="btn btn-success btn-detail">Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.footers.guest.footer')
@endsection
