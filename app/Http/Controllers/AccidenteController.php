<?php

namespace App\Http\Controllers;
use App\Models\Accidente;
use Illuminate\Http\Request;

class AccidenteController extends Controller
{

    //
//primero creo la funcion de create para que retorne a la vista 
public function create(){
    return view('create');
}
//segundo creo la funcion de store que me almacena los datos "crear los campos que tenga la migracion"
public function store(Request $request){
   
    $acciden= new accidente();
    $acciden->codigo=$request->codigo;
    $acciden->hora=$request->hora;
    $acciden->fecha=$request->fecha;
    $acciden->lugar=$request->lugar;
     $acciden->save();

   return($request);

     return redirect()->route('accidente.show', $acciden->id);
    }
    
    //tercero creo la funcion de listar->index que me retorna a la vista listar 
    public function index(){
    
        $acciden = accidente::orderBy('id', 'desc')->get();
        return view('listar', compact('acciden'));
                            
    }
    //cuarto se crea la funcion de destroy 
    public function destroy (accidente $accidente){
               
        $accidente->delete();
        return redirect()->route('accidente.index');
    }   
    
    //cinto se crea la ruta de editar que retorna a la vista edit 
    public function edit(accidente $accidente){//Encuentro el Curso
           
        return view('edit',compact('accidente'));
    
      }
    
    //sexto se crea la funcion update que guarda los datos actualizados
      public function update(Request $request, accidente $accidente){
               
        $accidente->codigo = $request->codigo;
        $accidente->hora = $request->hora;
        $accidente->fecha = $request->fecha;
        $accidente->lugar = $request->lugar;
        $accidente->save();
     
        return redirect()->route('accidente.index');
     
      }
      //septimo se crea el show para mostar los datos 
    
      public function show ($id){
    
        $acciden = accidente::findOrFail($id);
    
        
        return view('show', compact('acciden'));
      
    
    
      }
    
    
    }
    