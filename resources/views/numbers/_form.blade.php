<div class="form-group">
    <label>Number</label>
    {!! Form::text('number', null, ["class" => "form-control" . ($errors->has('number') ? ' is-invalid' : '')]) !!}
    @if ($errors->has('number'))
        <div class="invalid-feedback">{{ $errors->first('number') }}</div>
    @endif
</div>

<div class="form-group">
    <label>Type</label>

    <div class="form-check form-check-inline @if($errors->has('type')) is-invalid @endif">
        <input class="form-check-input" type="radio" name="type" id="typeWork" value="work" @if('work' == $number->type) checked @endif>
        <label class="form-check-label" for="typeWork">Work</label>
    </div>

    <div class="form-check form-check-inline @if($errors->has('type')) is-invalid @endif">
        <input class="form-check-input" type="radio" name="type" id="typeHome" value="home" @if('home' == $number->type) checked @endif>
        <label class="form-check-label" for="typeHome">Home</label>
    </div>

    @if ($errors->has('type'))
        <div class="invalid-feedback" style="display: block">{{ $errors->first('type') }}</div>
    @endif


</div>

<input type="hidden" name="contact_id" value="{{ $number->contact_id }}">
