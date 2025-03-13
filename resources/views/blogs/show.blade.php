<x-app-layout>
<div class="container">
    <h1>{{ $blog->title }}</h1>
    <p>{{ $blog->content }}</p>
    <a href="{{ route('blogs.index') }}" class="btn btn-primary">Back to Blogs</a>
</div>

<x-app-layout>