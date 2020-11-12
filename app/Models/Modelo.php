<?php

namespace app\Models;
use App\Models\ClientesDB;

class Modelo{

        private $clientesDB;

        function __construct()
        {
            $this-> clientesDB = new ClientesDB();
        }

    public function consultaClientes(){
        return $this->clientesDB->consultaClientes();
    }    

    public function eliminaCliente($cliente){
        return $this->clientesDB->eliminaCliente($cliente);
    }    

    public function guardaCliente($cliente){
        return $this->clientesDB->guardaCliente($cliente);
    }    

    public function consultaCliente($RFC){
        return $this->clientesDB->consultaCliente($RFC);
    }    

    public function modificaCliente($cliente,$RFC){
        return $this->clientesDB->modificaCliente($cliente,$RFC);
    }    


}