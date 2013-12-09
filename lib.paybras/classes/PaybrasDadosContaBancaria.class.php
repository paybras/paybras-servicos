<?php

class PaybrasDadosContaBancaria {
    private $banco;
    private $agencia_codigo;
    private $agencia_dv;
    private $conta_codigo;
    private $conta_dv;
    private $tipo_conta;

    public function __construct (Array $dados = null) {
        if ($dados) {
            if (isset($dados['banco'])) {
                $this->banco = $dados['banco'];
            }
            if (isset($dados['agencia_codigo'])) {
                $this->agencia_codigo = $dados['agencia_codigo'];
            }
            if (isset($dados['agencia_dv'])) {
                $this->agencia_dv = $dados['agencia_dv'];
            }
            if (isset($dados['conta_codigo'])) {
                $this->conta_codigo = $dados['conta_codigo'];
            }
            if (isset($dados['conta_dv'])) {
                $this->conta_dv = $dados['conta_dv'];
            }
            if (isset($dados['tipo_conta'])) {
                $this->tipo_conta = $dados['tipo_conta'];
            }
        } else {
            throw new Exception("Dados da conta bancária não setados.");
        }
    }
    
    public function getBanco() {
        return !empty($this->banco) ? $this->banco : null;
    }
    public function setBanco($banco) {
        $this->banco = $banco;
    }    

    public function getAgenciaCodigo() {
        return !empty($this->agencia_codigo) ? $this->agencia_codigo : null;
    }
    public function setAgenciaCodigo($agencia_codigo) {
        $this->agencia_codigo = $agencia_codigo;
    }

    public function getAgenciaDV() {
        return !empty($this->agencia_dv) ? $this->agencia_dv : null;
    }
    public function setAgenciaDV($agencia_dv) {
        $this->agencia_dv = $agencia_dv;
    }

    public function getContaCodigo() {
        return !empty($this->conta_codigo) ? $this->conta_codigo : null;
    }
    public function setContaCodigo($conta_codigo) {
        $this->conta_codigo = $conta_codigo;
    }

    public function getContaDV() {
        return !empty($this->conta_dv) ? $this->conta_dv : null;
    }
    public function setContaDV($conta_dv) {
        $this->conta_dv = $conta_dv;
    }

    public function getTipoConta() {
        return !empty($this->tipo_conta) ? $this->tipo_conta : null;
    }
    public function setTipoConta($tipo_conta) {
        $this->tipo_conta = $tipo_conta;
    }
}

?>