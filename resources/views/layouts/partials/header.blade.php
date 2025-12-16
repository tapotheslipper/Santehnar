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
        <a href="{{ url('/account') }}" class="acc__link">Аккаунт</a>
        <a href="{{ url('/cart') }}" class="acc__link acc__cart">
            Корзина (0)
        </a>
    </div>
</div>
