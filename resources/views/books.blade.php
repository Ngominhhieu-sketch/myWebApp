@extends('layouts.app')

@section('content')

<div class="wrapper">
    <header>
        <h1 class="title">Welcome to Our Online Bookstore</h1>
        <p class="orders"><a href="/orders">Orders List</a></p>
        
    </header>

    <section id="top-book">
        <div class="container">
            <div class="top-book-content">
                <img src="img/book_image.jpg" alt="Book Image" class="banner-image">
                <p class="quote">"The more that you read, the more things you will know. The more that you learn, the more places you'll go." - Dr. Seuss</p>
            </div>
        </div>
        <div class="order-message">
            <h1><strong>{{ session('message')}}</strong></h1>
        </div>
    </section>

    <section id="book-list">
        <div class="container">
            <div class="row">
                @foreach ($books as $book)
                <div class="col-md-3">
                    <div class="book-item">
                    <img src="{{ asset(($book->img ?? 'default.jpg')) }}" alt="Book Image">

                        <h2><a href="/books/{{ $book->id }}">{{ $book->title }}</a></h2>
                        <p class="author">By {{ $book->author }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    
</div>

@endsection



