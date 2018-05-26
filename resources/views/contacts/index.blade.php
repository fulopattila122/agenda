@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Contacts</h1>

        <div class="card">
            <div class="card-header"><a href="{{ route('contacts.create') }}" class="btn btn-sm btn-outline-success">Create Contact</a></div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th style="width: 10%">&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody id="list">
                        <tr><td><div class="text-center">Loading Contacts...</div></td></tr>
                    </tbody>
                </table>
            </div>
        </div>


    </div>
@endsection

@section('scripts')
<script defer>
    $(document).ready(function() {
        $.getJSON("{{ route('api.contacts.index') }}", function(data) {
            var items = [];

            $.each(data.data, function(key, val) {
                items.push(
                    '<tr><td><a href="/contacts/' + val.id + '/edit">'
                    + val.firstname + " " + val.lastname + "</a></td>"
                    + '<td><form action="/contacts/' + val.id + '" style="display:inline" data-confirm="1" method="POST">'
                    + '{{ csrf_field() }}'
                    + '<input type="hidden" name="_method" value="DELETE">'
                    + '<button class="btn btn-sm btn-outline-danger">Delete</button></form></td>'
                    +"</tr>"
                );
            });

            $("#list").replaceWith($(items.join("")));

            $('[data-confirm]').on('submit', function(e) {
                if (!confirm('Are you sure to delete contact?')) {
                    e.preventDefault();
                }
            });
        });
    });
</script>
@endsection
