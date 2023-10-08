@extends('layouts.app')

<h4 class="d-flex justify-content-center mt-3">Add Customer Data</h4>
@section('content')
    <div class="create w-50">
        <div class="d-flex justify-content-end mb-3">
            <a href="{{ route('customer.index') }}" class="btn btn-primary">Back</a>
        </div>
        <div class="card p-5">
            <form action="{{ route('customer.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="name">
                    @if ($errors->has('name'))
                        <div class="form-text" id="validasi">{{ $errors->first('name') }}</div>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="email">
                    @if ($errors->has('email'))
                        <div class="form-text" id="validasi">{{ $errors->first('email') }}</div>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="phone_number" class="form-label">Phone Number</label>
                    <input type="number" name="phone_number" class="form-control" id="phone_number">
                    @if ($errors->has('phone_number'))
                        <div class="form-text" id="validasi">{{ $errors->first('phone_number') }}</div>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" name="address" class="form-control" id="address">
                    @if ($errors->has('address'))
                        <div class="form-text" id="validasi">{{ $errors->first('address') }}</div>
                    @endif
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
