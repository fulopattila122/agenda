@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Number</h1>
        <div class="card">
            <div class="card-header">For {{ $number->contact->firstname }} {{ $number->contact->lastname }}</div>
            <div class="card-body">
                {!! Form::model($number, ['route' => ['numbers.update', $number], 'method' => 'PUT']) !!}
                    @include('numbers._form')
                    <hr>
                    <button type="submit" class="btn btn-primary">Update Number</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
