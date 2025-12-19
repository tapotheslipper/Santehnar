@extends('layouts.app')

@section('title', 'Профиль')

@section('content')
    <div class="page-content">
        <header class="page-header">
            <h1 class="page-header__title">Личный кабинет</h1>
        </header>
        <x-section-wrapper title="Профиль пользователя: {{ Auth::user()->username }}" class="auth-wrapper profile">
            <div class="profile__info">
                <div class="profile__row">
                    <span class="profile__label">Имя пользователя:</span>
                    <span class="profile__value">{{ Auth::user()->username }}</span>
                </div>
                <div class="profile__row">
                    <span class="profile__label">Эл. почта:</span>
                    <span class="profile__value">{{ Auth::user()->email }}</span>
                </div>
                <div class="profile__row">
                    <span class="profile__label">На сайте с:</span>
                    <span class="profile__value">{{ Auth::user()->created_at->format('Y.m.d') }}</span>
                </div>
            </div>
            <div class="profile__actions">
                <form method="post" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn--secondary">Выйти из аккаунта</button>
                </form>
            </div>
        </x-section-wrapper>
    </div>
@endsection
