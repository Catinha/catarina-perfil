<?php

class Pedidos {
    
    private $idPedido;
    private $idUsuario;
    private $dtPedido;
    private $dtPagamento;
    private $dtNOtaFiscal;
    private $NotaFiscal;
    private $dtEnvio;
    private $dtRecebimento; 
    private $tipoFrete;
    private $rastreioFrete;
    private $entregaEndereco;
    private $entregaNumero;
    private $entregaCompl;
    private $entregaBairro;
    private $entregaCidade;
    private $entregaUf;
    private $entregaCEP;
    private $entregaTelefone;
    private $entregaRefer;
    private $valorTotal;
    private $qtdItems;
    private $dtDevolucao;
    private $motivoDevolucao;
    
    
  function __construct ($idPedido, $idUsuario, $dtPedido, $dtPagamento, $dtNOtaFiscal, $dtEnvio, $dtRecebimento, $tipoFrete,  $rastreioFrete, $entregaEndereco, $entregaNumero, $entregaCompl, $entregaBairro, $entregaCidade, $entregaUf, $entregaCEP, $entregaTelefone, $entregaRefer, $valorTotal, $qtdItems, $dtDevolucao, $motivoDevolucao ) {

    $this->setIdPedido       ($idPedido); 
    $this->setIdUsuario       ($idUsuario);
    $this->setDtPedido       ($dtPedido);
    $this->setDtPagamento       ($dtPagamento);
    $this->setDtNOtaFiscal       ($dtNOtaFiscal);
    $this->setNotaFiscal       ($NotaFiscal);
    $this->setDtEnvio       ($dtEnvio);
    $this->setDtRecebimento       ($dtRecebimento);
    $this->setTipoFrete       ($tipoFrete);
    $this->setRastreioFrete       ($rastreioFrete);
    $this->setEntregaEndereco       ($entregaEndereco);
    $this->setEntregaNumero       ($entregaNumero);
    $this->setEntregaCompl       ($entregaCompl);
    $this->setEntregaBairro       ($entregaBairro);
    $this->setEntregaCidade       ($entregaCidade);
    $this->setEntregaUf       ($entregaUf);
    $this->setEntregaCEP       ($entregaCEP);
    $this->setEntregaTelefone       ($entregaTelefone);
    $this->setEntregaRefer       ($entregaRefer);
    $this->setValorTotal       ($valorTotal);
    $this->setQtdItems       ($qtdItems);
    $this->setDtDevolucao       ($dtDevolucao);
    $this->setMotivoDevolucao       ($motivoDevolucao);
    
  }
    
    
    public function getIdPedido(){
        return $this->idPedido;
    }

   
    public function setIdPedido($idPedido){
        $this->idPedido = $idPedido;
        return $this;
    }

    public function getIdUsuario(){
        return $this->idUsuario;
    }

   
    public function setIdUsuario($idUsuario){
        $this->idUsuario = $idUsuario;
        return $this;
    }

   
    public function getDtPedido(){
        return $this->dtPedido;
    }

    
    public function setDtPedido($dtPedido){
        $this->dtPedido = $dtPedido;
        return $this;
    }

    
    public function getDtPagamento(){
        return $this->dtPagamento;
    }

    
    public function setDtPagamento($dtPagamento){
        $this->dtPagamento = $dtPagamento;
        return $this;
    }

    
    public function getDtNOtaFiscal(){
        return $this->dtNOtaFiscal;
    }

    
    public function setDtNOtaFiscal($dtNOtaFiscal){
        $this->dtNOtaFiscal = $dtNOtaFiscal;
        return $this;
    }

    
    public function getNotaFiscal(){
        return $this->NotaFiscal;
    }

    
    public function setNotaFiscal($NotaFiscal){
        $this->NotaFiscal = $NotaFiscal;
        return $this;
    }

    
    public function getDtEnvio(){
        return $this->dtEnvio;
    }

    
    public function setDtEnvio($dtEnvio){
        $this->dtEnvio = $dtEnvio;
        return $this;
    }

    
    public function getDtRecebimento(){
        return $this->dtRecebimento;
    }

   
    public function setDtRecebimento($dtRecebimento){
        $this->dtRecebimento = $dtRecebimento;
        return $this;
    }

    
    public function getTipoFrete(){
        return $this->tipoFrete;
    }

    
    public function setTipoFrete($tipoFrete){
        $this->tipoFrete = $tipoFrete;
        return $this;
    }

    
    public function getRastreioFrete(){
        return $this->rastreioFrete;
    }

    
    public function setRastreioFrete($rastreioFrete){
        $this->rastreioFrete = $rastreioFrete;
        return $this;
    }

    
    public function getEntregaEndereco(){
        return $this->entregaEndereco;
    }

    
    public function setEntregaEndereco($entregaEndereco){
        $this->entregaEndereco = $entregaEndereco;
        return $this;
    }

    public function getEntregaNumero(){
        return $this->entregaNumero;
    }

   
    public function setEntregaNumero($entregaNumero){
        $this->entregaNumero = $entregaNumero;
        return $this;
    }

    
    public function getEntregaCompl(){
        return $this->entregaCompl;
    }

    
    public function setEntregaCompl($entregaCompl){
        $this->entregaCompl = $entregaCompl;
        return $this;
    }

    
    public function getEntregaBairro(){
        return $this->entregaBairro;
    }

    
    public function setEntregaBairro($entregaBairro){
        $this->entregaBairro = $entregaBairro;
        return $this;
    }

    
    public function getEntregaCidade(){
        return $this->entregaCidade;
    }

    
    public function setEntregaCidade($entregaCidade){
        $this->entregaCidade = $entregaCidade;
        return $this;
    }

    public function getEntregaUf(){
        return $this->entregaUf;
    }

    
    public function setEntregaUf($entregaUf){
        $this->entregaUf = $entregaUf;
        return $this;
    }

    
    public function getEntregaCEP(){
        return $this->entregaCEP;
    }

   
    public function setEntregaCEP($entregaCEP){
        $this->entregaCEP = $entregaCEP;
        return $this;
    }

    public function getEntregaTelefone(){
        return $this->entregaTelefone;
    }

    
    public function setEntregaTelefone($entregaTelefone){
        $this->entregaTelefone = $entregaTelefone;
        return $this;
    }

    
    public function getEntregaRefer(){
        return $this->entregaRefer;
    }

   
    public function setEntregaRefer($entregaRefer){
        $this->entregaRefer = $entregaRefer;
        return $this;
    }

   
    public function getValorTotal(){
        return $this->valorTotal;
    }

    
    public function setValorTotal($valorTotal){
        $this->valorTotal = $valorTotal;
        return $this;
    }

   
    public function getQtdItems(){
        return $this->qtdItems;
    }

    
    public function setQtdItems($qtdItems){
        $this->qtdItems = $qtdItems;
        return $this;
    }

    
    public function getDtDevolucao(){
        return $this->dtDevolucao;
    }

    
    public function setDtDevolucao($dtDevolucao){
        $this->dtDevolucao = $dtDevolucao;
        return $this;
    }

    
    public function getMotivoDevolucao(){
        return $this->motivoDevolucao;
    }

    public function setMotivoDevolucao($motivoDevolucao){
        $this->motivoDevolucao = $motivoDevolucao;
        return $this;
    }

}





?>