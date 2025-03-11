<?php
class Persona{
    private $nombre;
    private $fecNac;
    private $edad;
    private $tel;
    public function __construct($nombre,$fecNac,$tel){
        $this->nombre=$nombre;
        $this->fecNac=$fecNac;
        $this->setEdad();
        $this->tel=$tel;
       
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($value){
         $this->nombre=$value;
    }
    public function getFecNac(){
        return $this->fecNac;
    }
    public function setFecNac($value){
         $this->fecNac=$value;
    }
    public function getEdad(){
        return $this->edad;
    }
    public function setEdad(){
        $now = new DateTime();
        $nacimiento = new DateTime($this->fecNac);
        $this->edad = $nacimiento->diff($now)->y;
    }
    public function getTel(){
        return $this->tel;
        
    }
    public function setTel($value){
         $this->tel=$value;
    }

}
