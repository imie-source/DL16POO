<?php

interface IVehicle{

    public function start();
    public function stop();
    public function turn($angle);
    public function horn();

}