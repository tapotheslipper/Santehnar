@extends('layouts.app')

@section('title', 'О нас')

@section('content')
    <div class="page-content about">
        <header class="page-header">
            <h1 class="page-header__title">О компании "Сантехнарь"</h1>
            <p class="page-header__subtitle">Ваш надёжный партнёр-трубочист с 2025-го года.</p>
        </header>
        <x-section-wrapper title="Фотоотчёт">
            <div class="about__gallery">
                @foreach(range(1, 3) as $id)
                    <picture>
                        <source srcset="{{ asset("images/general/about/about-{$id}.webp") }}" type="image/webp" />
                        <img src="{{ asset("images/general/about/about-{$id}.jpg") }}" alt="Фото магазина приколов" loading="lazy" />
                    </picture>
                @endforeach
            </div>
        </x-section-wrapper>
        <x-section-wrapper title="Наши ценности" class="about__list">
            <ul>
                <li>
                    <h3>Наша миссия</h3>
                    <p>Саботаж на премиях.</p>
                </li>
                <li>
                    <h3>Наше качество</h3>
                    <p>Мы работаем только с проверенными поставщиками и гос. корпорациями.</p>
                </li>
                <li>
                    <h3>Наши эксперты</h3>
                    <p>Наша команда состоит из набранных с улицы людей.</p>
                </li>
                <li>
                    <h3>Наши спонсоры</h3>
                    <p>Нас спонсируют букмекерские компании.</p>
                </li>      
            </ul>
        </x-section-wrapper>
    </div>
@endsection
