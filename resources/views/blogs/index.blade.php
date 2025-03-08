<h1>List all blogs</h1>

<a href="#">Create new blog</a>

<table>
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
            <a href="#">Show</a>
            <a href="#">EDIT</a>
            <a href="#">DELETE</a>

        </td>
    </tr>
    @endforeach


</table>