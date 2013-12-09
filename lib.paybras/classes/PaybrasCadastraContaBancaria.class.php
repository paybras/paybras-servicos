<?php

class PaybrasCadastraContaBancaria {
    private $conexao;
    private $token;
    private $email;

    private $conta;

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
            if (isset($dados['conta']) && $dados['conta'] instanceof PaybrasDadosContaBancaria) {
                $this->conta = $dados['conta'];
            }
        } else {
            throw new Exception("Dados de cadastro de conta bancária não setados.");
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

    ///////////////////////////////////////////////////////////////

    public function getConta() {
        return !empty($this->conta) ? $this->conta : null;
    }
    public function setConta(PaybrasDadosContaBancaria $conta) {
        $this->conta = $conta;
    }

    // Gera mensagem para ser enviada
    public function getCadastroContaBancaria(){

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

        if(isset($this->conta) && !empty($this->conta)){
            $mensagem['banco'] = $this->conta->getBanco();
            $mensagem['agencia_codigo'] = $this->conta->getAgenciaCodigo();
            $mensagem['agencia_dv'] = $this->conta->getAgenciaDV();
            $mensagem['conta_codigo'] = $this->conta->getContaCodigo();
            $mensagem['conta_dv'] = $this->conta->getContaDV();
            $mensagem['tipo_conta'] = $this->conta->getTipoConta();
        } else {
            throw new Exception("Dados da conta bancária não setados.");
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
