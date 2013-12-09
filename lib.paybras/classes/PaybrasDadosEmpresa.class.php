<?php

class PaybrasDadosEmpresa {
    private $empresa_cnpj;
    private $empresa_razaosocial;
    private $empresa_telefone;
    private $empresa_ddd_tel;
    private $empresa_telefone2;
    private $empresa_ddd_tel2;
    private $empresa_cep;
    private $empresa_logradouro;
    private $empresa_numero;
    private $empresa_complemento;
    private $empresa_bairro;
    private $empresa_cidade;
    private $empresa_estado;

    // Inicializa nova instância da classe PaybrasDadosEmpresa
    public function __construct (Array $dados = null) {
        if ($dados) {
            if (isset($dados['empresa_cnpj'])) {
                $this->empresa_cnpj = $dados['empresa_cnpj'];
            }
            if (isset($dados['empresa_razaosocial'])) {
                $this->empresa_razaosocial = $dados['empresa_razaosocial'];
            }
            if (isset($dados['empresa_telefone'])) {
                $this->empresa_telefone = $dados['empresa_telefone'];
            }
            if (isset($dados['empresa_ddd_tel'])) {
                $this->empresa_ddd_tel = $dados['empresa_ddd_tel'];
            }
            if (isset($dados['empresa_telefone2'])) {
                $this->empresa_telefone2 = $dados['empresa_telefone2'];
            }
            if (isset($dados['empresa_ddd_tel2'])) {
                $this->empresa_ddd_tel2 = $dados['empresa_ddd_tel2'];
            }
            if (isset($dados['empresa_cep'])) {
                $this->empresa_cep = $dados['empresa_cep'];
            }
            if (isset($dados['empresa_logradouro'])) {
                $this->empresa_logradouro = $dados['empresa_logradouro'];
            }
            if (isset($dados['empresa_numero'])) {
                $this->empresa_numero = $dados['empresa_numero'];
            }
            if (isset($dados['empresa_complemento'])) {
                $this->empresa_complemento = $dados['empresa_complemento'];
            }
            if (isset($dados['empresa_bairro'])) {
                $this->empresa_bairro = $dados['empresa_bairro'];
            }
            if (isset($dados['empresa_cidade'])) {
                $this->empresa_cidade = $dados['empresa_cidade'];
            }
            if (isset($dados['empresa_estado'])) {
                $this->empresa_estado = $dados['empresa_estado'];
            }
        } else {
            throw new Exception("Dados do cartão não setados.");
        }
    }

    public function getCNPJ() {
        return !empty($this->empresa_cnpj) ? $this->empresa_cnpj : null;
    }
    public function setCNPJ($empresa_cnpj) {
        $this->empresa_cnpj = $empresa_cnpj;
    }

    public function getRazaoSocial() {
        return !empty($this->empresa_razaosocial) ? $this->empresa_razaosocial : null;
    }
    public function setRazaoSocial($empresa_razaosocial) {
        $this->empresa_razaosocial = $empresa_razaosocial;
    }

    public function getTelefone() {
        return !empty($this->empresa_telefone) ? $this->empresa_telefone : null;
    }
    public function setTelefone($empresa_telefone) {
        $this->empresa_telefone = $empresa_telefone;
    }

    public function getDDD() {
        return !empty($this->empresa_ddd_tel) ? $this->empresa_ddd_tel : null;
    }
    public function setDDD($empresa_ddd_tel) {
        $this->empresa_ddd_tel = $empresa_ddd_tel;
    }

    public function getTelefone2() {
        return !empty($this->empresa_telefone2) ? $this->empresa_telefone2 : null;
    }
    public function setTelefone2($empresa_telefone2) {
        $this->empresa_telefone2 = $empresa_telefone2;
    }

    public function getDDD2() {
        return !empty($this->empresa_ddd_tel2) ? $this->empresa_ddd_tel2 : null;
    }
    public function setDDD2($empresa_ddd_tel2) {
        $this->empresa_ddd_tel2 = $empresa_ddd_tel2;
    }

    public function getCEP() {
        return !empty($this->empresa_cep) ? $this->empresa_cep : null;
    }
    public function setCEP($empresa_cep) {
        $this->empresa_cep = $empresa_cep;
    }    

    public function getLogradouro() {
        return !empty($this->empresa_logradouro) ? $this->empresa_logradouro : null;
    }
    public function setLogradouro($empresa_logradouro) {
        $this->empresa_logradouro = $empresa_logradouro;
    }

    public function getNumero() {
        return !empty($this->empresa_numero) ? $this->empresa_numero : null;
    }
    public function setNumero($empresa_numero) {
        $this->empresa_numero = $empresa_numero;
    }

    public function getComplemento() {
        return !empty($this->empresa_complemento) ? $this->empresa_complemento : null;
    }
    public function setComplemento($empresa_complemento) {
        $this->empresa_complemento = $empresa_complemento;
    }

    public function getBairro() {
        return !empty($this->empresa_bairro) ? $this->empresa_bairro : null;
    }
    public function setBairro($empresa_bairro) {
        $this->empresa_bairro = $empresa_bairro;
    }

    public function getCidade() {
        return !empty($this->empresa_cidade) ? $this->empresa_cidade : null;
    }
    public function setCidade($empresa_cidade) {
        $this->empresa_cidade = $empresa_cidade;
    }

    public function getEstado() {
        return !empty($this->empresa_estado) ? $this->empresa_estado : null;
    }
    public function setEstado($empresa_estado) {
        $this->empresa_estado = $empresa_estado;
    }
}

?>