@extends('layouts.front')

@section('title', 'Sewa')
@section('content')
    <section class="secthero" id="hero">
        @include('layouts.headers.header')
    </section>
    <section class="sectmain" id="main">
        <div class="sewatenda">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5" href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item text-sm active" aria-current="page">Sewa</li>
                    </ol>
                </nav>
                <form action="" method="GET" class="searchproduct">
                    <input type="text" class="form-control" placeholder="Search for product">
                    <button type="submit" class="btn btn-success btn-search">
                        <svg width="20" height="20" viewBox="0 0 24 24" stroke-width="1.7" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path>
                            <path d="M21 21l-6 -6"></path>
                         </svg>
                    </button>
                </form>
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
                                    <a href="{{ route('detail') }}" class="btn btn-success btn-detail">Detail</a>
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
                        <div class="col-3">
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
