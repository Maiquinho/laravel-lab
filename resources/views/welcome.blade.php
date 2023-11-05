<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bem vindo</title>
</head>
<body>
    <h1>Bem vindo {{ $name }}!</h1>


    {{-- if statement --}}

    @if ($name == 'Michael')
        <p>Olá admin, bem vindo de volta!</p>
    @else
        <p>Olá guest, bem vindo de volta!</p>
    @endif

    {{-- loops --}}

    <ul>
    @foreach ($listForLooping as $item)
        <li>{{ $item }}</li>
    @endforeach
    </ul>


</body>
</html>