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
<form method="post" target="_self" action="servicos/PaybrasCadastroContaBancaria.php" style="width: 300px">
    <label>E-mail Lojista*</label><input type="text" name="email" value="contato@sualoja.com.br" />
    <label>Token Lojista*</label><input type="text" name="token" value="CD17D0CC-F509-4C72-B3FA-5CC63F954C11" />
    <label>Banco*</label><input type="text" name="banco" value="001" />
    <label>Agência*</label><input type="text" name="agencia_codigo" value="3364" />
    <label>DV Agência</label><input type="text" name="agencia_dv" value="8" />
    <label>Conta*</label><input type="text" name="conta_codigo" value="15526" />
    <label>DV Conta*</label><input type="text" name="conta_dv" value="9" />
    <label>Tipo Conta* (C,P)</label><input type="text" name="tipo_conta" value="C" />
    <button type="submit" style="margin-left: 200px; margin-bottom: 50px; margin-top: 50px; float: left; width: 200px; height: 50px; background-color: #ff0000; border: 2px solid white; color: white; font-size: 20px; font-weight: bold; box-shadow: 1px 1px #ccc; ">COMPRAR!</button>

</form>

</body>
</html>