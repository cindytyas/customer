@extends('layouts.app')

<h4 class="d-flex justify-content-center mt-3">Customer Data</h4>
@section('content')
    <div class="card p-3 w-100">
        <div class="d-flex justify-content-end">
            <a href="{{ route('customer.create') }}" class="btn btn-primary">Add Customer</a>
        </div>
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($Customer as $key => $customer)
                    <tr>
                        <th>{{ ++$key }}</th>
                        <td>{{ $customer->name }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>{{ $customer->phone_number }}</td>
                        <td>{{ $customer->address }}</td>
                        <td class="d-flex gap-2">
                            <form action="">
                                <a href="{{ route('customer.edit', $customer->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            </form>
                            <form action="{{ route('customer.destroy', $customer->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
