<?php
$estados = "AL,AP,AM,BA,CE,DF,ES,GO,MA,MT,MS,MG,PA,PB,PR,PE,PI,RJ,RN,RS,RO,RR,SC,SP,SE,TO";
$estados = explode(',', $estados);
$i=0;
foreach ($estados as $k => $v) {
    $arrEstados[$i]['id'] = utf8_encode($v);
    $arrEstados[$i]['uf'] = utf8_encode($v);
    $i++;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Paybras | Cadastro de Lojistas</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/jumbotron-narrow.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">
        <div class="header">
            <h3 class="text-muted">Cadastro de Lojistas</h3>
        </div>

        <div class="row marketing">
        <form method="post" target="_self" id='formSeller' action="lib.paybras/servicos/PaybrasCadastroLojista.php">
            <div class='span12'>
                <div class='subtitulo'><h4>Dados da Conta</h4></div>
                <div class="control-group span12" > 
                    <label>E-mail*:</label>
                    <?php if(isset($_POST['seller_email'])) { ?>
                        <p><?php echo $_POST['seller_email']; ?></p>
                        <input type="hidden" value='<?php echo $_POST['seller_email']; ?>' name="seller_email" >
                    <?php } else { ?>
                        <input value='' class='seller_email' name="seller_email" maxlength='255' type="text"  relcont='Este será o e-mail utilizado para receber pagamentos, acessar sua conta e receber notificações de transações e disputas.' reltitle='E-mail Principal'/>
                    <?php } ?>
                </div>

                <?php if(!isset($_POST['seller_email'])) { ?>
                    <div class="control-group span12" > 
                        <label>Confirme o E-mail:</label>
                        <input value='' id='confirma_email' name="confirma_email" maxlength='255' type="text" />
                    </div>
                <?php } ?>

                <div class="control-group span12" >
                    <label >Tipo de Conta:</label>
                    <label class="radio">
                        <input name="seller_tipolojista" type="radio" value="E" id='empresa'>
                        Conta Empresarial - <i>requer CNPJ (sem limite de operação)</i>
                    </label>
                    <label class="radio" id='seller_tipolojista'>
                        <input name="seller_tipolojista" type="radio" value="P" id='fisica'> 
                        Conta Pessoa Física - <i>requer CPF (limite de saque de R$ 40.000,00 mensal)</i>
                    </label>
                </div>
            </div>

            <div class='span6 divisor empresa' style='display:none;'>
                <div class='subtitulo'><h4>Dados Empresariais</h4></div>

                <div class="control-group span12" >
                    <label>CNPJ*:</label>
                    <?php if(isset($_POST['seller_cnpj'])) { ?>
                        <p><?php echo $_POST['seller_cnpj']; ?></p>
                        <input type="hidden" value='<?php echo $_POST['seller_cnpj']; ?>' name="seller_cnpj" >
                    <?php } else { ?>
                        <input value='' id='seller_cnpj' class='cnpj' name="seller_cnpj" type="text" />
                    <?php } ?>
                </div>

                <div class="control-group span12" >
                    <label>Razão Social*:</label>
                    <?php if(isset($_POST['seller_razaosocial'])) { ?>
                        <p><?php echo $_POST['seller_razaosocial']; ?></p>
                        <input type="hidden" value='<?php echo $_POST['seller_razaosocial']; ?>' name="seller_razaosocial" >
                    <?php } else { ?>
                        <input value='' name="seller_razaosocial" maxlength='250' type="text" />
                    <?php } ?>
                </div>

                <div class="control-group span12" >
                    <label>Telefone Comercial*:</label>
                    <?php if(isset($_POST['seller_ddd_tel']) && isset($_POST['seller_telefone'])) { ?>
                        <p>(<?php echo $_POST['seller_ddd_tel']; ?>) <?php echo $_POST['seller_telefone']; ?></p>
                        <input type="hidden" value='<?php echo $_POST['seller_ddd_tel']; ?>' name="seller_ddd_tel" >
                        <input type="hidden" value='<?php echo $_POST['seller_telefone']; ?>' name="seller_telefone" >
                    <?php } else { ?>
                        <input value='' name="seller_ddd_tel" class='ddd' type="text" style="float: left; width:20px;" />
                        <input value='' name="seller_telefone" class='phone' type="text" style="margin-left: 5px; width:130px;" />
                    <?php } ?>
                </div>

                <div class="control-group span12" >
                    <label>Telefone Comercial 2:</label>
                    <?php if(isset($_POST['seller_ddd_tel2']) && isset($_POST['seller_telefone2'])) { ?>
                        <p>(<?php echo $_POST['seller_ddd_tel2']; ?>) <?php echo $_POST['seller_telefone2']; ?></p>
                        <input type="hidden" value='<?php echo $_POST['seller_ddd_tel2']; ?>' name="seller_ddd_tel2" >
                        <input type="hidden" value='<?php echo $_POST['seller_telefone2']; ?>' name="seller_telefone2" >
                    <?php } else { ?>
                        <input value='' name="seller_ddd_tel2" class='ddd' type="text" style="float: left; width:20px;" />
                        <input value='' name="seller_telefone2" class='phone' type="text" style="margin-left: 5px; width:130px;" />
                    <?php } ?>
                </div>
            </div>

            <div class='span6 empresa' style='display:none;'>
                <div class='subtitulo'><h4>Endereço da Empresa</h4></div>

                <div class="<?php if(!isset($_POST['seller_cep'])) { ?>input-append<?php } else { ?>control-group<?php } ?> span2">
                    <label>CEP*:</label>
                    <?php if(isset($_POST['seller_cep'])) { ?>
                        <p><?php echo $_POST['seller_cep']; ?></p>
                        <input type="hidden" value='<?php echo $_POST['seller_cep']; ?>' name="seller_cep" >
                    <?php } else { ?>
                        <input value='' name="seller_cep" class='cep cep_sel seller_cep span2' type="text" relcont='Forneça o CEP do endereço comercial. O restante dos dados serão preenchidos automáticamente. Os campos em branco deverão ser completados.' reltitle='Endereço Comercial'/>
                        <button class="btn" type="button" onclick="CompletaCep('cep_sel')" >OK</button>
                        <img src='img/ajax_loader.gif' id='cep_sel_loader' style='display:none;'>
                    <?php } ?>
                </div>

                <div class="control-group span12 cep_sel_end" style='display:none;'>
                    <label>Endereço Comercial*:</label>
                    <?php if(isset($_POST['seller_logradouro'])) { ?>
                        <p><?php echo $_POST['seller_logradouro']; ?></p>
                        <input type="hidden" value='<?php echo $_POST['seller_logradouro']; ?>' name="seller_logradouro" >
                    <?php } else { ?>
                        <input value='' name="seller_logradouro" id='cep_sel_endereco' maxlength='300' type="text" style='width: 295px;'/>
                    <?php } ?>
                </div>

                <div class="control-group span2 cep_sel_end" style="width: 120px; display:none;">
                    <label style='width: 50px'>Número*:</label>
                    <?php if(isset($_POST['seller_numero'])) { ?>
                        <p><?php echo $_POST['seller_numero']; ?></p>
                        <input type="hidden" value='<?php echo $_POST['seller_numero']; ?>' name="seller_numero" >
                    <?php } else { ?>
                        <input value='' name="seller_numero" id='cep_sel_numero' type="text" style='margin-right: 10px; width: 70px;'/>
                    <?php } ?>
                </div>

                <div class="control-group span4 cep_sel_end" style='display:none;'>
                    <label>Complemento:</label>
                    <?php if(isset($_POST['seller_complemento'])) { ?>
                        <p><?php echo $_POST['seller_complemento']; ?></p>
                        <input type="hidden" value='<?php echo $_POST['seller_complemento']; ?>' name="seller_complemento" >
                    <?php } else { ?>
                        <input value='' name="seller_complemento" id='cep_sel_complemento' maxlength='250' type="text" style='width: 200px;'/>
                    <?php } ?>
                </div>

                <div class="control-group span12 cep_sel_end" style='display:none;'>
                    <label>Bairro*:</label>
                    <?php if(isset($_POST['seller_bairro'])) { ?>
                        <p><?php echo $_POST['seller_bairro']; ?></p>
                        <input type="hidden" value='<?php echo $_POST['seller_bairro']; ?>' name="seller_bairro" >
                    <?php } else { ?>
                        <input value='' name="seller_bairro" id='cep_sel_bairro' maxlength='200' type="text"/>
                    <?php } ?>
                </div>

                <div class="control-group span3 cep_sel_end" style='display:none;'>
                    <label style='width: 190px'>Cidade*:</label>
                    <?php if(isset($_POST['seller_cidade'])) { ?>
                        <p><?php echo $_POST['seller_cidade']; ?></p>
                        <input type="hidden" value='<?php echo $_POST['seller_cidade']; ?>' name="seller_cidade" >
                    <?php } else { ?>
                        <input value='' name="seller_cidade" id='cep_sel_cidade' maxlength='200' type="text" style='margin-right: 5px; width: 175px'/>
                    <?php } ?>
                </div>

                <div class="control-group span3 cep_sel_end" style='float: left;display:none;'>
                    <label>Estado*:</label>
                    <?php if(isset($_POST['seller_estado'])) { ?>
                        <p><?php echo $_POST['seller_estado']; ?></p>
                        <input type="hidden" value='<?php echo $_POST['seller_estado']; ?>' name="seller_estado" >
                    <?php } else { ?>
                        <select class="select2-input select2-focused" name="seller_estado" id='cep_sel_estado' style="width: 70px;">
                            <?php foreach ($arrEstados as $key => $value) { ?>
                                <option value='<?php echo $value['id']; ?>'><?php echo $value['uf']; ?></option>
                            <?php } ?>
                        </select>
                    <?php } ?>
                </div>
            </div>

            <div class='span6 divisor comum' style='display:none;'>
                <div class='subtitulo'><h4 id='resp_title'></h4></div>

                <div class="control-group span12">
                    <label>Nome Completo*:</label>
                    <?php if(isset($_POST['responsavel_name'])) { ?>
                        <p><?php echo $_POST['responsavel_name']; ?></p>
                        <input type="hidden" value='<?php echo $_POST['responsavel_name']; ?>' name="responsavel_name" >
                    <?php } else { ?>
                        <input value='' name="responsavel_name" maxlength='250' type="text" />
                    <?php } ?>
                </div>

                <div class="control-group span12">
                    <label style='width: 140px;'>CPF*:</label>
                    <?php if(isset($_POST['responsavel_cpf'])) { ?>
                        <p><?php echo $_POST['responsavel_cpf']; ?></p>
                        <input type="hidden" value='<?php echo $_POST['responsavel_cpf']; ?>' name="responsavel_cpf" >
                    <?php } else { ?>
                        <input value='' name="responsavel_cpf" class='cpf' type="text" style='width: 150px;'/>
                    <?php } ?>
                </div>

                <div class="control-group span12">
                    <label style='width: 150px;'>Data de Nascimento*:</label>
                    <?php if(isset($_POST['responsavel_datanasc'])) { ?>
                        <p><?php echo $_POST['responsavel_datanasc']; ?></p>
                        <input type="hidden" value='<?php echo $_POST['responsavel_datanasc']; ?>' name="responsavel_datanasc" >
                    <?php } else { ?>
                        <input value='' name="responsavel_datanasc" class='data' type="text" style='width: 110px;'/>
                    <?php } ?>
                </div>

                <div class="control-group span12" >
                    <label>Telefone Pessoal*:</label>
                    <?php if(isset($_POST['responsavel_ddd_tel']) && isset($_POST['responsavel_telefone'])) { ?>
                        <p>(<?php echo $_POST['responsavel_ddd_tel']; ?>) <?php echo $_POST['responsavel_telefone']; ?></p>
                        <input type="hidden" value='<?php echo $_POST['responsavel_ddd_tel']; ?>' name="responsavel_ddd_tel" >
                        <input type="hidden" value='<?php echo $_POST['responsavel_telefone']; ?>' name="responsavel_telefone" >
                    <?php } else { ?>
                        <input value='' name="responsavel_ddd_tel" class='ddd' type="text" style="float: left; width:20px;" />
                        <input value='' name="responsavel_telefone" class='phone' type="text" style="margin-left: 5px; width:130px;" />
                    <?php } ?>
                </div>
            </div>

            <div class='span6 comum' style='display:none;'>
                <div class='subtitulo'>
                    <h4><span id='endresp_title'></span>
                    <a id='pop' rel="popover" data-html="true" data-title='Endereço do Proprietário' data-content="
                    <html>
                    <div class='font_pop'>
                    <p>Estes dados não serão exibidos ao seu cliente, são para fins de confirmação cadastral, por isso preencha corretamente o endereço residencial do titular responsável da conta.</p>
                    </div>
                    </html>">
                    <i class='icon-info-sign'></i></a></h4>
                </div>

                <div class="<?php if(!isset($_POST['responsavel_cep'])) { ?>input-append<?php } else { ?>control-group<?php } ?> span2">
                    <label>CEP*:</label>
                    <?php if(isset($_POST['responsavel_cep'])) { ?>
                        <p><?php echo $_POST['responsavel_cep']; ?></p>
                        <input type="hidden" value='<?php echo $_POST['responsavel_cep']; ?>' name="responsavel_cep" >
                    <?php } else { ?>
                        <input value='' name="responsavel_cep" class='cep cep_resp responsavel_cep span2' type="text" relcont='Forneça o CEP do endereço residencial. O restante dos dados serão preenchidos automáticamente. Os campos em branco deverão ser completados.' reltitle='Endereço Residencial'/>
                        <button class="btn" type="button" onclick="CompletaCep('cep_resp')" >OK</button>
                        <img src='img/ajax_loader.gif' id='cep_resp_loader' style='display:none;'>
                    <?php } ?>
                </div>

                <div class="control-group span12 cep_resp_end" style='display:none;'>
                    <label>Endereco*:</label>
                    <?php if(isset($_POST['responsavel_logradouro'])) { ?>
                        <p><?php echo $_POST['responsavel_logradouro']; ?></p>
                        <input type="hidden" value='<?php echo $_POST['responsavel_logradouro']; ?>' name="responsavel_logradouro" >
                    <?php } else { ?>
                        <input value='' name="responsavel_logradouro" id='cep_resp_endereco' maxlength='300' type="text" style='width: 310px;'/>
                    <?php } ?>
                </div>

                <div class="control-group span2 cep_resp_end" style='float: left;display:none;'>
                    <label style='width: 50px'>Número*:</label>
                    <?php if(isset($_POST['responsavel_numero'])) { ?>
                        <p><?php echo $_POST['responsavel_numero']; ?></p>
                        <input type="hidden" value='<?php echo $_POST['responsavel_numero']; ?>' name="responsavel_numero" >
                    <?php } else { ?>
                        <input value='' name="responsavel_numero" id='cep_resp_numero' type="text" style='margin-right: 10px; width: 70px;'/>
                    <?php } ?>
                </div>

                <div class="control-group span4 cep_resp_end" style='float: left; margin-bottom: 10px;display:none;'>
                    <label>Complemento:</label>
                    <?php if(isset($_POST['responsavel_complemento'])) { ?>
                        <p><?php echo $_POST['responsavel_complemento']; ?></p>
                        <input type="hidden" value='<?php echo $_POST['responsavel_complemento']; ?>' name="responsavel_complemento" >
                    <?php } else { ?>
                        <input value='' name="responsavel_complemento" id='cep_resp_complemento' maxlength='250' type="text"/>
                    <?php } ?>
                </div>

                <div class="control-group span12 cep_resp_end" style='display:none;'>
                    <label>Bairro*:</label>
                    <?php if(isset($_POST['responsavel_bairro'])) { ?>
                        <p><?php echo $_POST['responsavel_bairro']; ?></p>
                        <input type="hidden" value='<?php echo $_POST['responsavel_bairro']; ?>' name="responsavel_bairro" >
                    <?php } else { ?>
                        <input value='' name="responsavel_bairro" id='cep_resp_bairro' maxlength='200' type="text"/>
                    <?php } ?>
                </div>

                <div class="control-group span3 cep_resp_end" style='float: left;display:none;'>
                    <label style='width: 190px'>Cidade*:</label>
                    <?php if(isset($_POST['responsavel_cidade'])) { ?>
                        <p><?php echo $_POST['responsavel_cidade']; ?></p>
                        <input type="hidden" value='<?php echo $_POST['responsavel_cidade']; ?>' name="responsavel_cidade" >
                    <?php } else { ?>
                        <input value='' name="responsavel_cidade" id='cep_resp_cidade' maxlength='200' type="text" style='margin-right: 5px; width: 175px'/>
                    <?php } ?>
                </div>

                <div class="control-group span3 cep_resp_end" style='float: left;display:none;'>
                    <label>Estado*:</label>
                    <?php if(isset($_POST['responsavel_estado'])) { ?>
                        <p><?php echo $_POST['responsavel_estado']; ?></p>
                        <input type="hidden" value='<?php echo $_POST['responsavel_estado']; ?>' name="responsavel_estado" >
                    <?php } else { ?>
                        <select class="select2-input select2-focused" name="responsavel_estado" id='cep_resp_estado' style="width: 70px;">
                            <?php foreach ($arrEstados as $key => $value) { ?>
                                <option value='<?php echo $value['id']; ?>'><?php echo $value['uf']; ?></option>
                            <?php } ?>
                        </select>
                    <?php } ?>
                </div>
            </div>

            <div class='span12 comum' style='display:none;'>

                <div class='subtitulo'><h4>Senhas e Segurança</h4></div>

                <div class="control-group span8" id='usuario'>
                    <label>Email de Acesso:</label>
                    <?php if(isset($_POST['seller_email'])) { ?>
                        <input value='<?php echo $_POST['seller_email']; ?>' name='seller_usuario' id='seller_usuario' readonly type="text"/>
                    <?php } else { ?>
                        <input value='' name='seller_usuario' id='seller_usuario' readonly type="text"/>
                    <?php } ?>
                </div>

                <div class="control-group span4">
                    <label>Senha*:</label>
                    <input value='' id="seller_pass" name="seller_pass" class='seller_pass' maxlength='10' type="password" relcont='Para sua segurança, a senha deve possuir entre 5 e 8 caracteres, associando caracteres alfanumérico' reltitle='Senha'/>
                </div>

                <div class="control-group span4">
                    <label>Repita a Senha*:</label>
                    <input value='' name="seller_pass_2" maxlength='10' type="password" />
                </div>

                <div class="control-group checkbox span12">
                    <label id='contrato'>
                        <input value='' name="contrato" type="checkbox" /> <a target='_blank' href='files/contrato_paybras.pdf'>Li e aceito os termos de contrato</a>
                    </label>
                </div>

                <div class="control-group">
                    <div id="pstrength"></div>
                </div>

                <div style='display:none;'>
                    <input value='' name="validaEmail" id="validaEmail" type="text"/>
                    <input value='' name="validaCNPJ" id="validaCNPJ" type="text"/>
                    <input value='' name="validaSite" id="validaSite" type="text"/>
                </div>
            </div>

            <div class='span12'>
                <ul class="pager">
                    <li><button type="submit" class="btn btn-primary submit">Finalizar Cadastro</button></li>
                    <li><img id='post_loader' style='display:none;' src='img/ajax_loader.gif'></li>
                </ul>
            </div>
        </form>
        </div>

        <div class="footer">
            <p>&copy; Company 2013</p>
        </div>
    </div> <!-- /container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery.ui.widget.js"></script>
    <script type="text/javascript" src="js/jquery.maskedinput.js"></script>
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="js/pstrength.js"></script>

    <!-- Bootstrap -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/tooltip.js"></script>
    <script type="text/javascript" src="js/popover.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>

    <?php if(isset($_POST['seller_cep'])) { ?>
        <script type="text/javascript">$(".cep_sel_end").show();</script>
    <?php } ?>
    <?php if(isset($_POST['responsavel_cep'])) { ?>
        <script type="text/javascript">$(".cep_resp_end").show();</script>
    <?php } ?>

</body>
</html>

<body>