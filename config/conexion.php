<?php
//conexion a la base de datos
//Creo la clase para conectarme a la base de datos
class Conectar {
    protected $dbh;
    protected function Conexion(){
    //manejo de errores
    try {
        $conectar= $this->dbh = new PDO ("mysql:local=localhost;dbname=api","root","")
        return $conectar;
    } 
    catch (Exeption $e ) {

        print "error en bd! : " . $e->getMenssage() . "<br/>";
        die();

    }
            }

    //funciones
    public function set_names() {
        return $this->bdh->query("SET NAMES" 'utf-8');
    }
}



?>