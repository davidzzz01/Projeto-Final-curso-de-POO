<?php
require_once('Pessoa.php');
class Gafanhoto extends Pessoa{
    private $login;
    private $totAssistido;

public function __construct($nome, $idade, $sexo, $login) {
    parent::__construct($nome, $idade, $sexo);
    $this->login = $login;
    $this->totAssistido=0; 
}



    public function assistirMaisUm(){
     $this->totAssistido++;   
    }
    public function setTotAssistido($totAssistido){
      $this->totAssistido=$totAssistido;
    }
    
    public function getTotAssistido(){
        return $this->totAssistido;
    }

}