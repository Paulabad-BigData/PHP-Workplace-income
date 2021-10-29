<?php

class connect
{
    private $server = 'localhost';
    private $user = 'root';
    private $password = 'paula';
    private $db = 'asistencia';

    public function connection()
    {
        $connection = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        return $connection;
    } // cierro Metodo
} // cierro Clase

// $obj = new connect;

/**
 * Se realiza prueba para verificar la conexión atravez de condicional
 * 
 * if ($obj->connection()) 
 * {
 * echo "<sript>alert('Conexción exitosa')</script>";
 * }
 * else 
 * {
 * echo "<script>alert('Error Conexión')</script>";
 * }
 */

