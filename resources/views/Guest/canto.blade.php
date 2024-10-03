<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $canto->titolo }} - Versi</title>
</head>
<body>
    <h1>{{ $canto->titolo }} </h1>

    <ul>
        @foreach($canto->versi as $verso)
            <li>{{ $verso->testo }}</li>
        @endforeach
    </ul>

    <a href="{{ route('guest.cantica', ['canticaId' => $canto->cantica->id]) }}">Torna alla lista dei canti</a>
</body>
</html>
