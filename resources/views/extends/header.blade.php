<main>
    <header>
        <h1>AtisAttire</h1>
    </header>
    <nav>
        <ul>
            <li><a href="{{ route('products') }}">products</a></li>
            <li><a href="{{ route('designers') }}">designers</a></li>
            @auth
            <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
                    {{ __('Log Out') }}
                </a></li>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>


            <li><x-dropdown-link href="{{ route('profile.show') }}">
                    {{ __('Profile') }}
                </x-dropdown-link></li>
            @endauth
            @guest
                @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">

                    <li><a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a></li>

                    @if (Route::has('register'))
                    <li><a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a></li>
                    @endif

                </div>
                @endif
            @endguest
        </ul>
    </nav>
