<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center">
    <div class="sidebar-brand-icon">
        <i class="fa-solid fa-shop"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Admin</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item {{ (Request::is('dashboard') || Request::is('dashboard/*') ? 'active open' : '') }}">
    <a class="nav-link" href="{{ route('dashboard') }}">
        <i class="fa-solid fa-gauge"></i>
        <span>Dashboard</span>
    </a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Produk
</div>

<!-- Nav Item - katalog Collapse Menu -->
<li class="nav-item {{ (Request::is('product') || Request::is('product/*') ? 'active open' : '') }}">
    <a class="nav-link" href="{{ route('product') }}">
        <i class="fa-solid fa-layer-group"></i>
        <span>Produk</span>
    </a>
</li>


<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->