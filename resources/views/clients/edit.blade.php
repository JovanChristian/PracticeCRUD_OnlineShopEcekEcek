@extends('layouts.main')

@section('main')
<div class="row">
    <div class="col-12">
        <form action="{{ route('clients.update', $client->id) }}" method="post">
            @csrf
            @method('PUT')
            <label for="">Name</label>
            <input type="text" name="name" value="{{ $client->name }}" required>
            <label for="">email</label>
            <input type="email" name="email" value="{{ $client->email }}" required>
            <label for="">phone</label>
            <input type="text" name="phone" value="{{ $client->phone }}" required>
            <label for="">address</label>
            <input type="text" name="address" value="{{ $client->address }}" required>


            <label for="">Item</label>
            <select name="item_id" id="">
                {{-- tampil semua item --}}
                @foreach ($items as $i)
                    <option value="{{ $i->id }}" {{ $client->item_id == $i->id ? 'selected':'' }}>{{ $i->item_name }}</option>

                @endforeach

            </select>
            <button type="submit" class="btn btn-primary">Update</button>

        </form>
    </div>
</div>
@endsection
