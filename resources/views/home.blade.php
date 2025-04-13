@extends('components.layouts.app')

@section('title', 'Star-Tech')

@section('home')
    <h1>Star-Tech</h1>
    <h2>Welcome to Star-Tech</h2>
    <p>We are glad to have you here.</p>
    @livewire('counter')
@endsection