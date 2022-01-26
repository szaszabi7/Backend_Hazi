<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Házi feladatok</title>
</head>
<body class="bg-dark">
    <table class="table table-striped table-dark mt-3">
        <tr>
            <th>Diák</th>
            <th>Url</th>
            <th>Szöveges értékelés</th>
            <th>Osztályzat</th>
            <th></th>
            <th></th>
        </tr>
        @foreach($homeworks as $homework)
            <tr>
                <td>{{ $homework->student }}</td>
                <td><a href=" {{ $homework->url }}" class="text-info">Link</a></td>
                <td>{{ $homework->review }}</td>
                <td>
                    @if($homework->grade != 0)
                        {{ $homework->grade }}
                    @endif
                </td>
                <td><a href="{{ route('homeworks.edit', $homework->id) }}"><button class="btn btn-primary">Értékelés</button></td>
                <td>
                    <form action="{{ route('homeworks.destroy', $homework->id) }}" method="POST">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>    
            </tr>
        @endforeach
    </table>
    <form action="{{ route('homeworks.create') }}">
        <input type="submit" value="Új feladat beadása" class="btn btn-success m-2" />
    </form>
</body>
</html>