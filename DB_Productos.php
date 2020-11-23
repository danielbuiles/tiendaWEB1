<?php
class Base_Datos
{
    public $Usuario="root";
    public $Password="";
    public function Conexion_DB(){
        try {
            $Datos="mysql:host=localhost;dbname=tienda";
            $Enlace=new PDO($Datos,$this->Usuario,$this->Password);
            return $Enlace;
        } catch (PDOException $Error) {
            echo($Error->getMessage());
        }
    }
    public function AgregarDatos($consultaSQL){
        try{
        $Conectar=$this->Conexion_DB();

        $LanzarDatos=$Conectar->prepare($consultaSQL);

        $Correr=$LanzarDatos->execute();

        $Validacion="Agregados!";

        return $Validacion;
        }
        catch(PDOException $Error){
            echo( $Error.getMessage());
        }
        
    }
    public function BuscarDatos($consultaSQL){
        $Conectar=$this->Conexion_DB();

        $Preparo=$Conectar->prepare($consultaSQL);

        $Preparo->setFetchMode(PDO::FETCH_ASSOC);

        $Ejecucion=$Preparo->execute();

        return ($Preparo->fetchAll());
    }
    public function EliminarDatos($consultaSQL){
        $Conexin=$this->Conexion_DB();

        $Catch=$Conexin->prepare($consultaSQL);

        $get=$Catch->execute();
    }
    public function EditarDatos($consultaSQL){
        $Conexion=$this->Conexion_DB();

        $Preparar=$Conexion->prepare($consultaSQL);

        $Ejecucion=$Preparar->execute();

        if ($Ejecucion) {
            echo("bien");
        }
        else{
            echo("Error");
        }
    }
}

?>