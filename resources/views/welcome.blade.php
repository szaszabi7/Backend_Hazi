<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
        <tr>
            <th>Diák</th>
            <th>Url</th>
            <th>Szöveges értékelés</th>
            <th>Osztályzat</th>
        </tr>
        @foreach($homeworks as $homework)
            <tr>
                <td>{{ $homework->students->name }}</td>
                <td><a href=" {{ $homework->url }}">Link</a></td>
                <td>{{ $homework->review }}</td>
                <td>{{ $homework->grade }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>