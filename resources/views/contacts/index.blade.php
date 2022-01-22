<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contatos</title>
</head>
<body>
    <form action="contacts/create" method ='GET'>
    <p><a href="contacts/create">Criar</a></p>
    <hr>
    <h1>Meus Contatos</h1>
    @csrf
    @foreach ($contacts as $cont)
        <a href="contacts/edit/{{$cont->id}}"> 
        {{$cont->name}}</a>
    @endforeach
    </form>
</body>
</html>