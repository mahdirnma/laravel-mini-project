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
<h1>Update</h1>
<form action="/admin/post/{{$post->id}}/edit" method="post">
    @csrf
    @method("put")
    title:<input type="text" name="title" id="title" value="{{$post->title}}"><br>
    body:<textarea name="body" id="body" cols="10" rows="5">{{$post->body}}</textarea><br>
        <select name="category_id" id="category">
            @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->title}}</option>
            @endforeach
        </select>
    <br>
    <button>add post</button>
</form>
@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</body>
</html>
