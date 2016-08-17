<?php
require_once("IVehicle.php");


class Boat implements IVehicle{

    public function start(){

    }

    public function stop(){

    }

    public function turn($angle){

    }

    public function horn(){
        echo "POOOOMP!";
    }
    
}