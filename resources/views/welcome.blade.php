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
<h1>Todo App</h1>
<form action="/tasks" method="post">
    @csrf
    <input type="text" name="name" placeholder="name"><br>
    <input type="text" name="description" placeholder="description">
    <input type="submit" value="Add">
</form>

@foreach($tasks as $task)
    <h2>name: {{$task->name}}</h2>
    <h2>description: {{$task->description}}</h2>
@endforeach
</body>
</html>
