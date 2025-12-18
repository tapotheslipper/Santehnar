@extends('layouts.app')

@section('title', 'Регистрация')

@section('content')
<div class="page-content">
    <header class="page-header">
        <h1 class="page-header__title">Зарегестрироваться</h1>
    </header>
    <x-section-wrapper class="auth-wrapper">
        <form method="post" action="{{ route('register') }}" class="auth-form">
            @csrf
            <div class="auth-form__item">
                <label for="username" class="auth-form__label">Имя пользователя</label>
                <input id="username" type="text" name="username" value="{{ old('name') }}" required autofocus class="auth-form__input"/>
                @error('username')
                <span class="auth-form__error">{{ $message }}</span>
                @enderror
            </div>
            <div class="auth-form__item">
                <label for="email" class="auth-form__label">Эл. почта</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required class="auth-form__input" />
                @error('email')
                <span class="auth-form__error">{{ $message }}</span>
                @enderror
            </div>
            <div class="auth-form__item">
                <label for="password" class="auth-form__label">Пароль</label>
                <input id="password" type="password" name="password" required autocomplete="new-password" class="auth-form__input" />
                @error('password')
                <span class="auth-form__error">{{ $message }}</span>
                @enderror
            </div>
            <div class="auth-form__item">
                <label for="password_confirmation" class="auth-form__label">Подтверждение пароля</label>
                <input id="password_confirmation" type="password" name="password_confirmation" required class="auth-form__input" />
            </div>
            <div class="auth-form__actions">
                <div>
                    <button type="submit" class="btn btn-primary">Зарегестрироваться</button>
                </div>
                <div>
                    <a href="{{ route('login') }}" class="auth-form__link">Уже зарегестрированы?</a>
                </div>
            </div>
        </form>
    </x-section-wrapper>
</div>
@endsection
