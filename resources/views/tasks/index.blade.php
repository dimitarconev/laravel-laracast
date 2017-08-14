<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
@foreach ($tasks as $task)
   <a href="{{$task->id}}">{{$task->body}} </a>
 @endforeach
</body>
</html>