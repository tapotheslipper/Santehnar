@extends('layouts.app')

@section('title', 'Регистрация')

@section('content')
    <div class="page-content">
        <header class="page-header">
            <h1 class="page-header__title">Зарегестрироваться</h1>
        </header>
        <x-section-wrapper class="auth-wrapper" title="Регистрация" subTitle="Уже зарегестрированы?" subLink="login">
            <form method="post" action="{{ route('register') }}" class="form">
                @csrf
                <div class="form__item">
                    <label for="username" class="form__label">Имя пользователя</label>
                    <input id="username" type="text" name="username" value="{{ old('name') }}" required autofocus class="form__input"/>
                    @error('username')
                        <span class="alert alert--error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form__item">
                    <label for="email" class="form__label">Эл. почта</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required class="form__input" />
                    @error('email')
                        <span class="alert alert--error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form__item">
                    <label for="password" class="form__label">Пароль</label>
                    <input id="password" type="password" name="password" required autocomplete="new-password" class="form__input" />
                    @error('password')
                        <span class="alert alert--error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form__item">
                    <label for="password_confirmation" class="form__label">Подтверждение пароля</label>
                    <input id="password_confirmation" type="password" name="password_confirmation" required class="form__input" />
                </div>
                <div class="form__actions">
                    <div>
                        <button type="submit" class="btn btn--primary">Зарегестрироваться</button>
                    </div>
                </div>
            </form>
        </x-section-wrapper>
    </div>
@endsection
