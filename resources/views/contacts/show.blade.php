<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contatos</title>
</head>
<body>@csrf
    <h1>Detalhes do Contato</h1>
    <a href="/contact/edit/{{$contact->id}}">Editar</a>
    <h2>{{$contact->name}}/</h2>
    <h4>{{$contact->email}}</h4>
    <p>{{$contact->phone}}</p>
</body>
</html>