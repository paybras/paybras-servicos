<?php 
require_once "../PaybrasBiblioteca.php";

class PaybrasConsultaConta {

    public static function main($dados_post) {
        try {

            $dados['token'] = $dados_post['token'];
            $dados['email'] = $dados_post['email'];
            $dados['conexao'] = new PaybrasDadosConexao(PaybrasConfig::getURL('consulta_contabancaria'));
            $consultaConta = new PaybrasConsultaContaBancaria($dados);

            return self::retornoConsultaConta($consultaConta->getConsultaContaBancaria());
            
        } catch (PaybrasExcecao $e) {
            die($e->getMessage());
        }
        
    }

    public static function retornoConsultaConta($retornoConsultaConta) {
        if(isset($retornoConsultaConta) && !empty($retornoConsultaConta)) {
            echo $retornoConsultaConta;
        } else {
            //Caso a transação não tenha sido enviada a API do Paybras
            echo "Erro no envio dos dados de cadastro de lojista";
        }
    }
}

PaybrasConsultaConta::main($_POST);

?>