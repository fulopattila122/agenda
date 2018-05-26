@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>New Number</h1>
        <div class="card">
            <div class="card-header">For {{ $number->contact->firstname }} {{ $number->contact->lastname }}</div>
            <div class="card-body">
                {!! Form::model($number, ['route' => 'numbers.store']) !!}
                    @include('numbers._form')
                    <hr>
                    <button type="submit" class="btn btn-primary">Create Number</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
