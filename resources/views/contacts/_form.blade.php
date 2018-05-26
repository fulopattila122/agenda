<div class="form-group">
    <label>First Name</label>
    {!! Form::text('firstname', null, ["class" => "form-control" . ($errors->has('firstname') ? ' is-invalid' : '')]) !!}
    @if ($errors->has('firstname'))
        <div class="invalid-feedback">{{ $errors->first('firstname') }}</div>
    @endif
</div>

<div class="form-group">
    <label>Last Name</label>
    {!! Form::text('lastname', null, ["class" => "form-control" . ($errors->has('lastname') ? ' is-invalid' : '')]) !!}
    @if ($errors->has('lastname'))
        <div class="invalid-feedback">{{ $errors->first('lastname') }}</div>
    @endif
</div>
