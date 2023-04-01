@extends('layouts.front')

@section('title', 'Sewa')
@section('content')
    <section class="secthero" id="hero">
        @include('layouts.headers.header')
    </section>
    <section class="sectmain" id="main">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5" href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item text-sm"><a class="opacity-5" href="{{ route('sewa') }}">Sewa</a></li>
                    <li class="breadcrumb-item text-sm active" aria-current="page">Detail</li>
                </ol>
            </nav>
            <div class="detail">
                <div class="detail-barang">
                    <div class="image-barang">
                        <img src="{{ asset('img/assets/tenda kap 2.png') }}">
                        <div class="image-kecil">
                            <img src="{{ asset('img/assets/tenda kap 2.png') }}">
                            <img src="{{ asset('img/assets/tenda kap 2.png') }}">
                            <img src="{{ asset('img/assets/tenda kap 2.png') }}">
                        </div>
                        <div class="desc">
                            <h6>Deskripsi Barang</h6>
                            <p>Lorem ipsum dolor sit amet consectetur. Eros scelerisque augue ut fermentum. Tellus feugiat congue id fringilla enim eget. At senectus faucibus ultricies sed elit mattis viverra sit. 
                                Sed eget neque aenean elit. Sed ut pellentesque eu quis.</p>
                        </div>
                    </div>
                    <div class="title-barang">
                        <h2>Tenda 2P</h2>
                        <p>Tersedia : 30</p>
                        <h2>Rp 50.000</h2>
                        <p><b>Detail :</b></p>
                        <p>Jenis : Produk sewa</p>
                        <p>Merek : Berbagai merek</p>
                        <p>Kapasitas tidur : 2P (dua orang)</p>
                        <p>Fungsi: Outdoor activities (camping, mountaineering, caving, hiking, climbing, etc)</p>
                    </div>
                    <div class="vertikal"></div>
                </div>
                <div class="detail-sewa">
                    <div class="row">
                        <label class="form-control-label hitam">Tanggal Sewa</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control tgl" placeholder="Tanggal Mulai">
                        </div>
                        <div class=" col-md-6">
                            <input type="text" class="form-control tgl" placeholder="Tanggal Selesai">
                        </div>
                        <div class="jumlah mt-4">
                            <label class="form-control-label hitam mt-2">Jumlah : </label>
                            <div class="wrapper">
                                <span class="minus putih">-</span>
                                <span class="minus putih">1</span>
                                <span class="plus putih">+</span>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <label class="form-control-label hitam">Tambah Peralatan</label>
                    <div class="add-peralatan">
                        <div class="kiri mt-2">
                            <input class="kotak" type="checkbox">
                            <p>Lampu Tenda</p>
                        </div>
                        <input type="text" class="form-control col-md-3">
                    </div>
                    <hr>
                    <label class="form-control-label hitam">Total : Rp 125.000</label><br>
                    <label class="form-control-label hitam">Day : 2</label><br>
                    <a href="{{ route('cart') }}" class="btn btn-success btn-sewa">Sewa Sekarang</a>
                </div>
            </div>
            <div class="sewatenda mt-12">
                <h2 class="mb-6">Sewa Tenda</h2>
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
