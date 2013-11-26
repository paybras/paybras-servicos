<?php

class PaybrasConsultaContaBancaria {
    private $conexao;
    private $token;
    private $email;

    // Inicializa nova instância da classe PaybrasCriacaoTransacao
    public function __construct(Array $dados = null) {
        if ($dados) {
            if (isset($dados['conexao']) && $dados['conexao'] instanceof PaybrasDadosConexao) {
                $this->conexao = $dados['conexao'];
            }
            if (isset($dados['token']) && $dados['token']) {
                $this->token = $dados['token'];
            }
            if (isset($dados['email']) && $dados['email']) {
                $this->email = $dados['email'];
            }
        } else {
            throw new Exception("Dados de consulta de conta bancária não setados.");
        }
    }

    public function getConexao() {
        return !empty($this->conexao) ? $this->conexao : null;
    }
    public function setConexao(PaybrasDadosConexao $conexao) {
        $this->conexao = $conexao;
    }

    ///////////////////////////////////////////////////////////////

    public function getToken() {
        return !empty($this->token) ? $this->token : null;
    }
    public function setToken($token) {
        $this->token = $token;
    }

    ///////////////////////////////////////////////////////////////

    public function getEmail() {
        return !empty($this->email) ? $this->email : null;
    }
    public function setEmail($email) {
        $this->email = $email;
    }

    // Gera mensagem para ser enviada
    public function getConsultaContaBancaria(){

        if(isset($this->email) && !empty($this->email)){
            $mensagem['recebedor_email'] = $this->email;
        } else {
            throw new Exception("E-mail do lojista não setado.");
        }

        if(isset($this->token) && !empty($this->token)){
            $mensagem['recebedor_api_token'] = $this->token;
        } else {
            throw new Exception("Token do lojista não setado.");
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
