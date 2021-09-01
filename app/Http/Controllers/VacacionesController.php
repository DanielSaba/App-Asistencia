<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Trabajadore;
use App\Vacacione;

class VacacionesController extends Controller
{

    public function __construct(){
        $this->middleware("auth");
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vac=DB::table('vacaciones as v')
        ->join('trabajadores as t','v.trabajador_id','=','t.id')
        ->select('t.nombres','t.apellidos','v.finicio','v.ffin')
        ->paginate(7);
        return view('vacaciones.index',["vac"=>$vac]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $trab=Trabajadore::all();
        return view('vacaciones.create',["trab"=>$trab]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'finicio' => 'required',
            'ffin' => 'required',
            
        ]);

        $vac=new Vacacione;
        $vac->trabajador_id=$request->codigo;
        $vac->finicio=$request->finicio;
        $vac->ffin=$request->ffin;

        $vac->save();
        return redirect ('/vacaciones');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
