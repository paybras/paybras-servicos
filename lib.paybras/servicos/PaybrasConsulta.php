<?php
require_once "../PaybrasBiblioteca.php";

class PaybrasConsultaConta {

    public static function main($tipo_consulta) {
        try {

            $dados['conexao'] = new PaybrasDadosConexao(PaybrasConfig::getURL($_POST['seller_element']));
            if($_POST['seller_element'] == 'seller_email'){
                $dados['email']=$_POST['seller_email'];
            }

            if($_POST['seller_element'] == 'seller_cnpj'){
                $dados['cnpj']=preg_replace("/[^a-zA-Z0-9\s]/", "", $_POST['seller_cnpj']);
            }

            if($_POST['seller_element'] == 'seller_site'){
                $dados['site']=$_POST['seller_site'];
            }

            if($_POST['seller_element'] == 'cep'){
                $dados['cep']=$_POST['cep'];
            }

            $consulta = new PaybrasConsulta($dados);
            echo $consulta->getConsulta();
            die;
            
        } catch (PaybrasExcecao $e) {
            die($e->getMessage());
        }
    }
}

PaybrasConsultaConta::main($_POST);


?>