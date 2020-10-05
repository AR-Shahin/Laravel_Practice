<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="{{route('str')}}" method="post">
       @csrf
       @method('PATCH')
        <input type="text"> <br><br>
        <input type="submit">
    </form>
</body>
</html>