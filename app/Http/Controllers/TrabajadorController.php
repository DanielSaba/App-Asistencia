<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Trabajadore;

class TrabajadorController extends Controller
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
        

        $trabajador=DB::table('trabajadores')->paginate(7);


        return view ('trabajador.index',["tra"=> $trabajador ],["lista"=> $trabajador]);


    }

  

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        $data = Trabajadore::latest('id')->first();

        return view ('trabajador.create',["t"=>$data ]);
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
            'nombres' => 'required',
            'apellidos' => 'required',
            'direccion' => 'required',
            'dni' => 'required|max:8|min:8',
            'telefono' => 'required|max:11',
            'fnacimiento' => 'required',
            'area' => 'required',
            'cargo' => 'required',
            
        ]);

        $name="ninguno";

        if($request->hasFile('image')){
            $file=$request->file('image');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/',$name);
        }

        $trabajores=new Trabajadore;
        $trabajores->nombres=$request->nombres;
        $trabajores->apellidos=$request->apellidos;
        $trabajores->direccion=$request->direccion;
        $trabajores->dni=$request->dni;
        $trabajores->telefono=$request->telefono;
        $trabajores->fnacimiento=$request->fnacimiento;
        $trabajores->area=$request->area;
        $trabajores->cargo=$request->cargo;
        $trabajores->image=$name;
        $trabajores->user_id=Auth::user()->id;
        
        $trabajores->save();
      

        //return redirect ('/horario/create');

        return redirect ('/detalletrabajador/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
 
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
        $trabajores=Trabajadore::find($id);
       
        $trabajores->nombres=$request->nombres;
        $trabajores->apellidos=$request->apellidos;
        $trabajores->direccion=$request->direccion;
        $trabajores->dni=$request->dni;
        $trabajores->telefono=$request->telefono;
        $trabajores->fnacimiento=$request->fnacimiento;
        $trabajores->area=$request->area;
        $trabajores->cargo=$request->cargo;
        
        $trabajores->save();
        $trabajores->update();

        return redirect('/trabajador');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $trabajador=Trabajadore::findOrFail($id);
        $trabajador->delete();
        $trabajador->update();
        return redirect('/trabajador');
    }
}
