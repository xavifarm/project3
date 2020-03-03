<?php

namespace App\Http\Controllers;
use App\Pastel;
use Illuminate\Http\Request;

class PastelController extends Controller
{
    public function index(){
        $pasteles = ['pasteles' => \App\Pastel::all()];
        return view('pasteles.index', $pasteles);
    }

   public function show($id){
       return view('pasteles.show', ['id' => $id]);
   }

   public function new(){
       return view('pasteles.new');

   }

   public function store(Request $request){
        //*******validación de los campos********/
        $validateData = $request->validate([
            'titulo' => 'required|max:25',
            'ingredientes' => 'required|max:100',
            'preparacion' => 'required|max:250'
        ], [
            'titulo.required' => "Introduce el nombre de tu pastel",
            'titulo.max:25' => "Máximo de 25 carácteres",
            'ingredientes.required' => "Debes introducir los ingredientes para crear el pastel",
            'ingredientes.max:100' => "Máximo de 100 carácteres",
            'preparacion.required' => "Es obligatorio indicar los datos de preparación",
            'preparacion.max:250' => "Máximo de 250 carácteres"
        ]);
            
    //recogida de campos
    $pastel = new Pastel;
    $pastel->titulo = $request->titulo;
    $pastel->ingredientes = $request->ingredientes;
    $pastel->preparacion = $request->preparacion;
    $pastel->save();
    return redirect()->route('todos_pasteles');
}







}