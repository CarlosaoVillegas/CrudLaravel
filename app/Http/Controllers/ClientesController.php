<?php

namespace App\Http\Controllers;
use App\Http\Controllers\DB;
use App\Models\Cliente;
use App\Models\clientes;
use App\Models\Modelo;
use Egulias\EmailValidator\Validation\Error\RFCWarnings;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Redirect;
use stdClass;

class ClientesController extends Controller
{
    private $modelo;

    function __construct()
    {
       $this->modelo = new Modelo();
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $rfc =$request->get('Search');

      
      $datos['cliente']=clientes::where('rfc','like',"%$rfc%")->paginate(5);

    //$datos= $this->modelo->consultaClientes();
        // $result = new stdClass();
        
       //return response()->json($datos);
        return view('cliente.index',$datos);

        

    }






    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cliente.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     
       
        $campos=[
            'rfc' =>'required|string|max:13|min:13|',
            'nombre' =>'required|string|max:50',
            'edad' =>'required|integer',
            'idciudad'=>'required|integer'
        ];
        $mensaje = ["required"=>'El dato :attribute es requerido'];
        $this->validate($request,$campos,$mensaje);


        $result = new stdClass();
        $cliente = new Cliente ($request->rfc,$request->nombre,$request->edad,$request->idciudad);
        $this->modelo->guardaCliente($cliente);

        return redirect('cliente')->with('Mensaje','Cliente agregado exitosamente');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function edit($rfc)
    {
     
        $cliente=clientes::where ('rfc',$rfc) ->firstOrFail();
        return view('cliente.edit',compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $rfc)
    {
        //
         
        $datoscliente= request()->all();
        $campos=[
            'nombre' =>'required|string|max:50',
            'edad' =>'required|integer',
            'idciudad'=>'required|integer'
        ];
        $mensaje = ["required"=>'El dato :attribute es requerido'];
        $this->validate($request,$campos,$mensaje);

        
        $cliente = new Cliente ($request->rfc,$request->nombre,$request->edad,$request->idciudad);
        $this->modelo->modificaCliente($cliente,$rfc);

        

        return redirect('cliente')->with('Mensaje','Datos de cliente modificados exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function destroy($rfc)
    {
        
        $this->modelo->eliminaCliente($rfc);
        return redirect('cliente')->with('Mensaje','Datos de cliente eliminado');

    }
}
