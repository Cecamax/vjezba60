<?php

abstract class PrevoznoSretstvo{
    public $volan = "";
    public $tockovi = "";
    public $kocnice = "";

    public abstract function upali();
    public abstract function ugasi();
    public abstract function kreni();
    public abstract function stani();
    public abstract function vozi();
}

class Automobil extends PrevoznoSretstvo{
    public function upali(){
        "Automobil je ugašen.";
    }

    public function ugasi(){
        "Automobil je ugašen";
    }
    public function kreni(){
        "automobil je krenuo.";
    }
    public function stani(){
        "Automobil je stao.";
        }
    public function vozi(){
        "Automobil vozi.";
    }

}

final class Volvo extends Automobil{

}

$xc60 = new Volvo();


?>