<div class="site-header--inner">
    <div class="site-header__logo">
        <a href="{{ url('/') }}" class="logo">
            <div class="logo__wrapper">
                <picture class="logo__image">
                    <source srcset="{{ asset('images/logo/favicon.svg') }}" type="image/svg+xml" />
                    <img src="{{ asset('images/logo/favicon.png') }}" alt="Логотип" />
                </picture>
                <span class="logo__text">Сантехнарь</span>
            </div>
        </a>
    </div>
    <nav class="site-header__nav">
        <ul>
            <li>
                <a href="{{ url('/about') }}">О нас</a>
            </li>
            <li>
                <a href="{{ url('/catalog') }}">Каталог</a>
            </li>
            <li>
                <a href="{{ url('/contact') }}">Обратная связь</a>
            </li>
        </ul>
    </nav>
    <div class="site-header__actions acc">
        @guest
        <a href="{{ route('login') }}" class="acc__link">Войти</a>
        @endguest
        @auth
        <a href="{{ route('profile') }}" class="acc__link" title="{{ Auth::user()->name }}">
            <picture>
                <source srcset="{{ asset('images/logo/user-icon.svg') }}" type="image/svg+xml" />
                <img src="{{ asset('images/logo/user-icon.png') }}" alt="Аккаунт" type="image/png" />
            </picture>
        </a>
        @endauth
        <a href="{{ url('/basket') }}" class="acc__link acc__basket">
            <picture>
                <source srcset="{{ asset('images/logo/basket.svg') }}" type="image/svg+xml" />
                <img src="{{ asset('images/logo/basket.png') }}" alt="Корзина" type="image/png" />
            </picture>
            <span>(0)</span>
        </a>
    </div>
</div>
