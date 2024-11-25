@extends('layouts.main')

@section('main')
    <div class="row">
        <div class="col-12">
            <form action="{{ route('clients.store') }}" method="post">
                @csrf

                <label for="">Name</label>
                <input type="text" name="name" required>
                <label for="">email</label>
                <input type="email" name="email" required>
                <label for="">phone</label>
                <input type="text" name="phone" required>
                <label for="">address</label>
                <input type="text" name="address" required>


                <label for="">Item</label>
                <select name="item_id" id="">
                    {{-- tampil semua item --}}
                    @foreach ($items as $i)
                        <option value="{{ $i->id }}">{{ $i->item_name }}</option>

                    @endforeach

                </select>
                <button type="submit" class="btn btn-primary">Submit</button>

            </form>
        </div>
    </div>
@endsection
