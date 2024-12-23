@extends('layouts.layout')

@section('title')
@parent Оптовые поставки электронных компонентов | из Китая день в день
@endsection

@section('content')
    <main class="main">
        @include('main.breadcrumbs')
        @include('main.promo')
        @include('main.achievements')
        @include('main.quiz')
        @include('main.video')
    </main>
@endsection
