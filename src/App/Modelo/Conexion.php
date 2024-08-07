<?php
class conexion
{
    public $con;
    public function __construct()
    {
        // con --- variable que almacena datos de la base conexion   
        $this->con = new mysqli('localhost', 'root', '', 'fingerplus');
        if ($this->con->connect_error) {
            die("Error en la conexion de la DB:(" . $this->con->connect_error . ")");
        }
    }
}
