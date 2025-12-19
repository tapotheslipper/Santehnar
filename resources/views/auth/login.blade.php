@extends('layouts.app')

@section('title', 'Вход')

@section('content')
    <div class="page-content">
        <header class="page-header">
            <h1 class="page-header__title">Войти в аккаунт</h1>
        </header>
        <x-section-wrapper class="auth-wrapper" title="Вход" subTitle="Ещё не зарегестрированы?" subLink="register">
            <form method="post" action="{{ route('login') }}" class="form">
                @csrf
                <div class="form__item">
                    <label for="email" class="form__label">Эл. почта</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus class="form__input" />
                    @error('email')
                        <span class="alert alert--error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form__item">
                    <label for="password" class="form__label">Пароль</label>
                    <input id="password" type="password" name="password" required autocomplete="current-password" class="form__input" />
                    @error('password')
                        <span class="alert alert--error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form__actions">
                    <div class="remember-check">
                        <input type="checkbox" name="remember" id="remember" class="remember-check__checkbox" />
                        <label for="remember" class="form__label label--inline">Запомнить меня</label>
                    </div>
                    <div>
                        <button type="submit" class="btn btn--primary">Войти</button>
                    </div>
                    <div>
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}">
                                Забыли пароль?
                            </a>
                        @endif
                    </div>
                </div>
            </form>
        </x-section-wrapper>
    </div>
@endsection
