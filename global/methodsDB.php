<?php

class methods
{
    /*
    public $id;
    public $code;
    public $name;
    public $document;
    public $dpto;
    public function __construct($id,$code,$name,$document,$dpto)
    {
        $this->id=$id;
        $this->codigo=$code;
        $this->nombre=$name;
        $this->documento=$document;
        $this->dpto=$dpto;

    }
    */

    public static function consult($code)
    {
        $asist = new connect;
        $cone = $asist->connection();
        $sql= $cone->query("SELECT * FROM empleado WHERE codigo=?");

        $resultado = mysqli_query($cone,$sql);

        return $resultado;

    }
}