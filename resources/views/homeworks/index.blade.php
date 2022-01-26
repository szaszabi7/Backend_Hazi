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
                <td>{{ $homework->student }}</td>
                <td><a href=" {{ $homework->url }}">Link</a></td>
                <td>{{ $homework->review }}</td>
                <td>
                    @if($homework->grade != 0)
                        {{ $homework->grade }}
                    @endif
                </td>
                <td><a href="{{ route('homeworks.edit', $homework->id) }}"><button>Értékelés</button></td>
                <td>
                    <form action="{{ route('homeworks.destroy', $homework->id) }}" method="POST">
                        @csrf @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>    
            </tr>
        @endforeach
    </table>
    <form action="{{ route('homeworks.create') }}">
        <input type="submit" value="Új feladat beadása" />
    </form>
</body>
</html>