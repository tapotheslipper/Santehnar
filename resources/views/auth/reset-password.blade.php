@extends('layouts.app')

@section('title', 'Новый пароль')

@section('content')
    <div class="page-content">
        <header class="page-header">
            <h1 class="page-header__title">Установить новый пароль</h1>
        </header>
        <x-section-wrapper class="auth-wrapper">
            <form method="post" action="{{ route('password.update') }}" class="form">
                @csrf
                <input type="hidden" name="token" value="{{ $request->route('token') }}" />

                <div class="form__item">
                    <label for="email" class="form__label">Эл. почта</label>
                    <input id="email" type="email" name="email" value="{{ old('email', $request->email) }}" required readonly class="form__input" />
                    @error('email')
                        <span class="alert alert--error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form__item">
                    <label for="password" class="form__label">Новый пароль</label>
                    <input id="password" type="password" name="password" required autocomplete="new-password" class="form__input" />
                    @error('password')
                        <span class="alert alert--error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form__item">
                    <label for="password_confirmation" class="form__label">Подтвердите новый пароль</label>
                    <input id="password_confirmation" type="password" name="password_confirmation" required class="form__input" />
                    @error('password')
                        <span class="alert alert--error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form__actions">
                    <div>
                        <button type="submit" class="btn btn--primary">Сбросить пароль</button>
                    </div>
                </div>
            </form>
        </x-section-wrapper>
    </div>
@endsection
