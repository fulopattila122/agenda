@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editing {{$contact->firstname}} {{$contact->lastname}}</h1>
        <div class="card">
            <div class="card-header">Contact Data</div>
            <div class="card-body">
                {!! Form::model($contact, ['route' => ['contacts.update', $contact], 'method' => 'PUT']) !!}
                    @include('contacts._form')
                    <hr>
                    <button type="submit" class="btn btn-primary">Save Contact</button>
                {!! Form::close() !!}

                <hr>
                <h5>Phone Numbers</h5>
                @forelse($contact->numbers as $number)
                    @include('contacts._number')
                @empty
                    <div>No phone numbers</div>
                @endforelse
                <a href="{{ route('numbers.create') }}?forContact={{$contact->id}}" class="btn btn-sm btn-outline-success">Create Phone Number</a>

            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script defer>
        $(document).ready(function() {
            $('[data-delete]').on('click', function(e) {
                if (!confirm('Delete phone number?')) {
                    e.preventDefault();
                    return false;
                }
            });
        });
    </script>
@endsection
