<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar"
    style="background: linear-gradient(135deg, #78BA25 0%, #0056b3 100%);">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon ">
            {{-- rotate-n-15 --}}
            <img src="{{ asset('images/logo-blanc.png') }}" alt="Koulmed Logo" class="logo" height="40px">
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Tableau de bord</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Fonctionnalités
    </div>

    <li class="nav-item {{ request()->routeIs('blog.form') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('blog.form') }}">
            <i class="fas fa-fw fa-plus"></i>
            <span>Ajouter un blog</span></a>
    </li>

    <li class="nav-item {{ request()->routeIs('blog.all') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('blog.all') }}">
            <i class="fas fa-fw fa-eye"></i>
            <span>Voir tous les blogs</span></a>
    </li>

    <li class="nav-item {{ request()->routeIs('blog.historique') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('blog.historique') }}">
            <i class="fas fa-fw fa-book"></i>
            <span>Historique des blogs</span></a>
    </li>

    {{--  pour les périodes --}}
    <li class="nav-item {{ request()->routeIs('periode.create') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('periode.create') }}">
            <i class="fas fa-fw fa-plus-circle"></i>
            <span>Ajouter une période</span></a>
    </li>

    <li class="nav-item {{ request()->routeIs('periode.index') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('periode.index') }}">
            <i class="fas fa-fw fa-calendar-alt"></i>
            <span>Voir les périodes</span></a>
    </li>

    <li class="nav-item {{ request()->routeIs('pharmacie.form') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('pharmacie.form') }}">
            <i class="fas fa-fw fa-plus"></i>
            <span>Ajouter les pharmacies de garde</span></a>
    </li>

    <li class="nav-item {{ request()->routeIs('pharmacie.index') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('pharmacie.index') }}">
            <i class="fas fa-fw fa-eye"></i>
            <span>Voir toutes pharmacies</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
