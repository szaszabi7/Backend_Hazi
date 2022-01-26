<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method='POST' action="{{ route('homeworks.store') }}">
        @csrf
        <div>
            Név:<br>
            <input type="text" name="student">
        </div>
        <div>
            Link:<br>
            <input type="text" name="url">
        </div>
        <div>
            <br>
            <input type="submit" value="Beadás">
        </div>
    </form>
</body>
</html>