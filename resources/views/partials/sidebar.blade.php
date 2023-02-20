<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
    <div class="position-sticky pt-0">
        <ul class="nav  flex-column mb-auto mt-3">
            @if (auth()->user()->isAdmin() or auth()->user()->isOperator())
            <li class="nav-item ">
                <a class="nav-link text-white {{ request()->routeIs('dashboard.*') ? 'active' : '' }}" aria-current="page" href="{{ route('dashboard.index') }}">
                    <span data-feather="home" class="align-text-bottom"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ request()->routeIs('positions.*') ? 'active' : '' }}" href="{{ route('positions.index') }}">
                    <span data-feather="tag" class="align-text-bottom"></span>
                    Jabatan / Posisi
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ request()->routeIs('employees.*') ? 'active' : '' }}" href="{{ route('employees.index') }}">
                    <span data-feather="users" class="align-text-bottom"></span>
                    Karyawaan
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ request()->routeIs('holidays.*') ? 'active' : '' }}" href="{{ route('holidays.index') }}">
                    <span data-feather="calendar" class="align-text-bottom"></span>
                    Hari Libur
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ request()->routeIs('attendances.*') ? 'active' : '' }}" href="{{ route('attendances.index') }}">
                    <span data-feather="clipboard" class="align-text-bottom"></span>
                    Absensi
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ request()->routeIs('presences.*') ? 'active' : '' }}" href="{{ route('presences.index') }}">
                    <span data-feather="list" class="align-text-bottom"></span>
                    Data Kehadiran
                </a>
            </li>
            @endif
            <li class="naw-item border-top ms-3">
                <form action="{{ route('auth.logout') }}" method="post" onsubmit="return confirm('Apakah anda yakin ingin keluar?')">
                    @method('DELETE')
                    @csrf
                    <button class="w-full ms-2 py-3 px-3 d-block bg-transparent border-0 fw-bold text-danger text-center">Keluar</button>
                </form>
            </li>
        </ul>
    </div>
</nav>