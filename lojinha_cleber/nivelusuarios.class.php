<?php


class Nivelusuarios {
    
    private $idNivelusuario;
    private $nivel;
       
    function __construct ($idNivelusuario, $nivel ) {
        $this->setIdNivelusuario ($idNivelusuario);
        $this->setNivel ($nivel);
        
    }

    
    public function getIdNivelusuario(){
        return $this->idNivelusuario;
    }

  
    public function setIdNivelusuario($idNivelusuario){
        $this->idNivelusuario = $idNivelusuario;
        return $this;
    }

    
    public function getNivel(){
        return $this->nivel;
    }

   
    public function setNivel($nivel){
        $this->nivel = $nivel;
        return $this;
    }

}







?>