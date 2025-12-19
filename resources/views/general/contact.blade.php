@extends('layouts.app')

@section('title', 'Обратная связь')

@section('content')
    <div class="page-content contact">
        <header class="page-header">
            <h1 class="page-header__title">Свяжитесь с нами</h1>
            <p class="page-header__subtitle">Наша команда поддержки доступна с 15:00 до 16:00 по национальным праздникам.</p>
        </header>
        <x-section-wrapper title="Наши реквизиты" class="contact__details">
            <div class="contact-credits">
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
        <x-section-wrapper title="Задайте нам вопрос" class="contact__wrapper">
            @if(session('success'))
                <div class="alert alert--success">
                    {{ session('success') }}
                </div>
            @endif
        
            <form method="post" action="{{ route('contact.submit') }}" class="form">
                @csrf
                <div class="form__item">
                    <label for="title" class="form__label">Тема обращения</label>
                    <input type="text" id="title" name="title" value="{{ old('title') }}" required class="form__input" />
                    @error('title')
                        <span class="alert alert--error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form__item">
                    <label for="text" class="form__label">Опишите свой вопрос подробно</label>
                    <textarea id="text" name="text" rows="5" required class="form__textarea">{{ old('text') }}</textarea>
                    @error('text')
                        <span class="alert alert--error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form__item">
                    <label for="email" class="form__label">Ваша эл. почта для обратной связи</label>
                    <input type="email" id="email" name="email" valie="{{ old('email') }}" required class="form__input" />
                    @error('email')
                        <span class="alert alert--error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form__actions">
                    <div>
                        <button type="submit" class="btn btn--primary">Отправить</button>
                    </div>
                </div>
            </form>
        </x-section-wrapper>
    </div>
@endsection
