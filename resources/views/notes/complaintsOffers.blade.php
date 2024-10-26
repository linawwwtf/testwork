<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Жалобы и предложения</title>
</head>
<body>
    <h2>Жалобы и предложения:</h2>
    @foreach ($notes as $note)
        <h3>{{$note->text}}</h3>
        <p>{{$note->status}}</p>
        <p>{{$note->timestamps}}</p>
    @endforeach
</body>
</html>