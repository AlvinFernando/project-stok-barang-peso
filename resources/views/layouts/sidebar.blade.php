<!-- Main Sidebar Container -->
<aside class="main-sidebar bg-black elevation-4">
    <!-- Brand Logo -->
    <a href="/dashboard" class="brand-link bg-navy">
        <img src="{{ asset('admin/dist/img/pesoodp.png') }}" alt="AdminLTE Logo" class="brand-image" style="opacity: .8; margin-left: 70px;">
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-2 mb-3 d-flex">
            <div class="info">
                WELCOME, <a href="#" class="d-block text-bold text-light">{{Auth::user()->name}}</a>
            </div>
        </div>


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->

            <li class="nav-header">CEK BARANG</li>

            {{-- DATA BARANG --}}
            <li class="nav-item">
                <a href="/dashboard" class="nav-link text-warning">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/barang" class="nav-link text-warning">
                    <i class="nav-icon fas fa-clipboard"></i>
                    <p>Manajemen Barang</p>
                    <i class="fas fa-angle-left right"></i>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('barang.index') }}" class="nav-link text-light">
                            <i class="fas fa-bahai nav-icon text-light"></i>
                            <p>Data Barang</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('barang_masuk.index') }}" class="nav-link text-light">
                            <i class="fas fa-bahai nav-icon text-light"></i>
                            <p>Data Barang Masuk</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('barang_keluar.index') }}" class="nav-link text-light">
                            <i class="fas fa-bahai nav-icon text-light"></i>
                            <p>Data Barang Keluar</p>
                        </a>
                    </li>
                </ul>
            </li>
            {{-- /DATA BARANG --}}

            {{-- DATA USER --}}
            @if (Auth::user()->level == 'admin')
                <li class="nav-item">
                    <a href="/pegawai" class="nav-link text-warning">
                        <i class="nav-icon far fa-user"></i>
                        <p>Manajemen Pegawai</p>
                        <i class="fas fa-angle-left right"></i>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            {{-- <a href="{{ route('admin0.index') }}" class="nav-link text-light">
                                <i class="fas fa-bahai nav-icon text-light"></i>
                                <p>Data Admin</p>
                            </a> --}}
                            <a href="{{ route('pegawai.index') }}" class="nav-link text-light">
                                <i class="fas fa-bahai nav-icon text-light"></i>
                                <p>Data Pegawai</p>
                            </a>
                        </li>
                    </ul>
                </li>
            @endif
            <li class="nav-item">
                <a href="/joborder" class="nav-link text-warning">
                    <i class="nav-icon fas fa-clipboard-list"></i>
                    <p>Job Order</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('deliveryorder.index') }}" class="nav-link text-warning">
                    <i class="nav-icon fas fa-clipboard-list"></i>
                    <p>Delivery Order</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/invoice" class="nav-link text-warning">
                    <i class="nav-icon fas fa-receipt"></i>
                    <p>Invoice</p>
                </a>
            </li>
            <br>
            <li class="nav-item">
                <a href="/logout" class="nav-link text-warning">
                    <i class="nav-icon fas fa-sign-out-alt"></i>
                    <p>Logout</p>
                </a>
            </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
