<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        h1 {
            color: red;
        }
    </style>
</head>
<body>

    <h1>Lista de Accidentes</h1>

    @foreach ($acciden as $accidente)
    <tr>
        <br>
        <td>{{$accidente->codigo}}</td>
        <td>{{$accidente->hora}}</td>
        <td>{{$accidente->fecha}}</td>
        <td>{{$accidente->lugar}}</td>
        
    
        <td><a href="{{route('accidente.edit',$accidente->id)}}">Editar</a></td>
        <form action="{{route('accidente.destroy',$accidente->id)}}" method="POST">
            @csrf
            @method('delete')
            <button type="submit">Eliminar</button>
            </form>
        <br>
       
       
    </tr>
@endforeach
   
</body>
</html>