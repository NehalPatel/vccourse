<x-app-layout>
    <div class="max-w-4xl mx-auto p-6">
        <h1 class="text-3xl font-bold text-center">SDJ International College</h1>
        <h2 class="text-xl text-center text-gray-600 mt-2">Blog Management System</h2>

        <h1 class="text-2xl font-semibold mt-6">List all blogs</h1>

        <a class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 inline-block mt-4"
           href="{{ route('blogs.create') }}">Create new blog</a>

        <div class="overflow-x-auto mt-4">
            <table class="w-full border-collapse border border-gray-300 shadow-md rounded-md">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="border border-gray-300 px-4 py-2">ID</th>
                        <th class="border border-gray-300 px-4 py-2">Title</th>
                        <th class="border border-gray-300 px-4 py-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($blogs as $blog)
                    <tr class="border border-gray-300 hover:bg-gray-100">
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ $blog->id }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $blog->title }}</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <a class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600"
                               href="{{ route('blogs.show', [$blog->id]) }}">Show</a>
                            <a class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600 ml-2"
                               href="{{ route('blogs.edit', [$blog->id]) }}">Edit</a>

                            <!-- Delete Form -->
                            <form action="{{ route('blogs.destroy', [$blog->id]) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                        class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 ml-2"
                                        onclick="return confirm('Are you sure you want to delete this blog?');">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
