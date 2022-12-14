<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="{{ url('/') }}">
        <i class="fas fa-store mr-2"></i>
        Laravel Online Store
    </a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <ul class="navbar-nav px-3 py-1 py-md-0">
        <li class="nav-item text-nowrap">
            <a class="nav-link text-light" href="#">
                <span data-feather="user"></span>&nbsp;
                {{ strtoupper(Auth::user()->name) }}
            </a>
        </li>
    </ul>
</nav>