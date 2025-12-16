@extends('layouts.app')

@section('title', 'Главная')

@section('content')
<div class="page-content home">
    <header class="page-header banner">
        <picture class="banner__bg">
            <source srcset="{{ asset('images/general/banner/banner.avif') }}" type="image/avif" />
            <source srcset="{{ asset('images/general/banner/banner.webp') }}" type="image/webp" />
            <img src="{{ asset('images/general/banner/banner.png') }}" alt="Баннер" class="page-header__img-fallback" />
        </picture>
        <div class="banner__content">
            <h1 class="page-header__title">Сантехнарь: пробка в каждом отверствии</h1>
            <p class="page-header__subtitle">Надёжные решения для вашего дома и всей дачи. Более 5555 товаров в наличии.</p>
            <a href="{{ url('/catalog') }}" class="btn btn--primary">Выбрать трубу сейчас!</a>
        </div>
    </header>
    <x-section-wrapper title="Популярные категории" class="home__categories">
        <p>Здесь будет контент.</p>
    </x-section-wrapper>
    <x-section-wrapper title="Лучшие предложения" class="home__featured">
        <p>Здесь будет контент.</p>
    </x-section-wrapper>
</div>
@endsection
