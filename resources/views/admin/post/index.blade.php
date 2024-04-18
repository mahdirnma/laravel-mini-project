<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="/admin/post/add">add post</a>
<table border="1">
    <caption>posts</caption>
    <thead>
    <tr>
        <th>id</th>
        <th>title</th>
        <th>body</th>
        <th>category_id</th>
        <th>update</th>
        <th>delete</th>
    </tr>
    </thead>
    <tbody>
    @foreach($posts as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->body}}</td>
            <td>{{$post->category_id}}</td>
            <td> <form action="/admin/post/{{$post->id}}/update" method="post">
                    @csrf
                    @method("post")
                    <button>edit</button>
                </form>
            </td>
            <td>
                <form action="/admin/post/{{$post->id}}/delete" method="post">
                    @csrf
                    @method("delete")
                    <button>delete</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
