<!-- Sidebar Menu -->
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item">
            <a href="/" class="nav-link {{ request()->is('/') ? 'active' : '' }}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="" class="nav-link {{ request()->is('mahasiswa') ? 'active' : '' }}">
                <i class="nav-icon fas fa-ellipsis-h"></i>
                <p>
                    Data Kepengurusan
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="/mahasiswaukmmusikundiksha"
                        class="nav-link {{ request()->is('mahasiswa') ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Mahasiswa</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/demisionerukmmusikundiksha"
                        class="nav-link {{ request()->is('demisioner') ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Demisioner</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="" class="nav-link {{ request()->is('peminjaman') ? 'active' : '' }}">
                <i class="nav-icon fas fa-ellipsis-h"></i>
                <p>
                    Peminjaman Inventaris
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="/peminjaman" class="nav-link {{ request()->is('peminjaman') ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Peminjaman Barang</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/pengembalian" class="nav-link {{ request()->is('pengembalian') ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Pengembalian Barang</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="/dokumentasi" class="nav-link {{ request()->is('dokumentasi') ? 'active' : '' }}">
                <i class="nav-icon fas fa-file"></i>
                <p>Dokumentasi</p>
            </a>
        </li>
    </ul>
</nav>
<!-- /.sidebar-menu -->
