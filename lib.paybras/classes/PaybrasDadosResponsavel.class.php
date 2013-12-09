<?php

class PaybrasDadosResponsavel {
    private $responsavel_cep;
    private $responsavel_logradouro;
    private $responsavel_numero;
    private $responsavel_complemento;
    private $responsavel_bairro;
    private $responsavel_cidade;
    private $responsavel_estado;
    private $responsavel_name;
    private $responsavel_cpf;
    private $responsavel_datanasc;
    private $responsavel_ddd_tel;
    private $responsavel_telefone;

    // Inicializa nova instância da classe PaybrasDadosresponsavel
    public function __construct (Array $dados = null) {
        if ($dados) {
            if (isset($dados['responsavel_cep'])) {
                $this->responsavel_cep = $dados['responsavel_cep'];
            }
            if (isset($dados['responsavel_logradouro'])) {
                $this->responsavel_logradouro = $dados['responsavel_logradouro'];
            }
            if (isset($dados['responsavel_numero'])) {
                $this->responsavel_numero = $dados['responsavel_numero'];
            }
            if (isset($dados['responsavel_complemento'])) {
                $this->responsavel_complemento = $dados['responsavel_complemento'];
            }
            if (isset($dados['responsavel_bairro'])) {
                $this->responsavel_bairro = $dados['responsavel_bairro'];
            }
            if (isset($dados['responsavel_cidade'])) {
                $this->responsavel_cidade = $dados['responsavel_cidade'];
            }
            if (isset($dados['responsavel_estado'])) {
                $this->responsavel_estado = $dados['responsavel_estado'];
            }
            if (isset($dados['responsavel_name'])) {
                $this->responsavel_name = $dados['responsavel_name'];
            }
            if (isset($dados['responsavel_cpf'])) {
                $this->responsavel_cpf = $dados['responsavel_cpf'];
            }
            if (isset($dados['responsavel_datanasc'])) {
                $this->responsavel_datanasc = $dados['responsavel_datanasc'];
            }
            if (isset($dados['responsavel_telefone'])) {
                $this->responsavel_telefone = $dados['responsavel_telefone'];
            }
        } else {
            throw new Exception("Dados do cartão não setados.");
        }
    }
    
    public function getCEP() {
        return !empty($this->responsavel_cep) ? $this->responsavel_cep : null;
    }
    public function setCEP($responsavel_cep) {
        $this->responsavel_cep = $responsavel_cep;
    }    

    public function getLogradouro() {
        return !empty($this->responsavel_logradouro) ? $this->responsavel_logradouro : null;
    }
    public function setLogradouro($responsavel_logradouro) {
        $this->responsavel_logradouro = $responsavel_logradouro;
    }

    public function getNumero() {
        return !empty($this->responsavel_numero) ? $this->responsavel_numero : null;
    }
    public function setNumero($responsavel_numero) {
        $this->responsavel_numero = $responsavel_numero;
    }

    public function getComplemento() {
        return !empty($this->responsavel_complemento) ? $this->responsavel_complemento : null;
    }
    public function setComplemento($responsavel_complemento) {
        $this->responsavel_complemento = $responsavel_complemento;
    }

    public function getBairro() {
        return !empty($this->responsavel_bairro) ? $this->responsavel_bairro : null;
    }
    public function setBairro($responsavel_bairro) {
        $this->responsavel_bairro = $responsavel_bairro;
    }

    public function getCidade() {
        return !empty($this->responsavel_cidade) ? $this->responsavel_cidade : null;
    }
    public function setCidade($responsavel_cidade) {
        $this->responsavel_cidade = $responsavel_cidade;
    }

    public function getEstado() {
        return !empty($this->responsavel_estado) ? $this->responsavel_estado : null;
    }
    public function setEstado($responsavel_estado) {
        $this->responsavel_estado = $responsavel_estado;
    }

    public function getName() {
        return !empty($this->responsavel_name) ? $this->responsavel_name : null;
    }
    public function setName($responsavel_name) {
        $this->responsavel_name = $responsavel_name;
    }

    public function getCPF() {
        return !empty($this->responsavel_cpf) ? $this->responsavel_cpf : null;
    }
    public function setCPF($responsavel_cpf) {
        $this->responsavel_cpf = $responsavel_cpf;
    }

    public function getDataNascimento() {
        return !empty($this->responsavel_datanasc) ? $this->responsavel_datanasc : null;
    }
    public function setDataNascimento($responsavel_datanasc) {
        $this->responsavel_datanasc = $responsavel_datanasc;
    }

    public function getDDD() {
        return !empty($this->responsavel_ddd_tel) ? $this->responsavel_ddd_tel : null;
    }
    public function setDDD($responsavel_ddd_tel) {
        $this->responsavel_ddd_tel = $responsavel_ddd_tel;
    }

    public function getTelefone() {
        return !empty($this->responsavel_telefone) ? $this->responsavel_telefone : null;
    }
    public function setTelefone($responsavel_telefone) {
        $this->responsavel_telefone = $responsavel_telefone;
    }
}

?>