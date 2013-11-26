<?php

class PaybrasCadastraLoja {
    private $conexao;
    private $loja;
    private $empresa;
    private $responsavel;

    public function __construct(Array $dados = null) {
        if ($dados) {
            if (isset($dados['conexao']) && $dados['conexao'] instanceof PaybrasDadosConexao) {
                $this->conexao = $dados['conexao'];
            }
            if (isset($dados['loja']) && $dados['loja'] instanceof PaybrasDadosLoja) {
                $this->loja = $dados['loja'];
            }
            if (isset($dados['empresa']) && $dados['empresa'] instanceof PaybrasDadosEmpresa) {
                $this->empresa = $dados['empresa'];
            }
            if (isset($dados['responsavel']) && $dados['responsavel'] instanceof PaybrasDadosResponsavel) {
                $this->responsavel = $dados['responsavel'];
            }
        } else {
            throw new Exception("Dados de criação de transação não setados.");
        }
    }

    public function getConexao() {
        return !empty($this->conexao) ? $this->conexao : null;
    }
    public function setConexao(PaybrasDadosConexao $conexao) {
        $this->conexao = $conexao;
    }

    ///////////////////////////////////////////////////////////////

    public function getLoja() {
        return !empty($this->loja) ? $this->loja : null;
    }
    public function setLoja(PaybrasDadosLoja $loja) {
        $this->loja = $loja;
    }

    ///////////////////////////////////////////////////////////////

    public function getEmpresa() {
        return !empty($this->empresa) ? $this->empresa : null;
    }
    public function setEmpresa(PaybrasDadosEmpresa $empresa) {
        $this->empresa = $empresa;
    }

    ///////////////////////////////////////////////////////////////

    public function getResponsavel() {
        return !empty($this->responsavel) ? $this->responsavel : null;
    }
    public function setResponsavel(PaybrasDadosResponsavel $responsavel) {
        $this->responsavel = $responsavel;
    }

    public function getArrayCadastroLojista(){
        if(isset($this->loja) && !empty($this->loja)){
            $mensagem['seller_name'] = $this->loja->getName();
            $mensagem['seller_email'] = $this->loja->getEmail();
            $mensagem['seller_site'] = $this->loja->getSite();
            $mensagem['seller_pass'] = $this->loja->getPassword();
            $mensagem['seller_tipolojista'] = $this->loja->getTipoLojista();
            $mensagem['seller_sistema'] = $this->loja->getSistema();
            $mensagem['seller_categoriaid'] = $this->loja->getCategoria();
            $mensagem['seller_softdescriptor'] = $this->loja->getSoftDescriptor();
            $mensagem['seller_atendimentoemail'] = $this->loja->getAtendimentoEmail();
            $mensagem['seller_atendimentotel'] = $this->loja->getAtendimentoTel();
            $mensagem['seller_ddd_atendimentotel'] = $this->loja->getAtendimentoDDD();
            $mensagem['seller_atendimentotel1'] = $this->loja->getAtendimentoTel1();
            $mensagem['seller_ddd_atendimentotel1'] = $this->loja->getAtendimentoDDD1();
            $mensagem['seller_atendimentotel2'] = $this->loja->getAtendimentoTel2();
            $mensagem['seller_ddd_atendimentotel2'] = $this->loja->getAtendimentoDDD2();
            $mensagem['seller_atendimentotel3'] = $this->loja->getAtendimentoTel3();
            $mensagem['seller_ddd_atendimentotel3'] = $this->loja->getAtendimentoDDD3();
            $mensagem['seller_atendimentotel4'] = $this->loja->getAtendimentoTel4();
            $mensagem['seller_ddd_atendimentotel4'] = $this->loja->getAtendimentoDDD4();
            $mensagem['seller_atendimentotel5'] = $this->loja->getAtendimentoTel5();
            $mensagem['seller_ddd_atendimentotel5'] = $this->loja->getAtendimentoDDD5();
            $mensagem['seller_atendimentotel6'] = $this->loja->getAtendimentoTel6();
            $mensagem['seller_ddd_atendimentotel6'] = $this->loja->getAtendimentoDDD6();
            $mensagem['seller_atendimentotel7'] = $this->loja->getAtendimentoTel7();
            $mensagem['seller_ddd_atendimentotel7'] = $this->loja->getAtendimentoDDD7();
        } else {
            throw new Exception("Dados da loja não setados.");
        }

        if($mensagem['seller_tipolojista'] == 'E'){
            if(isset($this->empresa) && !empty($this->empresa)){
                $mensagem['empresa_cnpj'] = $this->empresa->getCNPJ();
                $mensagem['empresa_razaosocial'] = $this->empresa->getRazaoSocial();
                $mensagem['empresa_telefone'] = $this->empresa->getTelefone();
                $mensagem['empresa_ddd_tel'] = $this->empresa->getDDD();
                $mensagem['empresa_telefone2'] = $this->empresa->getTelefone2();
                $mensagem['empresa_ddd_tel2'] = $this->empresa->getDDD2();
                $mensagem['empresa_cep'] = $this->empresa->getCEP();
                $mensagem['empresa_logradouro'] = $this->empresa->getLogradouro();
                $mensagem['empresa_numero'] = $this->empresa->getNumero();
                $mensagem['empresa_complemento'] = $this->empresa->getComplemento();
                $mensagem['empresa_bairro'] = $this->empresa->getBairro();
                $mensagem['empresa_cidade'] = $this->empresa->getCidade();
                $mensagem['empresa_estado'] = $this->empresa->getEstado();
            } else {
                throw new Exception("Dados da empresa não setados.");
            }
        }

        if(isset($this->responsavel) && !empty($this->responsavel)){
            $mensagem['responsavel_cep'] = $this->responsavel->getCEP();
            $mensagem['responsavel_logradouro'] = $this->responsavel->getLogradouro();
            $mensagem['responsavel_numero'] = $this->responsavel->getNumero();
            $mensagem['responsavel_complemento'] = $this->responsavel->getComplemento();
            $mensagem['responsavel_bairro'] = $this->responsavel->getBairro();
            $mensagem['responsavel_cidade'] = $this->responsavel->getCidade();
            $mensagem['responsavel_estado'] = $this->responsavel->getEstado();
            $mensagem['responsavel_name'] = $this->responsavel->getName();
            $mensagem['responsavel_cpf'] = $this->responsavel->getCPF();
            $mensagem['responsavel_datanasc'] = $this->responsavel->getDataNascimento();
            $mensagem['responsavel_ddd_tel'] = $this->responsavel->getDDD();
            $mensagem['responsavel_telefone'] = $this->responsavel->getTelefone();
        } else {
            throw new Exception("Dados do responsavel pela empresa não setados.");
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
