<nav class="navbar navbar-expand-lg navbar-custom fixed-top">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>
                    @if (Route::has('login'))
                        <li class="nav-item">
                            @auth
                                <a class="nav-link" href="{{ url('/home') }}">Dashboard</a>
                            @else
                                <a class="nav-link" href="{{ route('login') }}">Login</a>
                            @endauth
                        </li>
                    @endif
                </ul>
            </div>
        </nav>