<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Értékelés</title>
</head>
<body class="bg-dark text-light p-4">
    <form method='POST' action="{{ route('homeworks.update', $homework->id) }}">
        @csrf
        @method('PUT')
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div>
            <h1>{{ $homework->student}}</h1>
            <h3><a href="{{ $homework->url}}" class="text-info">{{ $homework->url}}</a></h3>
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
            <input type="submit" value="Értékelés" class="btn btn-success">
        </div>
    </form>
</body>
</html>