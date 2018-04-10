<header id="eh-header">
    <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>

        <div class="uk-navbar-left padding-left">

            <a id="logo" href=" {{ url('/') }} " title="Home | {{ config('app.name', 'Laravel') }}">
                <img src="{{ asset('images/LogoIcon.png') }}" alt="Engineering House Logo">
            </a>

        </div>

        <div class="uk-navbar-right">

            <ul class="uk-navbar-nav">

                <!-- Authentication Links -->
                @guest
                    <li><a class="nav-link white-text" href="{{ route('login') }}">Login</a></li>
                @else
                    <li>
                        <a class="nav-link white-text" href="#">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="uk-navbar-dropdown">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                </li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </ul>
                        </div>
                    </li>
                @endguest

            </ul>

        </div>

    </nav>
</header>
