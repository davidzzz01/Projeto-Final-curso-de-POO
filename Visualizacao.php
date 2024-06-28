<?php

require_once('Video.php');

require_once('Gafanhoto.php');

class Visualizacao{
private $espectador;
private $filme;

public function __construct($espectador, $filme) {
    $this->espectador = $espectador;
    $this->filme = $filme;
    $this->filme->setViews($this->filme->getViews()+1);
    $this->espectador->setTotAssistido($this->espectador->getTotAssistido()+1);
}
public function avaliar(){
$this->filme->setAvaliacao(5);
}
public function avaliarNota($nota){
    $this->filme->setAvaliacao($nota);    
}
public function avaliarPorc($porc){
$nova=0;

if($porc<=20){
    return $nova=3;
}elseif($porc<=50){
    return $nova=5;
}elseif($porc<=90){
    return $nova=8;
}else{
    return $nova=10;
}






    
}
public function getEspectador(){
    return $this->espectador;
}
public function getFilme(){
    return $this->filme;
}
public function setEspectador(){
    return $this->espectador = $espectador;
}
public function setFilme(){
    return $this->filme = $filme;
}
}