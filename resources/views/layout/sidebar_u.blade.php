<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ URL::to('home') }}">PROJECT TEAM 4</a>
        </div>

        <ul class="sidebar-menu">
            <li class="menu-header">M E N U</li>
                <li><a class="nav-link" href="{{ URL::to('Beranda') }}"><i class="fas fa-home"></i> <span>Beranda</span></a></li>
                {{-- <li><a class="nav-link" href="{{ URL::to('Users') }}"><i class="fas fa-user"></i> <span>Users</span></a></li> --}}
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-archive"></i> <span>Katalog</span></a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="{{ URL::to('dataBarang') }}"><div class="bullet"></div> Jenis Produk</a></li>
                        <li><a class="nav-link" href="{{ URL::to('dataModel') }}"><div class="bullet"></div> Model Produk</a></li>
                        <li><a class="nav-link" href="{{ URL::to('dataMotif') }}"><div class="bullet"></div> Motif Produk</a></li>
                    </ul>
                </li>

                {{-- <li><a class="nav-link" href="{{ URL::to('dataPemesanan') }}"><i class="fab fa-readme"></i> <span>Pemesanan</span></a></li>
                <li><a class="nav-link" href="{{ URL::to('dataPembayaran') }}"><i class="fas fa-money-check-alt"></i> <span>Pembayaran</span></a></li> --}}
                <li><a class="nav-link" href="{{ URL::to('/') }}"><i class="fas fa-tasks"></i> <span>Histori Penjualan</span></a></li>
            </li>
        </ul>
    </aside>
</div>
