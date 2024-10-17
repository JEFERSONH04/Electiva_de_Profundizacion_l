<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tutores;

class TutoresController extends Controller
{
    public function index(){
        $tutores = Tutores::all();
        return view('Tutores.tutores', compact('tutores'));
    }

    public function nuevo(){
        return view('tutores.nuevo');
    }

    public function guardar_nuevo(Request $request){

        $data = $request->all();
        Tutores::create($data);

        return redirect('tutores')->with('success', 'Tutor Creado');
    }

    public function actualizar($id){
        $tutor = Tutores::findOrFail($id);
        return view('Tutores.actualizar', compact('tutores'));
    }

    public function guardar_actualizar(Request $request, $id){
        $empresa = Tutores::findOrFail($id);
        $empresa-> update($request->all());

        return redirect('tutores')->with('succes','Tutor actualizado');

    }

    public function borrar($id){
        $empresa = Tutores::findOrFail($id);
        $empresa-> delete();
        return redirect('tutores')-> with('succes','Tutor borrado');
    }
}
