<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista delle Cantiche</title>
</head>
<body>
    <h1>Lista delle Cantiche</h1>

    <ul>
        @foreach($cantiche as $cantica)
            <li>
                <a href="{{ route('guest.cantica', ['canticaId' => $cantica->id]) }}">
                    {{ $cantica->nome }}
                </a>
            </li>
        @endforeach
    </ul>

    <a href="{{ url('/') }}">Torna alla home</a>
</body>
</html>
