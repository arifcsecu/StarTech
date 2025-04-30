@extends('components.layouts.app')

@section('title', 'Star-Tech - Leading Computer, Laptop & Gaming PC Retail & Online Shop in Bangladesh')

@section('content')


    @livewire('hero-banner')

    @include('home-special.carousel-slide')

    @include('home-special.service-features')

    @include('home-special.featured-category')

    @include('home-special.drop-in-banner')

    @livewire('featured-products')

    @include('home-special.article')


@endsection
