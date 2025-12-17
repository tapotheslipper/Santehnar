@extends('layouts.app')

@section('title', 'О нас')

@section('content')
<div class="page-content about">
    <header class="page-header">
        <h1 class="page-header__title">О компании "Сантехнарь"</h1>
        <p class="page-header__subtitle">Ваш надёжный партнёр-трубочист с 2025-го года.</p>
    </header>
    <x-section-wrapper title="Фотоотчёт">
        <div>
            <img src="" alt="Фотоотчёт 1" />
            <img src="" alt="Фотоотчёт 2" />
            <img src="" alt="Фотоотчёт 3" />
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
                <p>Мы работаем только с проверменными поставщиками и гос. корпорациями.</p>
            </li>
            <li>
                <h3>Наши эксперты</h3>
                <p>Наша команда состоит из набранных с улицы людей.</p>
            </li>
            <li>
                <h3>Наши спонсоры</h3>
                <p>Нас спонсируют букмейкерские компании.</p>
            </li>      
        </ul>
    </x-section-wrapper>
</div>
@endsection
