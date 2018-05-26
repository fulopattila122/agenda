<div class="p-2 mb-2">
    <a href="{{ route('numbers.edit', $number) }}">{{ $number->number }}</a> ({{ $number->type }})
    {{ Form::model($number, ['route' => ['numbers.destroy', $number], 'method' => 'DELETE', 'style'=> 'display: inline;', 'data-delete' => '1']) }}
        <button type="submit" class="btn btn-sm btn-link text-danger" title="Delete number">&times;</button>
    {{ Form::close() }}
</div>
