@extends('app')

@section('content')
    <table class="table table-bordered" id="users-data-table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Intro</th>
                <th>Email</th>
            </tr>
        </thead>
    </table>
@stop

@push('scripts')
<script>
$(function() {
    $('#users-data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('get.users') !!}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'intro', name: 'intro' },
            { data: 'email', name: 'email' }
        ]
    });
});
</script>
@endpush

