@extends('layouts.layout')

@section('title')
@parent Оптовые поставки электронных компонентов | из Китая день в день
@endsection

@section('content')
    <main class="main">
        @include('main.breadcrumbs')
        @include('main.promo')
        @include('main.how')
        @include('main.scheme')
    </main>
@endsection
