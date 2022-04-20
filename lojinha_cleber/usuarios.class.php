<?php

class Usuarios {
    
    private $idUsuario;
    private $email;
    private $senha;
    private $idNIvelusuario;
    private $nome;
    private $cpf;
    private $endereco;
    private $bairro;
    private $cidade;
    private $uf;
    private $cep;
    private $telefone;
    private $foto;
    private $ativo;
    
    
    function  __construct ( $idUsuario, $email, $senha, $idNIvelusuario, $nome, $cpf, $endereco, $bairro, $cidade, $uf, $cep, $telefone, $foto, $ativo ) {

        $this->setIdUsuario       ($idUsuario);
        $this->setEmail       ($email);
        $this->setSenha       ($senha);
        $this->setIdNIvelusuario       ($idNIvelusuario);
        $this->setNome       ($nome);
        $this->setCpf       ($cpf);
        $this->setEndereco       ($endereco);
        $this->setBairro       ($bairro);
        $this->setCidade       ($cidade);
        $this->setUf       ($uf);
        $this->setCep       ($cep);
        $this->setTelefone       ($telefone);
        $this->setFoto       ($foto);
        $this->setAtivo       ($ativo);

    }
    
    public function getIdUsuario(){
        return $this->idUsuario;
    }

   
    public function setIdUsuario($idUsuario){
        $this->idUsuario = $idUsuario;
        return $this;
    }

    
    public function getEmail(){
        return $this->email;
    }

   
    public function setEmail($email){
        $this->email = $email;
        return $this;
    }

   
    public function getSenha(){
        return $this->senha;
    }

   
    public function setSenha($senha){
        $this->senha = $senha;
        return $this;
    }

    
    public function getIdNIvelusuario(){
        return $this->idNIvelusuario;
    }

    
    public function setIdNIvelusuario($idNIvelusuario){
        $this->idNIvelusuario = $idNIvelusuario;
        return $this;
    }

    
    public function getNome(){
        return $this->nome;
    }

    
    public function setNome($nome){
        $this->nome = $nome;
        return $this;
    }

    
    public function getCpf(){
        return $this->cpf;
    }

    
    public function setCpf($cpf){
        $this->cpf = $cpf;
        return $this;
    }

    
    public function getEndereco(){
        return $this->endereco;
    }

    
    public function setEndereco($endereco){
        $this->endereco = $endereco;
        return $this;
    }

    
    public function getBairro(){
        return $this->bairro;
    }

   
    public function setBairro($bairro){
        $this->bairro = $bairro;
        return $this;
    }

    
    public function getCidade(){
        return $this->cidade;
    }

    
    public function setCidade($cidade){
        $this->cidade = $cidade;
        return $this;
    }

    
    public function getUf(){
        return $this->uf;
    }

    public function setUf($uf){
        $this->uf = $uf;
        return $this;
    }

    
    public function getCep(){
        return $this->cep;
    }

    
    public function setCep($cep){
        $this->cep = $cep;
        return $this;
    }

   
    public function getTelefone(){
        return $this->telefone;
    }

    
    public function setTelefone($telefone){
        $this->telefone = $telefone;
        return $this;
    }

    
    public function getFoto(){
        return $this->foto;
    }

    
    public function setFoto($foto){
        $this->foto = $foto;
        return $this;
    }

   
    public function getAtivo(){
        return $this->ativo;
    }

    
    public function setAtivo($ativo){
        $this->ativo = $ativo;
        return $this;
    }

}






?>