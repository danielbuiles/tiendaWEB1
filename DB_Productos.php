<?php
class Base_Datos
{
    public $Usuario="root";
    public $Password="";
    public function Conexion_DB(){
        try {
            $Datos="mysql:host=localhost;dbname=registros";
            $Enlace=new PDO($Datos,$this->Usuario,$this->Password);
            return $Enlace;
        } catch (PDOException $Error) {
            echo($Error->getMessage());
        }
    }
    public function AgregarDatos($consultaSQL){
        $Conectar=$this->Conexion_DB();
        $LanzarDatos=$Conectar->prepare($consultaSQL);
        $Correr=$LanzarDatos->execute();
        if ($Correr) {
            echo("Datos enviados");
        }
        else {
            echo("Datos no enviados");
        }
    }
    public function BuscarDatos($consultaSQL){
        $conectar=$this->Conexion_DB();

        $Lanzar=$conectar->prepare($consultaSQL);

        $Lanzar->setFetchMode(PDO::FETCH_ASSOC);

        $Resultado=$Lanzar->execute();

        return ($Lanzar->FetchAll());
    }
}

?>