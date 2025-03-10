@extends('layouts.app')

@section('content')
<h1>SDJ International College</h1>
<h2>Blog Management System</h2>

<h1>List all blogs</h1>

<a class="btn btn-success" href="{{ route('blogs.create') }}">Create new blog</a>

<table class="table">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Actions</th>
    </tr>

    @foreach($blogs as $blog)
    <tr>
        <td>{{ $blog->id }}</td>
        <td>{{ $blog->title }}</td>
        <td>
            <a class="btn btn-small btn-primary" href="{{ route('blogs.show', [$blog->id]) }}">Show</a>
            <a class="btn btn-small btn-warning" href="{{ route('blogs.edit', [$blog->id]) }}">EDIT</a>
            <a class="btn btn-small btn-danger" href="#">DELETE</a>

        </td>
    </tr>
    @endforeach


</table>
@endsection