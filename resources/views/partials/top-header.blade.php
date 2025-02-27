<div class="top-header section">
    <div class="container h-full">
        <div class="top-header__cells">
            <div class="top-header__cell"></div>
            <div class="top-header__cell">
                <nav class="top-header__nav">
                    <ul>
                        <li>
                            <a href="/">Home</a>
                        </li>
                        @auth
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">{{ __('Log Out') }}</a>
                                </form>
                            </li>

                            <li>
                                <a href="/profile">Profile</a>
                            </li>
                        @else
                            <li>
                                <a href="/register">Registration</a>
                            </li>
                            <li>
                                <a href="/login">Login with email</a>
                            </li>
                            <li>
                                <x-google-button />
                            </li>
                        @endauth
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
