<?php

class PaybrasDadosSolicitacaoSaque {
    private $id_conta_bancaria;
    private $valor_saque;

    public function __construct (Array $dados = null) {
        if ($dados) {
            if (isset($dados['id_conta_bancaria'])) {
                $this->id_conta_bancaria = $dados['id_conta_bancaria'];
            }
            if (isset($dados['valor_saque'])) {
                $this->valor_saque = $dados['valor_saque'];
            }
        } else {
            throw new Exception("Dados da solicitação de saque não setados.");
        }
    }
    
    public function getIDContaBancaria() {
        return !empty($this->id_conta_bancaria) ? $this->id_conta_bancaria : null;
    }
    public function setIDContaBancaria($id_conta_bancaria) {
        $this->id_conta_bancaria = $id_conta_bancaria;
    }    

    public function getValorSaque() {
        return !empty($this->valor_saque) ? $this->valor_saque : null;
    }
    public function setValorSaque($valor_saque) {
        $this->valor_saque = $valor_saque;
    }
}

?>