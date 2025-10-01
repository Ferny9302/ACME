<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blueprint;


class BlueprintController extends Controller
{
    public function getBlueprint(){
        /*Selec * from Blueprint*/
        $data = Blueprint::all();
        //dd($data);
        return view("admin.blueprint")
            ->with('blueprint',$data);

    }
    public function createBlueprint(Request $request){
        //dd($request->email);
        //reglas de validacion
        $request->validate([
            "nombre"=>'required|min:3',
            "documento"=>'required|min:2',
            "version"=>'required|min:1',
            "hoja"=>'required|min:1',
        ]);

        $blueprint = new Blueprint();

        $blueprint->nombre_plano = $request->input('nombre');
        $blueprint->documento = $request->input('documento');
        $blueprint->version = $request->input('version');
        $blueprint->hoja = $request->input('hoja');
        
        $blueprint->projects_id = '1';
        $blueprint->save();
        
        return redirect("/dashboard/blueprint")
            ->with('success','Usuario creado correctamente');
    }
}
