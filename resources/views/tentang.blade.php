@extends('layouts.front')

@section('title', 'Tentang Kami')
@section('content')
    <section class="secthero" id="hero">
        @include('layouts.headers.header')
    </section>
    <section class="sectmain" id="main">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5" href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item text-sm active" aria-current="page">Tentang Kami</li>
                </ol>
            </nav>
            <div class="tentangkami">
                <div class="image-tentang">
                    <img src="{{ asset('img/assets/bg-tentang.png') }}" alt="">
                    <div class="brand-tentang">
                        <h2>DUSK ADVENTURE</h2>
                    </div>
                </div>
                <div class="title-tentang">
                    <h3>Sekilas tentang kami</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div>
            </div>
        </div>
        <div class="visi-misi">
            <div class="bg-vm">
                <div class="container">
                    <div class="title-vm">
                        <div class="card mb-4">
                            <div class="header-ketentuan">
                                <h6>VISI</h6>
                            </div>
                            <div class="card-body">
                                <p>Memberikan pengalaman camping yang menyenangkan dan aman bagi para pelanggan dengan menyediakan alat yang berkualitas dan layanan yang baik.</p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="header-ketentuan">
                                <h6>MISI</h6>
                            </div>
                            <div class="card-body">
                                <ol>
                                    <li>Memberikan alat camping yang berkualitas dan terawat untuk memastikan kenyamanan pelanggan saat berkemah.</li>
                                    <li>Menyediakan layanan pelanggan yang baik dan responsif untuk memenuhi kebutuhan dan keinginan pelanggan.</li>
                                    <li>Menjaga harga sewa alat camping yang wajar dan terjangkau bagi semua kalangan.</li>
                                    <li>Berinovasi dan meningkatkan kualitas produk dan layanan untuk memberikan pengalaman camping yang lebih baik bagi pelanggan.</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="pic-vm">
                        <img src="{{ asset('img/pic-vm.png') }}">
                    </div>
                </div>
            </div>
        </div>
        <div class="testi">
            <div class="container">
                <h6>Testimoni</h6>
                <h3>Pengalaman Camping yang Menakjubkan <br> dengan Alat Dari Dusk Adventure</h3>
                <div class="product">
                    <div class="row mt-7">
                        <div class="col-3 mb-4">
                            <div class="card card-testi z-index-2 h-100 text-center">
                                <div class="image-testi">
                                    <img src="{{ asset('img/assets/Ellipse 7 (1).png') }}">
                                </div>
                                <div class="card-body p-3">
                                    <h6>Alex</h6>
                                    <p>Wirausaha</p>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <p>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#FFC700" class="bi bi-star-fill" viewBox="0 0 16 16">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#FFC700" class="bi bi-star-fill" viewBox="0 0 16 16">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#FFC700" class="bi bi-star-fill" viewBox="0 0 16 16">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#FFC700" class="bi bi-star-fill" viewBox="0 0 16 16">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#FFC700" class="bi bi-star-fill" viewBox="0 0 16 16">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                        </svg>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 mb-4">
                            <div class="card card-testi z-index-2 h-100 text-center">
                                <div class="image-testi">
                                    <img src="{{ asset('img/assets/Ellipse 7 (2).png') }}">
                                </div>
                                <div class="card-body p-3">
                                    <h6>Alex</h6>
                                    <p>Wirausaha</p>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <p>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#FFC700" class="bi bi-star-fill" viewBox="0 0 16 16">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#FFC700" class="bi bi-star-fill" viewBox="0 0 16 16">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#FFC700" class="bi bi-star-fill" viewBox="0 0 16 16">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#FFC700" class="bi bi-star-fill" viewBox="0 0 16 16">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#FFC700" class="bi bi-star-fill" viewBox="0 0 16 16">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                        </svg>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 mb-4">
                            <div class="card card-testi z-index-2 h-100 text-center">
                                <div class="image-testi">
                                    <img src="{{ asset('img/assets/Ellipse 7 (3).png') }}">
                                </div>
                                <div class="card-body p-3">
                                    <h6>Alex</h6>
                                    <p>Wirausaha</p>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <p>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#FFC700" class="bi bi-star-fill" viewBox="0 0 16 16">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#FFC700" class="bi bi-star-fill" viewBox="0 0 16 16">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#FFC700" class="bi bi-star-fill" viewBox="0 0 16 16">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#FFC700" class="bi bi-star-fill" viewBox="0 0 16 16">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#FFC700" class="bi bi-star-fill" viewBox="0 0 16 16">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                        </svg>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 mb-4">
                            <div class="card card-testi z-index-2 h-100 text-center">
                                <div class="image-testi">
                                    <img src="{{ asset('img/assets/Ellipse 7 (4).png') }}">
                                </div>
                                <div class="card-body p-3">
                                    <h6>Alex</h6>
                                    <p>Wirausaha</p>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <p>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#FFC700" class="bi bi-star-fill" viewBox="0 0 16 16">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#FFC700" class="bi bi-star-fill" viewBox="0 0 16 16">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#FFC700" class="bi bi-star-fill" viewBox="0 0 16 16">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#FFC700" class="bi bi-star-fill" viewBox="0 0 16 16">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#FFC700" class="bi bi-star-fill" viewBox="0 0 16 16">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                        </svg>
                                    </p>
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
