<?php
class Base_Datos
{
    public $Usuario="root";
    public $Password="";

    public function Conexion(){
        try {
            $Datos=("mysql:host=localhost;dbname=registros");
            $Conexion=new PDO($Datos,$this->Usuario,$this->Password);
            echo("Lo has logrado");
        } catch (PDOException $Error) {
            echo($Error->getMessage());
        }
    }   
}
?>