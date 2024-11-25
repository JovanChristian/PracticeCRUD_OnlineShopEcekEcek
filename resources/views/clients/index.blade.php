@extends('layouts.main')

@section('main')
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">All Client in Ecek Ecek Online Shop</h1>

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <a href="{{ route('clients.create') }}" class="btn btn-outline-primary btn-ligth fw-semibold">Add New Clients</a>
            <table class="table">
                <tr class="text-center">
                    <th>ID</th>
                    <th>Item</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>

                @foreach ($clients as $c)
                    <tr class="text-center">
                        <td> {{ $c->id }}</td>
                        <td> {{ $c->item_id }}</td>
                        <td> {{ $c->name }}</td>
                        <td> {{ $c->email }}</td>
                        <td> {{ $c->phone }}</td>
                        <td> {{ $c->address }}</td>
                        <td>
                            <a href="{{ route('clients.edit', $c->id) }}" class="btn btn-success">Edit</a>
                            <form action="{{ route('clients.destroy', $c->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-dark w-30">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </table>
        </div>
    </div>
@endsection
