<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PagesController extends Controller
{
    //
    public function inicio(){
        $tipos = App\Cat_type::all();
        return view('index', compact('tipos'));
    }

    // public function perfil(){
    //     return view('perfil');
    // }
    
    // public function mianuncio(){
    //     return view('mianuncio');
    // }

    // public function nosotros(){
    //     return view('nosotros');
    // } 

    // // Seccion Busco
    // public function buscoempleo(){
    //     $b_empleos = App\Anuncio::all();
    //     return view('busco.buscoempleo', compact('b_empleos'));
    // } 
    
    // public function b_empleodetalle($id){
    //     $b_empleodetalle = App\Anuncio::findOrFail($id);
    //     return view('busco.b_empleodetalle', compact('b_empleodetalle'));
    // } 

// Seccion Ofrezco
    public function ofrezcoempleo(){
        $listado_tipos = App\Cat_type::all();
        $listado_categorias = App\Cat_category::all();
        $listado_subcategorias = App\Cat_subcategory::all();
        $o_empleos = App\Advert::paginate(2);
        return view('ofrezco.ofrezcoempleo', compact('o_empleos','listado_tipos','listado_categorias','listado_subcategorias'));
    } 

    public function o_crearempleo(Request $request){ 

        // Validaciones de los campos
        $request->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'tipo' => 'required',
            'categoria' => 'required',
            'sub_categoria' => 'required',
            'estado' => 'required',
            'municipio' => 'required',
            'localidad' => 'required',
        ]);

        // return  $request->all();

        $o_nuevoempleo = new App\Advert;
        $o_nuevoempleo -> titulo = $request->titulo;
        $o_nuevoempleo -> descripcion = $request->descripcion;
        $o_nuevoempleo -> tipo = $request->tipo;
        $o_nuevoempleo -> categoria = $request->categoria;
        $o_nuevoempleo -> sub_categoria = $request->sub_categoria;
        $o_nuevoempleo -> estado = $request->estado;
        $o_nuevoempleo -> municipio = $request->municipio;
        $o_nuevoempleo -> localidad = $request->localidad;

        $o_nuevoempleo->save();
        return back()->with('empleo_agregado','Se agrego el empleo correctamente');
    }

    // public function o_empleodetalle($id){
    //     $o_empleodetalle = App\Anuncio::findOrFail($id);
    //     return view('ofrezco.o_empleodetalle', compact('o_empleodetalle'));
    // } 

    // public function o_empleoeditar($id){
    //     $o_empleoeditar = App\Anuncio::findOrFail($id);
    //     return view('ofrezco.o_empleoeditar', compact('o_empleoeditar'));
    // } 

    // public function o_empleoeditar_update(Request $request, $id){

    //     // Validaciones de los campos
    //     $request->validate([
    //         'titulo' => 'required',
    //         'descripcion' => 'required',
    //         'tipo' => 'required',
    //         'categoria' => 'required',
    //         'sub_categoria' => 'required',
    //         'estado' => 'required',
    //         'municipio' => 'required',
    //         'localidad' => 'required',
    //     ]);

    //     $o_empleoactualizar  = App\Anuncio::findOrFail($id); 
    //     $o_empleoactualizar -> titulo = $request->titulo;
    //     $o_empleoactualizar -> descripcion = $request->descripcion;
    //     $o_empleoactualizar -> tipo = $request->tipo;
    //     $o_empleoactualizar -> categoria = $request->categoria;
    //     $o_empleoactualizar -> sub_categoria = $request->sub_categoria;
    //     $o_empleoactualizar -> estado = $request->estado;
    //     $o_empleoactualizar -> municipio = $request->municipio;
    //     $o_empleoactualizar -> localidad = $request->localidad;

    //     $o_empleoactualizar->save();

    //     return back();
    // }

    // public function o_empleoeliminar($id){
    //     $o_empleoeliminar = App\Anuncio::findOrFail($id);
    //     $o_empleoeliminar->delete();

    //     return back()->with('empleo_eliminado','Se elimino el empleo correctamente');
    // }  
}

