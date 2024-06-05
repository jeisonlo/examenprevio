<form action="{{route('accidente.store')}}" method="POST" enctype="multipart/form-data">

    @csrf
   
<style>

h1{

color: aqua;

}

</style>

    <h1>Accidente</h1>
    <label>
        Codigo:
        <br>
        <input type="text" name="codigo">
    </label>
    <br>
    <label>
        hora:
        <br>
        <input type="text" name="hora">
    </label>
   
    <br>
    <label>
        Fecha:
        <br>
        <input type="text" name="fecha">
    </label>
    <br>
    <label>
        Lugar:
        <br>
        <input type="text" name="lugar">
    </label>
   
    <br>
   
    <br><br>
    <button type="submit">Enviar Formulario:</button>
    </form>