    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar" style="height: 36px;">
        <div class="container"><a class="navbar-brand logo" href="#">Blog Forteroche</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link active" href="{{ url('/') }}">Home</a></li>



                    @if (Route::has('login'))

                    @auth
                    <li class="nav-item"><a class="nav-link" href="{{ route('articles/index') }}">Articles</a></li>

                    <li class="nav-item"><a class="nav-link" href="{{ route('comments/index') }}">commentaires</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/user/profile') }}">{{ Auth::user()->name }}</a></li>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <li class="nav-item"><a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                {{ __('Logout') }}
                            </a></li>
                    </form>

                    @else
                    <li class="nav-item"><a class="nav-link" href="/articles/index_light">Articles</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>

                    @if (Route::has('register'))

                    <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                    @endif
                    @endif

                    @endif
                </ul>
            </div>
        </div>
    </nav>