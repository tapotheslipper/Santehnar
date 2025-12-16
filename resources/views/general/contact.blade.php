@extends('layouts.app')

@section('title', 'Обратная связь')

@section('content')
<div class="page-content contact">
    <header class="page-header">
        <h1 class="page-header__title">Свяжитесь с нами</h1>
        <p class="page-header__subtitle">Наша команда поддержки доступна с 15:00 до 16:00 по национальным праздникам.</p>
    </header>
    <x-section-wrapper title="Наши реквизиты" class="contact__details">
        <div class="contact-grid">
            <div class="contact-item">
                <h3>Телефон</h3>
                <p>
                    <a href="tel:+40000000002" class="contact-link">+42 (000) 000-00-02</a>
                </p>
            </div>
            <div class="contact-item">
                <h3>Эл. почта</h3>
                <p>
                    <a href="mailto:santehnar@bk.ru" class="contact-link">santehnar@bk.ru</a>
                </p>
            </div>
        </div>
    </x-section-wrapper>
    <x-section-wrapper title="Задайте нам вопрос" class="contact__form">
        <form method="post" class="contact-form">
            @csrf
            <p>Здесь будет форма обратной связи.</p>
        </form>
    </x-section-wrapper>
</div>
@endsection
