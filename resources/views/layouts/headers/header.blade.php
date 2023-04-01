<header class="header">
    <div class="container">
        <a href="#"><img src="{{ asset('img/forest.png') }}" alt="logo"></a>
        <div class="mainmenu">
            <ul>
                <li><a href="{{ route('home') }}" class="{{ Route::is('home') ? 'active' : '' }}">Home</a></li>
                <li><a href="{{ route('sewa') }}" class="{{ Route::is('sewa') || Route::is('detail') ? 'active' : '' }}">Sewa</a></li>
                <li><a href="{{ route('ketentuan') }}" class="{{ Route::is('ketentuan') ? 'active' : '' }}">Ketentuan</a></li>
                <li><a href="{{ route('tentang') }}" class="{{ Route::is('tentang') ? 'active' : '' }}">Tentang Kami</a></li>
                <li><a href="{{ route('kontak') }}" class="{{ Route::is('kontak') ? 'active' : '' }}">Kontak</a></li>
                <li><a href="#">Login</a></li>
                <li><a href="{{ route('cart') }}" class="{{ Route::is('cart') ? 'active' : '' }}">Keranjang&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16"><path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/></svg></a></li>
            </ul>
        </div>
    </div>
</header>