<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="" class="brand-link">
        <img src="{{ asset('img/solicode-logo-1.png') }}"
             alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-light">Inscription</span>
    </a>
    <div class="sidebar">
        <!-- Menu latéral --> 
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Accueil
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('inscription') }}" class="nav-link ">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Inscription
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
</aside>
