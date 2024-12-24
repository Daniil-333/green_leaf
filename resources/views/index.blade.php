@extends('layouts.layout')

@section('title')
@parent Единая Россия |
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
