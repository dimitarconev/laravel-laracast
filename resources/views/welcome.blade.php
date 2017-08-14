<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<h1> 
@foreach ($baba as $baba)
    <li>{{$baba->body}} </li>
 @endforeach
</h1>
</body>
</html>