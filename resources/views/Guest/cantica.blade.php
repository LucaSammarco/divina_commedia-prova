<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $cantica->nome }} - Canti</title>
</head>
<body>
    <h1>{{ $cantica->nome }} - Lista dei Canti</h1>

    <ul>
        @foreach($cantica->canti as $canto)
            <li>
                <a href="{{ route('guest.canto', ['canticaId' => $cantica->id, 'cantoId' => $canto->id]) }}">
                    {{ $canto->titolo }}
                </a>
            </li>
        @endforeach
    </ul>

    <a href="{{ url('/') }}">Torna alla home</a>
</body>
</html>
