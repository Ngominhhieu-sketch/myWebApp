@extends('layouts.app')

@section('content')

<div class="wrapper create-order">
    <h1>Order your book here</h1>
    <form action="" method="POST">
        @csrf
        <div class="form-group">
            <label for="book-name">Book name</label>
            <select name="book-name" id="book-name">
                <option value="A heart That Works">A Heart That Works</option>
                <option value="All This Could Be Different">All This Could Be Different</option>
                <option value="An Immense World">An Immense World</option>
                <option value="Ancestor Trouble">Ancestor Trouble</option>
                <option value="Easy Beauty">Easy Beauty</option>
                <option value="Eating To Extinction">Eating to Extinction</option>
                <option value="Fellowship Point">Fellowship Point</option>
                <option value="The Employees">The Employees</option>
            </select>
        </div>
        <div class="form-group">
            <label for="copies-numbers">How many copies</label>
            <input type="number" id="copies-numbers" name="copies-numbers">
        </div>
        <div class="form-group">
            <label for="first-name">First name:</label>
            <input type="text" id="first-name" name="first-name">
        </div>
        <div class="form-group">
            <label for="last-name">Last name:</label>
            <input type="text" id="last-name" name="last-name">
        </div>
        <div class="form-group">
            <label for="email">Enter your email:</label>
            <input type="email" id="email" name="email">
        </div>
        <div class="form-group">
            <label for="payment-method">Payment Method</label>
            <select name="payment-method" id="payment-method">
                <option value="visa">Visa</option>
                <option value="master">MasterCard</option>
                <option value="paypal">Paypal</option>
            </select>
        </div>
        <div class="form-group">
            <label for="credit-card">Credit card number</label>
            <input type="text" id="credit-card" name="credit-card">
        </div>
        <div class="form-group">
            <input type="submit" value="Make an Order" class="submit-btn">
        </div>
    </form>
</div>

<a href="/" class="home-link">Home</a>

@endsection
