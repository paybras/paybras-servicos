<?php 
require_once "../PaybrasBiblioteca.php";

class PaybrasCadastroConta {

    public static function main($dados_post) {
        try {

            $dados['token'] = $dados_post['token'];
            $dados['email'] = $dados_post['email'];
            $dados['conexao'] = new PaybrasDadosConexao(PaybrasConfig::getURL('cadastro_contabancaria'));
            $dados['conta'] = self::dadosContaBancaria($dados_post);
            $cadastroLojista = new PaybrasCadastraContaBancaria($dados);

            return self::retornoCadastroConta($cadastroLojista->getCadastroContaBancaria());
            
        } catch (PaybrasExcecao $e) {
            die($e->getMessage());
        }
        
    }

    public static function retornoCadastroConta($retornoCadastroConta) {
        if(isset($retornoCadastroConta) && !empty($retornoCadastroConta)) {
            echo $retornoCadastroConta;
        } else {
            //Caso a transação não tenha sido enviada a API do Paybras
            echo "Erro no envio dos dados de cadastro de lojista";
        }
    }

    private function dadosContaBancaria($dados_post) {
        $data['banco'] = $_POST['banco'];
        $data['agencia_codigo'] = $_POST['agencia_codigo'];
        $data['agencia_dv'] = $_POST['agencia_dv'];
        $data['conta_codigo'] = $_POST['conta_codigo'];
        $data['conta_dv'] = $_POST['conta_dv'];
        $data['tipo_conta'] = $_POST['tipo_conta'];

        return new PaybrasDadosContaBancaria($data);
    }
}

PaybrasCadastroConta::main($_POST);

?>