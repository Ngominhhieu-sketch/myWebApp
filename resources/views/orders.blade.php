@extends('layouts.app')

@section('content')

<div class="wrapper">
    <h1 class="page-title">Orders Waiting for Confirmation</h1>

    @foreach ($orders as $order)
    <div class="order-details">
        <h2>Order for {{ $order->first_name }} {{ $order->last_name }}</h2>
        <p class="book-name">Book Name: {{ $order->book_name }}</p>
        <p class="copies-number">Number of Copies: {{ $order->copies_number }}</p>
        <p class="email">Email: {{ $order->email }}</p>
        <p class="payment-method">Payment Method: {{ $order->payment_method }}</p>

        <form action="/orders/{{ $order->id }}" method="GET">
            <button class="confirm-order-btn">Confirm Order</button>
        </form>
    </div>
    @endforeach

    <a href="/" class="home-link">Home</a>
</div>

@endsection
