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
    <a href="/contacts/edit/{{$contact->id}}">Editar</a>
    <a href="/contacts/delete/{{$contact->id}}">Deletar</a>
    <h2>Nome do contato {{$contact->name}}/</h2>
    <h4>E-mail do contato {{$contact->email}}</h4>
    <p>Telefone do contato {{$contact->phone}}</p>
</body>
</html>