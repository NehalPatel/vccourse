<x-app-layout>
    <div class="max-w-2xl mx-auto p-6">
        <h1 class="text-3xl font-bold text-center">Create New Blog</h1>

        @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mt-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('blogs.store') }}" method="POST" class="mt-6">
            @csrf

            <div class="mb-4">
                <label for="title" class="block text-gray-700 font-semibold">Blog Title</label>
                <input type="text" id="title" name="title" placeholder="Blog Title"
                       class="w-full px-4 py-2 border rounded focus:ring-2 focus:ring-blue-500">
                @if ($errors->has('title'))
                    <div class="text-red-600 text-sm mt-1">
                        {{ $errors->first('title') }}
                    </div>
                @endif
            </div>

            <div class="mb-4">
                <label for="content" class="block text-gray-700 font-semibold">Blog Content</label>
                <textarea id="content" name="content" rows="3" placeholder="Enter your blog content here"
                          class="w-full px-4 py-2 border rounded focus:ring-2 focus:ring-blue-500"></textarea>
                @if ($errors->has('content'))
                    <div class="text-red-600 text-sm mt-1">
                        {{ $errors->first('content') }}
                    </div>
                @endif
            </div>

            <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Create Blog</button>
            <a href="{{ route('blogs.index') }}" class="ml-4 bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Back to Blogs</a>
        </form>
    </div>
</x-app-layout>