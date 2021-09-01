<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Marcado;
use App\Horario;
use App\Trabajadore;

class MarcadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function fecha(){
        date_default_timezone_set('America/Lima');
            $ti=date('H:i:s',time());
            return $ti;
        }
        
        public function fecha2(){
            date_default_timezone_set('America/Lima');
                $ti2=date('Y-m-d',time());
                return $ti2;
            }
        public function extraer(){
            date_default_timezone_set('America/Lima');
            $ti2=date('Y-m-d',time());
            $fechaEntera = strtotime($ti2);
            $dia = date("d", $fechaEntera);
            return $dia;
        }

        function saber_dia() {
            date_default_timezone_set('America/Lima');
            $ti2=date('Y-m-d',time());
            $dias = array('Domingo','Lunes','Martes','Miercoles','Jueves','Viernes','Sabado');
            $fecha = $dias[date('N', strtotime($ti2))];
            return $fecha;
            }

    public function index(Request $request)
    {

        $traba=trim($request->get('searchText'));
        $dateinicio=trim($request->get('dateinicio'));
        $datefin=trim($request->get('datefin'));

        $datosTrab = Trabajadore::all()
        ->where("id","=",$traba);

        $marca = Marcado::all()
        ->where("horaentrada","!=","00:00:00")
        ->where("trabajador_id",$traba)
        ->whereBetween('fecha',[$dateinicio,$datefin]);

        $marca2 = Marcado::all()
        ->where("horasalida","!=","00:00:00")
        ->where("trabajador_id",$traba)
        ->whereBetween('fecha',[$dateinicio,$datefin]);
      
       return view('marcado.index')->with('marca',$marca)->with('marca2',$marca2)->with('datosTrab',$datosTrab);

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mihora=$this->fecha();
        $mifecha=$this->fecha2();
        $midia=$this->saber_dia();
        return view ('marcado.create',["mifecha"=>$mifecha],["mihora"=>$mihora]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    

    public function store(Request $request)
    {

       $traba=$request->trabajador_id;
       
       $i=0;
       $j=0;
      
                $hora = Horario::all();
                $mar = Marcado::all();
                
                foreach($hora as $t){
                    if($t->trabajador_id == $traba && $t->dia == $this->saber_dia() && $this->fecha() < $t->hinicio ){
                        $i=1;    
                    }
                }

                foreach($mar as $m){
                    if($m->trabajador_id ==$traba && $m->fecha == $this->fecha2()){
                        $i=0;
                    }
                }

                foreach($hora as $t){
                    if($t->trabajador_id == $traba && $t->dia == $this->saber_dia() && $this->fecha() > $t->hfin){
                        $j=1;    
                    }
                }

                foreach($mar as $m){
                    if($m->trabajador_id ==$traba && $m->fecha == $this->fecha2() && $m->horaentrada=="00:00:00"){
                        $j=0;
                    }
                }

                if($i==1){
                            $marcado=new Marcado;
                            $marcado->trabajador_id=$request->trabajador_id;
                            $marcado->horaentrada=$request->hora;
                            $marcado->horasalida="00:00:00";
                            $marcado->fecha=$request->fecha;
                            $marcado->save();
                            return redirect ('/marcado/create')->with('success', 'Marcado Exitoso!');
                    }

                if($j==1){

                    $marcado=new Marcado;
                    $marcado->trabajador_id=$request->trabajador_id;
                    $marcado->horaentrada="00:00:00";
                    $marcado->horasalida= $request->hora;
                    $marcado->fecha=$request->fecha;
                    $marcado->save();
                
                   
                    return redirect ('/marcado/create')->with('success', 'Marcado Exitoso!');
                   
            }else{
                return redirect ('/marcado/create')->with('nosuccess', 'NO VALIDO');
            }
                
                       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    { 
        $marca = Marcado::find($id);
        
        return view('marcado.show',["marca"=>$marca]);
       
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
        $trabajores=Marcado::find($id);
        $trabajores->horasalida=$request->hora;
              
        $trabajores->save();
        $trabajores->update();

        return redirect ('/marcado/create')->with('success', 'Marcado Exitoso!');
    }

    public function update2(Request $request, $id){
        $trabajores=Marcado::find($id);
        $trabajores->horasalida=$request->hora;
              
        $trabajores->save();
        $trabajores->update();

        return redirect ('/marcado/create')->with('success', 'Marcado Exitoso!');

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
