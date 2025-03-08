<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning Laravel</title>
</head>

<body>
<h1>SDJ International College</h1>
<h2>Blog Management System</h2>

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
</body>

</html>
