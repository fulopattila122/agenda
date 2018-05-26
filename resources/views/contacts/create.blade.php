@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Contact</h1>
        <div class="card">
            <div class="card-header">New Contact</div>
            <div class="card-body">
                {!! Form::model($contact, ['route' => 'contacts.store']) !!}
                    @include('contacts._form')
                    <hr>
                    <button type="submit" class="btn btn-primary">Create Contact</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
