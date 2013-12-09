<?php 
require_once "../PaybrasBiblioteca.php";

class PaybrasConsultaSaldo {

    public static function main($dados_post) {
        try {

            $dados['token'] = $dados_post['token'];
            $dados['email'] = $dados_post['email'];
            $dados['conexao'] = new PaybrasDadosConexao(PaybrasConfig::getURL('consulta_saldo'));
            $consultaSaldo = new PaybrasEnviaConsultaSaldo($dados);

            return self::retornoConsultaSaldo($consultaSaldo->getConsultaSaldo());
            
        } catch (PaybrasExcecao $e) {
            die($e->getMessage());
        }
        
    }

    public static function retornoConsultaSaldo($retornoConsultaSaldo) {
        if(isset($retornoConsultaSaldo) && !empty($retornoConsultaSaldo)) {
            echo $retornoConsultaSaldo;
        } else {
            //Caso a transação não tenha sido enviada a API do Paybras
            echo "Erro no envio dos dados de cadastro de lojista";
        }
    }
}

PaybrasConsultaSaldo::main($_POST);

?>