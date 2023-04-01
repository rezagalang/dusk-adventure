@extends('layouts.front')

@section('title', 'Cart')
@section('content')
    <section class="secthero" id="hero">
        @include('layouts.headers.header')
    </section>
    <section class="sectmain" id="main">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5" href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item text-sm active" aria-current="page">Cart</li>
                </ol>
            </nav>
            <div class="your-cart">
                <h2 class="mb-6">Your cart</h2>
                <div class="cart">
                    <div class="detail-cart">
                        <ul class="cart-header">
                            <li>Produk</li>
                            <li>Harga</li>
                            <li>Jumlah</li>
                            <li>Subtotal</li>
                            <li>&nbsp;</li>
                        </ul>
                        <div class="main-cart">
                            <div class="img-cart">
                                <img src="{{ asset('img/assets/tenda kap 7.png') }}" alt="" class="img-fluid">
                            </div>
                            <div class="det-product">
                                <p><b>Tenda 2P</b></p>
                                <p><b>Tanggal Mulai :</b> 12 Januari 2023</p>
                                <p><b>Tanggal Selesai :</b> 13 Januari 2023</p>
                            </div>
                            <p class="auto-cart">Rp50.000</p>
                            <input type="number" class="form-control jumlah">
                            <p class="auto-cart">Rp50.000</p>
                            <a href="#" class="remcart">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="red" class="bi bi-x-lg" viewBox="0 0 20 20">
                                    <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                                </svg>
                            </a>
                        </div>
                        <div class="main-cart">
                            <div class="img-cart">
                                <img src="{{ asset('img/assets/tenda kap 7.png') }}" alt="" class="img-fluid">
                            </div>
                            <div class="det-product">
                                <p><b>Tenda 2P</b></p>
                                <p><b>Tanggal Mulai :</b> 12 Januari 2023</p>
                                <p><b>Tanggal Selesai :</b> 13 Januari 2023</p>
                            </div>
                            <p class="auto-cart">Rp50.000</p>
                            <input type="number" class="form-control jumlah">
                            <p class="auto-cart">Rp50.000</p>
                            <a href="#" class="remcart">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="red" class="bi bi-x-lg" viewBox="0 0 20 20">
                                    <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="checkout">
                       <div class="total-sewa">
                            <h6>Total Sewa</h6>
                        </div>
                        <div class="main-total">
                            <table>
                                <tr class="bet">
                                    <td><h6>Subtotal</h6>Rp50.000</td>
                                </tr>
                                <tr class="bet">
                                    <td><h6>Total</h6><h6>Rp50.000</h6></td>
                                </tr>
                            </table>
                        </div>
                        <button class="btn btn-success btn-pesan" id="btn-check">Checkout</button>
                    </div>
                </div>
            </div>
            <div class="sewatenda mt-8">
                <h2 class="mb-6">Tambah Perlengkapan</h2>
                <div class="product">
                    <div class="row">
                        <div class="col-3 mb-8">
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
                        <div class="col-3 mb-8">
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
                        <div class="col-3 mb-8">
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
                        <div class="col-3 mb-8">
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
