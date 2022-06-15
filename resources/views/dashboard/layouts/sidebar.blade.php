<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/posts') ? 'active' :'' }}" href="/dashboard/posts">
                    <span data-feather="book"></span>
                    Hasil Tes
                </a>
                <a class="nav-link {{ Request::is('dashboard/') ? 'active' :'' }}" href="/home">
                    <span data-feather="book"></span>
                    Home
                </a>
            </li>
        </ul>

        <div>
            <a class="customButton buttonRounded custom-bg-blue h6 w-100" href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </div>
</nav>