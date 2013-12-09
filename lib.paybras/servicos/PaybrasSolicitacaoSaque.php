<?php 
require_once "../PaybrasBiblioteca.php";

class PaybrasSolicitacaoSaque {

    public static function main($dados_post) {
        try {

            $dados['token'] = $dados_post['token'];
            $dados['email'] = $dados_post['email'];
            $dados['conexao'] = new PaybrasDadosConexao(PaybrasConfig::getURL('solicitacao_saque'));
            $dados['saque'] = self::dadosSolicitacaoSaque($dados_post);

            $solicitacaoSaque = new PaybrasEnviaSolicitacaoSaque($dados);

            return self::retornoSolicitacaoSaque($solicitacaoSaque->getSolicitacaoSaque());
            
        } catch (PaybrasExcecao $e) {
            die($e->getMessage());
        }
        
    }

    public static function retornoSolicitacaoSaque($retornoSolicitacaoSaque) {
        if(isset($retornoSolicitacaoSaque) && !empty($retornoSolicitacaoSaque)) {
            echo $retornoSolicitacaoSaque;
        } else {
            //Caso a transação não tenha sido enviada a API do Paybras
            echo "Erro no envio dos dados de cadastro de lojista";
        }
    }

    private function dadosSolicitacaoSaque($dados_post) {
        $data['id_conta_bancaria'] = $dados_post['id_conta_bancaria'];
        $data['valor_saque'] = $dados_post['valor_saque'];

        return new PaybrasDadosSolicitacaoSaque($data);
    }
}

PaybrasSolicitacaoSaque::main($_POST);

?>