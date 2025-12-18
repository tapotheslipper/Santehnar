@extends('layouts.app')

@section('title', 'Вход')

@section('content')
<div class="page-content">
    <header class="page-header">
        <h1 class="page-header__title">Войти</h1>
    </header>
    <x-section-wrapper class="auth-wrapper">
        <form method="post" action="{{ route('login') }}" class="auth-form">
            @csrf
            <div class="auth-form__item">
                <label for="email" class="auth-form__label">Эл. почта</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus class="auth-form__input" />
                @error('email')
                <span class="auth-form__error">{{ $message }}</span>
                @enderror
            </div>
            <div class="auth-form__item">
                <label for="password" class="auth-form__label">Пароль</label>
                <input id="password" type="password" name="password" required autocomplete="current-password" class="auth-form__input" />
                @error('password')
                <span class="auth-form__error">{{ $message }}</span>
                @enderror
            </div>
            <div class="auth-form__actions">
                <div>
                    <input type="checkbox" name="remember" id="remember" class="auth-form__checkbox" />
                    <label for="remember" class="auth-form__label label--inline">Запомнить меня</label>
                </div>
                <div>
                    <button type="submit" class="btn btn--primary">Войти</button>
                </div>
                <div>
                    @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="auth-form__link">
                        Забыли пароль?
                    </a>
                    @endif
                </div>
            </div>
        </form>
    </x-section-wrapper>
</div>
@endsection
