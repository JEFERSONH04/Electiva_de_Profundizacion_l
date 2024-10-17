<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiantes;

class EstudiantesController extends Controller
{
    public function index(){
        $estudiantes = Estudiantes::all();
        return view('Estudiantes.estudiantes', compact('estudiantes'));
    }

    public function nuevo(){
        return view('Estudiantes.nuevo');
    }

    public function guardar_nuevo(Request $request){

        $data = $request->all();
        Estudiantes::create($data);

        return redirect('estudiantes')->with('success', 'Estudiante Creada Satisfactoriamente');
    }

    public function actualizar($id){
        $empresa = Estudiantes::findOrFail($id);
        return view('Estudiante.actualizar', compact('estudiantes'));
    }

    public function guardar_actualizar(Request $request, $id){
        $empresa = Estudiantes::findOrFail($id);
        $empresa-> update($request->all());

        return redirect('estudiantes')->with('succes','Estudiante actualizado');

    }

    public function borrar($id){
        $empresa = Estudiantes::findOrFail($id);
        $empresa-> delete();
        return redirect('estudiantes')-> with('succes','Estudiante borrado');
    }
}
