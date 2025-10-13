@extends('layouts.app')

@section('content')

<div class="wrapper">
    <div class="book-details">
    <img src="{{ asset(($book->img ?? 'default.jpg')) }}" alt="Book Image" class="book-image">
        <h1 class="title">{{ $book->title }}</h1>
        <p class="author">By {{ $book->author }}</p>
        <div class="description">
            {{ $book->body }}
        </div>
    </div>

    <div class="actions">
        <a href="/create-order" class="buy-now">Buy now</a>
        <a href="/" class="home-link">Home</a>
    </div>
</div>

@endsection
