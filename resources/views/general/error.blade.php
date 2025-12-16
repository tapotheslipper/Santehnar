@extends('layouts.app')

@section('title', 'Ошибка')

@section('content')
<div class="page-content error">
    <header class="page-header text-center">
        <h1 class="page-header__title">@yield('code', 'Ошибка')</h1>
    </header>
    <x-section-wrapper title="@yield('message', 'Произошла непредвиденная ошибка.')" class="error_details">
        <p>Возможно, страница, который вы ищете, была удалена или перемещена.</p>
        <a href="{{ route('home') }}" class="btn btn--primary">Вернуться на Главную</a>
    </x-section-wrapper>
</div>
@endsection
