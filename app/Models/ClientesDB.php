<?php

namespace App\Models;
use App\Models\Modelo;
use App\Models\Cliente;
use Exception;
use GrahamCampbell\ResultType\Result;
use Illuminate\Support\Facades\BD;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\FuncCall;

Class ClientesDB {

      function __construct()
      {
      }
      
      public function consultaClientes(){
        $clientes = [];
        $results = DB::select ('Select * from clientes');
        foreach ($results as $registro){
            $clientes[] = new Cliente($registro->rfc,$registro->nombre,$registro->edad,$registro->idciudad);
        }
        return $clientes;
      }

      public function guardaCliente($cliente){
        $result = DB::insert('insert into clientes (rfc, nombre, edad, idciudad) values (?, ?, ?, ?)',
        [$cliente->getRFC(),$cliente->getNombre(),$cliente->getedad(),$cliente->getidciudad()]);

        return $result;
      }

      public function eliminaCliente($RFC){
        $result = DB::delete('delete from clientes where rfc = ?', [$RFC]);
        return $result;
      }

      public function modificaCliente($cliente,$RFC){
        $result = DB::update('update clientes set  nombre = ?, edad= ?, idciudad = ? where rfc = ?', 
        [$cliente->getNombre(),$cliente->getedad(),$cliente->getidciudad(),$RFC]);

      }

      public function consultaCliente($RFC){
       
         $result = DB::select ('Select * from clientes where rfc = ?', [$RFC])[0];
  
        $cliente = new Cliente($result->rfc, $result->nombre ,$result->edad, $result->idciudad);
        return $cliente;
      }


}