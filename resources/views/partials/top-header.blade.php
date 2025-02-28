<div class="top-header section">
    <div class="container h-full">
        <div class="top-header__cells">
            <div class="top-header__cell">
                <p class="top-header__description">
                    Підставки для телефонів та інше для власної продуктивності
                </p>
            </div>
            <div class="top-header__cell">
                <nav class="top-header__nav">
                    <ul>
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
