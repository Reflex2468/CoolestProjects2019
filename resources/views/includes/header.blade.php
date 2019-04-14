<nav class="uk-padding-large uk-padding-remove-vertical uk-navbar-container" uk-navbar>
    <div class="uk-navbar-left">

        <ul class="uk-navbar-nav">
            <li class="uk-active">
                <a href="./">
                    <img class="coderdojo-logo small" src="{{ asset('images/coderdojo_logo.png') }}"
                         alt="Logo CoderDojo">
                </a>
            </li>
            <li>
        </ul>

    </div>

    <div class="uk-navbar-right">
        <ul class="uk-navbar-nav" >
            <li><a href="./">Projecten</a></li>
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown uk-inline">
                    <a href="#">{{ Auth::user()->name }} <span class="caret"></span></a>
                    <div class="uk-navbar-dropdown">
                        <ul class="uk-nav uk-navbar-dropdown-nav">
                            <li class="uk-nav-header">Profiel</li>
                            <li><a href="#">Donker thema</a></li>
                            <li><a href="{{ route('add-project') }}">Project plaatsen</a></li>
                            <li><a href="{{ route('my-projects') }}">Mijn projecten</a></li>
                            <li><a href="{{ route('liked-projects') }}">Gelikete projecten</a></li>
                            <li class="uk-nav-divider"></li>
                            <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                                    Uitloggen
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @endguest
        </ul>

    </div>
</nav>