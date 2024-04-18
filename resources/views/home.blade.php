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
<div>
    @foreach($posts as $post)
    <div style="background-color: silver;margin-bottom: 10px">
        <h3>{{$post->title}}</h3>
        <p>{{$post->body}}</p>
        <span>{{$post->category_id}}</span>
    </div>
    @endforeach
</div>
</body>
</html>
