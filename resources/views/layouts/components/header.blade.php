<header class="p-3 bg-dark text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="#" class="nav-link px-2 text-white">Home</a></li>
            </ul>
            <div class="text-end">
                @guest
                <a href="{{ route('login') }}" class="btn btn-outline-light me-2">Login</a>
                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="btn btn-warning">Sign-up</a>
                @endif
                @else
                <a href="{{ route('logout') }}" class="btn btn-outline-light me-2" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">{{ Auth::user()->name }}</a>
                <form action="{{ route('logout') }}" id="logout-form" method="POST">
                    @csrf
                </form>
                @endguest
            </div>
        </div>
    </div>
</header>