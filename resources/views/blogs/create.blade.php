@extends('layouts.app')

@section('content')
    <h1>Create new blog</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif


    <form action="{{ route('blogs.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Blog Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Blog Title">
            @if ($errors->has('title'))
                <div class="alert alert-danger">
                    {{ $errors->first('title') }}
                </div>
            @endif
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Blog Content</label>
            <textarea class="form-control" name="content" id="content" rows="3" placeholder="Enter your blog content here"></textarea>
            @if ($errors->has('content'))
                <div class="alert alert-danger">
                    {{ $errors->first('content') }}
                </div>
            @endif
        </div>

        <button type="submit" class="btn btn-success">Create Blog</button>

        <a class="btn btn-secondary" href="{{ route('blogs.index') }}">Back to Blogs</a>
    </form>
@endsection