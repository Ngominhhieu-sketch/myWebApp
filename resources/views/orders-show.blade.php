@extends('layouts.app')

@section('content')

<div class="wrapper">
    <div class="order-details">
        <h2>Order for {{ $order->first_name }} {{ $order->last_name }}</h2>
        <p class="book-name">Book Name: {{ $order->book_name }}</p>
        <p class="copies-number">Number of Copies: {{ $order->copies_number }}</p>
        <p class="email">Email: {{ $order->email }}</p>
        <p class="payment-method">Payment Method: {{ $order->payment_method }}</p>

        <form action="/orders/{{ $order->id }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="complete-order-btn">Complete Order</button>
        </form>
    </div>

    <div class="links-wrapper">
        <a href="/orders" class="back-link">Back to All Orders</a>
        <a href="/" class="home-link">Home</a>
    </div>
</div>

@endsection

