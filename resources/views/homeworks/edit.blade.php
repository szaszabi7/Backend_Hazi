<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method='POST' action="{{ route('homeworks.update', $homework->id) }}">
        @csrf
        @method('PUT')
        <div>
            <h1>{{ $homework->students->name}}</h1>
        </div>
        <div>
            Szöveges értékelés:<br>
            <input type="text" name="review" value="{{ $homework->review }}">
        </div>
        <div>
            Jegy:<br>
            <input type="number" name="grade" value="{{ $homework->grade }}">
        </div>
        <div>
            <br>
            <input type="submit" value="Értékelés">
        </div>
    </form>
</body>
</html>