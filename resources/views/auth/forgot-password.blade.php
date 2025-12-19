@extends('layouts.app')

@section('title', 'Восстановление пароля')

@section('content')
    <div class="page-content">
        <header class="page-header">
            <h1 class="page-header__title">Забыли пароль?</h1>
            <p class="page-header__subtitle">Введите вашу эл. почту, на которую придёт ссылка для сброса пароля и установки нового.</p>
        </header>
        <x-section-wrapper class="auth-wrapper" title="Восстановление пароля">
            @if(session('status'))
                <div class="alert alert--success">
                    {{ session('status') }}
                </div>
            @endif

            <form method="post" action="{{ route('password.email') }}" class="form">
                @csrf
                <div class="form__item">
                    <label for="email" class="form__label">Эл. почта</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus class="form__input" />
                    @error('email')
                        <span class="alert alert--error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form__actions">
                    <div>
                        <button type="submit" class="btn btn--primary">Отправить ссылку</button>
                    </div>
                </div>
            </form>
        </x-section-wrapper>
    </div>
@endsection
