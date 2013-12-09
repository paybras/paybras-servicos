<?php 
require_once "../PaybrasBiblioteca.php";

class PaybrasCadastroLojista {

    public static function main($dados_post) {
        try {
            $dados['conexao'] = new PaybrasDadosConexao(PaybrasConfig::getURL('cadastro_lojista'));
            $dados['loja'] = self::dadosLoja($dados_post);            
            $dados['empresa'] = self::dadosEmpresa($dados_post);
            $dados['responsavel'] = self::dadosResponsavel($dados_post);
            $cadastroLojista = new PaybrasCadastraLoja($dados);

            return self::retornoCadastroLojista($cadastroLojista->getArrayCadastroLojista());
            
        } catch (PaybrasExcecao $e) {
            die($e->getMessage());
        }
        
    }

    public static function retornoCadastroLojista($retornoCadastroLojista) {
        if(isset($retornoCadastroLojista) && !empty($retornoCadastroLojista)) {
            echo $retornoCadastroLojista;
        } else {
            //Caso a transação não tenha sido enviada a API do Paybras
            echo "Erro no envio dos dados de cadastro de lojista";
        }
    }

    private function dadosLoja($dados_post) {
        $data['seller_name'] = $dados_post['seller_name'];
        $data['seller_email'] = $dados_post['seller_email'];
        $data['seller_site'] = $dados_post['seller_site'];
        $data['seller_pass'] = $dados_post['seller_pass'];
        $data['seller_tipolojista'] = $dados_post['seller_tipolojista'];
        if($dados_post['seller_sistema']) $data['seller_sistema'] = $dados_post['seller_sistema'];
        if($dados_post['seller_categoriaid']) $data['seller_categoriaid'] = $dados_post['seller_categoriaid'];
        $data['seller_softdescriptor'] = $dados_post['seller_softdescriptor'];
        if($dados_post['seller_atendimentoemail']) $data['seller_atendimentoemail'] = $dados_post['seller_atendimentoemail'];
        if($dados_post['seller_atendimentotel']) $data['seller_atendimentotel'] = $dados_post['seller_atendimentotel'];
        if($dados_post['seller_ddd_atendimentotel']) $data['seller_ddd_atendimentotel'] = $dados_post['seller_ddd_atendimentotel'];

        if($dados_post['seller_atendimentotel1']) $data['seller_atendimentotel1'] = $dados_post['seller_atendimentotel1'];
        if($dados_post['seller_ddd_atendimentotel1']) $data['seller_ddd_atendimentotel1'] = $dados_post['seller_ddd_atendimentotel1'];

        if($dados_post['seller_atendimentotel2']) $data['seller_atendimentotel2'] = $dados_post['seller_atendimentotel2'];
        if($dados_post['seller_ddd_atendimentotel2']) $data['seller_ddd_atendimentotel2'] = $dados_post['seller_ddd_atendimentotel2'];

        if($dados_post['seller_atendimentotel3']) $data['seller_atendimentotel3'] = $dados_post['seller_atendimentotel3'];
        if($dados_post['seller_ddd_atendimentotel3']) $data['seller_ddd_atendimentotel3'] = $dados_post['seller_ddd_atendimentotel3'];

        if($dados_post['seller_atendimentotel4']) $data['seller_atendimentotel4'] = $dados_post['seller_atendimentotel4'];
        if($dados_post['seller_ddd_atendimentotel4']) $data['seller_ddd_atendimentotel4'] = $dados_post['seller_ddd_atendimentotel4'];

        if($dados_post['seller_atendimentotel5']) $data['seller_atendimentotel5'] = $dados_post['seller_atendimentotel5'];
        if($dados_post['seller_ddd_atendimentotel5']) $data['seller_ddd_atendimentotel5'] = $dados_post['seller_ddd_atendimentotel5'];

        if($dados_post['seller_atendimentotel6']) $data['seller_atendimentotel6'] = $dados_post['seller_atendimentotel6'];
        if($dados_post['seller_ddd_atendimentotel6']) $data['seller_ddd_atendimentotel6'] = $dados_post['seller_ddd_atendimentotel6'];

        if($dados_post['seller_atendimentotel7']) $data['seller_atendimentotel7'] = $dados_post['seller_atendimentotel7'];
        if($dados_post['seller_ddd_atendimentotel7']) $data['seller_ddd_atendimentotel7'] = $dados_post['seller_ddd_atendimentotel7'];


        return new PaybrasDadosLoja($data);
    }

    private function dadosEmpresa($dados_post) {
        if($dados_post['seller_tipolojista'] == 'E'){
            $data['empresa_cnpj'] = $dados_post['empresa_cnpj'];
            $data['empresa_razaosocial'] = $dados_post['empresa_razaosocial'];
            $data['empresa_telefone'] = $dados_post['empresa_telefone'];
            $data['empresa_ddd_tel'] = $dados_post['empresa_ddd_tel'];
            $data['empresa_telefone2'] = $dados_post['empresa_telefone2'];
            $data['empresa_ddd_tel2'] = $dados_post['empresa_ddd_tel2'];
            $data['empresa_cep'] = $dados_post['empresa_cep'];
            $data['empresa_logradouro'] = $dados_post['empresa_logradouro'];
            $data['empresa_numero'] = $dados_post['empresa_numero'];
            $data['empresa_complemento'] = $dados_post['empresa_complemento'];
            $data['empresa_bairro'] = $dados_post['empresa_bairro'];
            $data['empresa_cidade'] = $dados_post['empresa_cidade'];
            $data['empresa_estado'] = $dados_post['empresa_estado'];

            return new PaybrasDadosEmpresa($data);
        } else {
            return null;
        }
    }

    private function dadosResponsavel($dados_post) {
        $data['responsavel_cep'] = $_POST['responsavel_cep'];
        $data['responsavel_logradouro'] = $_POST['responsavel_logradouro'];
        $data['responsavel_numero'] = $_POST['responsavel_numero'];
        $data['responsavel_complemento'] = $_POST['responsavel_complemento'];
        $data['responsavel_bairro'] = $_POST['responsavel_bairro'];
        $data['responsavel_cidade'] = $_POST['responsavel_cidade'];
        $data['responsavel_estado'] = $_POST['responsavel_estado'];
        $data['responsavel_name'] = $_POST['responsavel_name'];
        $data['responsavel_cpf'] = $_POST['responsavel_cpf'];
        $data['responsavel_datanasc'] = $_POST['responsavel_datanasc'];
        $data['responsavel_ddd_tel'] = $_POST['responsavel_ddd_tel'];
        $data['responsavel_telefone'] = $_POST['responsavel_telefone'];

        return new PaybrasDadosResponsavel($data);
    }
}

PaybrasCadastroLojista::main($_POST);

?>