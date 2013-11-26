<html xmlns="http://www.w3.org/1999/xhtml"><head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<style>
    label{
        display: block;
        width: 300px;
    }

    #protected{
        display: none;
    }
</style>

<body>
<form method="post" target="_self" action="servicos/PaybrasCadastroLojista.php" style="width: 300px">

    <!-- Dados Loja -->
    <h3>Dados da Loja</h3>
    <label>Nome*</label><input type="text" name="seller_name" value="Sua loja" />
    <label>E-mail*</label><input type="text" name="seller_email" value="contato@sualoja.com.br" />
    <label>Site*</label><input type="text" name="seller_site" value="http://www.sualoja.com.br" />
    <label>Senha acesso paybras*</label><input type="password" name="seller_pass" value="123" />
    <label>Sistema</label><input type="text" name="seller_sistema" value="Opencart" />
    <label>Categoria</label><input type="text" name="seller_categoriaid" value="Informática" />
    <label>Soft Descriptor*</label><input type="text" name="seller_softdescriptor" value="sualoja" />
    <label>E-mail de Atendimento</label><input type="text" name="seller_atendimentoemail" value="" />
    <label>DDD do Tel de Atendimento</label><input type="text" name="seller_ddd_atendimentotel" value="" />
    <label>Telefone de Atendimento</label><input type="text" name="seller_atendimentotel" value="" />
    <label>DDD do Tel de Atendimento 1</label><input type="text" name="seller_ddd_atendimentotel1" value="" />
    <label>Telefone de Atendimento 1</label><input type="text" name="seller_atendimentotel1" value="" />
    <label>DDD do Tel de Atendimento 2</label><input type="text" name="seller_ddd_atendimentotel2" value="" />
    <label>Telefone de Atendimento 2</label><input type="text" name="seller_atendimentotel2" value="" />
    <label>DDD do Tel de Atendimento 3</label><input type="text" name="seller_ddd_atendimentotel3" value="" />
    <label>Telefone de Atendimento 3</label><input type="text" name="seller_atendimentotel3" value="" />
    <label>DDD do Tel de Atendimento 4</label><input type="text" name="seller_ddd_atendimentotel4" value="" />
    <label>Telefone de Atendimento 4</label><input type="text" name="seller_atendimentotel4" value="" />
    <label>DDD do Tel de Atendimento 5</label><input type="text" name="seller_ddd_atendimentotel5" value="" />
    <label>Telefone de Atendimento 5</label><input type="text" name="seller_atendimentotel5" value="" />
    <label>DDD do Tel de Atendimento 6</label><input type="text" name="seller_ddd_atendimentotel6" value="" />
    <label>Telefone de Atendimento 6</label><input type="text" name="seller_atendimentotel6" value="" />
    <label>DDD do Tel de Atendimento 7</label><input type="text" name="seller_ddd_atendimentotel7" value="" />
    <label>Telefone de Atendimento 7</label><input type="text" name="seller_atendimentotel7" value="" />
    <label>Tipo Lojista (E,P)</label><input type="text" name="seller_tipolojista" value="E" />

    <!-- Dados Empresa -->
    <h3>Dados Empresariais</h3>
    <small>Apenas para lojista tipo empresarial (E)</small>
    <label>CNPJ*</label><input type="text" name="empresa_cnpj" value="59.247.563/0001-21" />
    <label>Razão Social*</label><input type="text" name="empresa_razaosocial" value="Sua Loja Comércio Eletrônico LTDA" />
    <label>DDD*</label><input type="text" name="empresa_ddd_tel" value="27" />
    <label>Telefone*</label><input type="text" name="empresa_telefone" value="3006-2194" />
    <label>DDD 2</label><input type="text" name="empresa_ddd_tel2" value="" />
    <label>Telefone 2</label><input type="text" name="empresa_telefone2" value="" />
    <label>CEP*</label><input type="text" name="empresa_cep" value="29030-440" />
    <label>Logradouro*</label><input type="text" name="empresa_logradouro" value="Av. da sua empresa" />
    <label>Número</label><input type="text" name="empresa_numero" value="332" />
    <label>Complemento</label><input type="text" name="empresa_complemento" value="Sala 302" />
    <label>Bairro*</label><input type="text" name="empresa_bairro" value="Jardim da Penha" />
    <label>Cidade*</label><input type="text" name="empresa_cidade" value="Vitória" />
    <label>Estado*</label><input type="text" name="empresa_estado" value="ES" />

    <h3>Dados do Responsável</h3>
    <label>Nome*</label><input type="text" name="responsavel_name" value="Seu Nome" />
    <label>CPF*</label><input type="text" name="responsavel_cpf" value="564.387.921-28" />
    <label>Data de Nascimento</label><input type="text" name="responsavel_datanasc" value="20/12/1975" />
    <label>DDD*</label><input type="text" name="responsavel_ddd_tel" value="27" />
    <label>Telefone*</label><input type="text" name="responsavel_telefone" value="3026-4548" />
    <label>CEP*</label><input type="text" name="responsavel_cep" value="29090-320" />
    <label>Logradouro*</label><input type="text" name="responsavel_logradouro" value="Rua do responsável" />
    <label>Número</label><input type="text" name="responsavel_numero" value="132" />
    <label>Complemento</label><input type="text" name="responsavel_complemento" value="Apto 302" />
    <label>Bairro*</label><input type="text" name="responsavel_bairro" value="Jardim Camburi" />
    <label>Cidade*</label><input type="text" name="responsavel_cidade" value="Vitória" />
    <label>Estado*</label><input type="text" name="responsavel_estado" value="ES" />

    <button type="submit" style="margin-left: 200px; margin-bottom: 50px; margin-top: 50px; float: left; width: 200px; height: 50px; background-color: #ff0000; border: 2px solid white; color: white; font-size: 20px; font-weight: bold; box-shadow: 1px 1px #ccc; ">COMPRAR!</button>

</form>

</body>
</html>