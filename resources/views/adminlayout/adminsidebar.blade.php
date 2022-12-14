<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="/admin" class="brand-link">
        <img src="{{ asset('img/kuburaya.png') }}" alt="Admin Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Admin Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('img/' . $profiledata->profile_pic) }}" class="img-square elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"> {{ $profiledata->nama }}</a>
                {{-- <small class="text-white d-block">{{ $profiledata->username }}</small> --}}
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">

                <li class="nav-item mb-3 user-panel">
                    <a href="/" class="nav-link {{ Request::is('/') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Home
                        </p>
                    </a>
                </li>

                <li class="nav-header elevation-1 pb-3">Menu Geografis</li>
                <li class="nav-item">
                    <a href="/admin/dashboard" class="nav-link {{ Request::is('admin/dashboard*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/admin/kabupaten" class="nav-link {{ Request::is('admin/kabupaten*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-building"></i>
                        <p>
                            Manajemen Kabupaten
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/admin/kecamatan" class="nav-link {{ Request::is('admin/kecamatan*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-landmark"></i>
                        <p>
                            Manajemen Kecamatan
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/admin/desa" class="nav-link {{ Request::is('admin/desa*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-map-signs"></i>
                        <p>
                            Manajemen Desa
                        </p>
                    </a>
                </li>

                <li class="user-panel nav-item {{ Request::is('admin/potensi*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Potensi Desa
                            <i class="right fas fa-angle-left"></i>
                            <span class="badge badge-info right">4</span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item ">
                            <a href="/admin/potensi/sekolah"
                                class="nav-link {{ Request::is('admin/potensi/sekolah*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sekolah</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/potensi/tempatibadah"
                                class="nav-link {{ Request::is('admin/potensi/tempatibadah*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tempat Ibadah</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/potensi/tempatwisata"
                                class="nav-link {{ Request::is('admin/potensi/tempatwisata*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tempat Wisata</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/potensi/pasar"
                                class="nav-link {{ Request::is('admin/potensi/pasar*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pasar</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-header elevation-1 mt-2 pb-3">Menu User</li>
                <li class="nav-item">
                    <a href="/admin/slider" class="nav-link {{ Request::is('admin/slider*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-sliders-h"></i>
                        <p>
                            Home Slider
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/profile" class="nav-link {{ Request::is('admin/profile*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Profile Desa
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/artikel" class="nav-link {{ Request::is('admin/artikel*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>
                            Artikel Desa
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
