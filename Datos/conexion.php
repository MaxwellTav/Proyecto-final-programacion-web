<?php

class Conexion
{

    public $con = null;
    private $server = 'bpbuvn5bncqpxj2zhew3-mysql.services.clever-cloud.com';
    private $user = 'uefu19rlollq3o9i';
    private $password = 'wDqam0mtVBKFR9nvtMaq';
    private $nombreBD = 'bpbuvn5bncqpxj2zhew3';

    public function conectar()
    {

        $this->con = new mysqli($this->server, $this->user, $this->password, $this->nombreBD);

        if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());

        } else {
            return $this->con;
        }

    }

    public function cerrarConexion()
    {

        if ($this->con !== null) {
            $this->con->close();
        }

    }

}
