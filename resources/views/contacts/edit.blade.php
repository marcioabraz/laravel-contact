<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contatos</title>
</head>
<body>
    <h1>Editar Contatos</h1>
    <a href="/contacts/delete/{{$contact->id}}">Deletar</a>
        <form action="/contacts/update/{{$contact->id}}" method="POST">
        @csrf
            <input type="text" name="name" contactholder="Nome" value="{{$contact->name}}"><br><br>
            <input type="text" name="email" contactholder="Email" value="{{$contact->email}}"><br><br>
            <input type="text" name="phone" contactholder="Telefone" value="{{$contact->phone}}"><br><br>
            <button type="submit">Enviar</button>
        </form>
    <hr>
</body>
</html>