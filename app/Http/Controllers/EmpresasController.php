<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresas;


class EmpresasController extends Controller
{
    public function index(){
        $empresas = Empresas::all();
        return view('Empresas.tabla', compact('empresas'));
    }

    public function nuevo(){
        return view('Empresas.nuevo');
    }

    public function guardar_nuevo(Request $request){

        $data = $request->all();
        Empresas::create($data);

        return redirect('empresas')->with('success', 'Empresa Creada Satisfactoriamente');
    }

    public function actualizar($id){
        $empresa = Empresas::findOrFail($id);
        return view('Empresas.actualizar', compact('empresa'));
    }

    public function guardar_actualizar(Request $request, $id){
        $empresa = Empresas::findOrFail($id);
        $empresa-> update($request->all());

        return redirect('empresas')->with('succes','Empresa actualizada');

    }

    public function borrar($id){
        $empresa = Empresas::findOrFail($id);
        $empresa-> delete();
        return redirect('empresas')-> with('succes','Empresa borrada');
    }
}
