<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Записи</title>
</head>
<body>
    <h2>Записи:</h2>
    <div>
        @foreach ($notes as $note)
        <h3>{{$note->text}}</h3>
        <p>{{$note->status}}</p>
        <p>{{$note->timestamps}}</p>

        <form action="{{route('notes.updateStatus', [$note->status, 'useful'])}}" method="POST">
            @csrf
            <button type="submit">Сделать полезной</button>
        </form>

        <form action="{{route('notes.updateStatus', [$note->status, 'complaint'])}}" method="POST">
            @csrf
            <button type="submit">Пожаловаться</button>
        </form>

        <form action="{{route('notes.updateStatus', [$note->status, 'offer'])}}" method="POST">
            @csrf
            <button type="submit">Сделать предложением</button>
        </form>
    @endforeach
    
    <form action="{{route('notes.store')}}" method="POST">
        @csrf
            <input type="text" name="text" placeholder="Текст" required>
            <button type="submit">Добавить</button>
        </form>

        <p><a href="{{route('notes.complaintsOffers')}}">Посмотреть жалобы и предложения</a></p>
    </div>
</body>
</html>