<?php

class PaybrasConsulta {
    private $conexao;
    private $email;
    private $cnpj;
    private $site;
    private $cep;

    // Inicializa nova instância da classe PaybrasCriacaoTransacao
    public function __construct(Array $dados = null) {
        if ($dados) {
            if (isset($dados['conexao']) && $dados['conexao'] instanceof PaybrasDadosConexao) {
                $this->conexao = $dados['conexao'];
            }
            if (isset($dados['email']) && $dados['email']) {
                $this->email = $dados['email'];
            }
            if (isset($dados['cnpj']) && $dados['cnpj']) {
                $this->cnpj = $dados['cnpj'];
            }
            if (isset($dados['site']) && $dados['site']) {
                $this->site = $dados['site'];
            }
            if (isset($dados['cep']) && $dados['cep']) {
                $this->cep = $dados['cep'];
            }
        } else {
            throw new Exception("Dados de consulta não setados.");
        }
    }

    public function getConexao() {
        return !empty($this->conexao) ? $this->conexao : null;
    }
    public function setConexao(PaybrasDadosConexao $conexao) {
        $this->conexao = $conexao;
    }

    ///////////////////////////////////////////////////////////////

    public function getEmail() {
        return !empty($this->email) ? $this->email : null;
    }
    public function setEmail($email) {
        $this->email = $email;
    }


    ///////////////////////////////////////////////////////////////

    public function getCNPJ() {
        return !empty($this->cnpj) ? $this->cnpj : null;
    }
    public function setCNPJ($cnpj) {
        $this->cnpj = $cnpj;
    }

    ///////////////////////////////////////////////////////////////

    public function getSite() {
        return !empty($this->site) ? $this->site : null;
    }
    public function setSite($site) {
        $this->site = $site;
    }

    ///////////////////////////////////////////////////////////////

    public function getCEP() {
        return !empty($this->cep) ? $this->cep : null;
    }
    public function setCEP($cep) {
        $this->cep = $cep;
    }

    // Gera mensagem para ser enviada
    public function getConsulta(){

        if(isset($this->email) && !empty($this->email)){
            $mensagem['email'] = $this->email;
        }

        if(isset($this->cnpj) && !empty($this->cnpj)){
            $mensagem['cnpj'] = $this->cnpj;
        }

        if(isset($this->site) && !empty($this->site)){
            $mensagem['site'] = $this->site;
        }

        if(isset($this->cep) && !empty($this->cep)){
            $mensagem['cep'] = $this->cep;

            $urlEnvio="http://apps.globalb2c.net/cep/".$this->cep;
            $retorno = json_decode(PaybrasConfig::curl($urlEnvio));

            echo json_encode(array(
                'sucesso' => 0, 
                'endereco' => $retorno->logradouro,
                'cidade' =>   $retorno->cidade,
                'bairro' =>   $retorno->bairro,
                'uf'     =>   $retorno->estado_sigla
            ));
            die;
        }
        
        if(isset($this->conexao) && !empty($this->conexao)){
            $urlEnvio = $this->conexao->getURL();
        } else {
            throw new Exception("Dados da conexão não setados.");
        }

        PaybrasConfig::utf8_encode_deep($mensagem);
        $retorno = PaybrasConfig::curl($urlEnvio, $mensagem);
        return $retorno;
    }
}

?>
