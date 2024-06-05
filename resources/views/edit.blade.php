<form action="{{route('accidente.update', $accidente)}}"  method="POST">

    @csrf
    @method('put')
    <label>
    Codigo:
    <br>
    <input name="codigo" type="text" value="{{old('codigo',$accidente->codigo) }}">
    <br>
    </label>
    <br>
    <label>
    hora:
    <br>
    <input name="hora" type="text" value="{{old('hora',$accidente->hora)}}">
    <br>
    </label>
    <br>
    <label>
    fecha:
    <br>
    <input name="fecha" type="text" value="{{old('fecha',$accidente->fecha)}}">
    <br>
    </label>
    <br>
    <label>
    lugar:
    <br>
    <input name="lugar" type="text" value="{{old('lugar',$accidente->lugar)}}">
    <br>
    </label>
    <br>
   
    <button  type="submit">Actualizar</button>
   
</form>