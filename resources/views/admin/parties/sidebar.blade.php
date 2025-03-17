
    <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background: linear-gradient(135deg, #78BA25 0%, #0056b3 100%);">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon ">
                    {{-- rotate-n-15 --}}
                    <img src="{{asset('images/logo-blanc.png')}}" alt="Koulmed Logo" class="logo" height="40px">
                </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Tableau de bord</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Fonctionnalités
            </div>


            <li class="nav-item ">
                <a class="nav-link" href="{{route('blog.form')}}">
                    <i class="fas fa-fw fa-plus"></i>
                    <span>Ajouter un blog</span></a>
            </li>

            <li class="nav-item ">
                <a class="nav-link" href="{{route('blog.all')}}">
                    <i class="fas fa-fw fa-eye"></i>
                    <span>Voir tous les blog</span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{route('blog.historique')}}">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Historique des blog</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>



        </ul>
