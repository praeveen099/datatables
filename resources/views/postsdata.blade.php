@extends('app')

@section('content')
    <table class="table table-bordered" id="posts-data-table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Author</th>
                <th>Title</th>
                <th>Excerpt</th>
                <th>Created At</th>
            </tr>
        </thead>
    </table>
@stop

@push('scripts')
<script>
$(function() {
    $('#posts-data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('get.posts') !!}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'author', name: 'author' },
            { data: 'title', name: 'title' },
            { data: 'excerpt', name: 'excerpt'},
            { data: 'created_at', name: 'created_at'}

        ]
    });
});
</script>
@endpush

