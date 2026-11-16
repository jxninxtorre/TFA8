@extends('layouts.cafe')

@section('title', 'Customer Details')

@section('content')
    <h1>Customer Details</h1>

    <p><strong>ID:</strong> {{ $customer->id }}</p>
    <p><strong>Full Name:</strong> {{ $customer->full_name }}</p>
    <p><strong>Email:</strong> {{ $customer->email }}</p>
    <p><strong>Phone:</strong> {{ $customer->phone }}</p>

    <div class="actions">
        <a href="{{ route('customers.edit', $customer) }}" class="btn">Edit</a>
        <a href="{{ route('customers.index') }}" class="btn btn-gray">Back</a>
    </div>
@endsection