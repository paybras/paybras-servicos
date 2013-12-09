jQuery(document).ready(
	function()
	{

    jQuery.validator.addMethod("verificaCNPJ", function(cnpj, element) {
     cnpj = jQuery.trim(cnpj);// retira espaços em branco
     // DEIXA APENAS OS NÚMEROS
     cnpj = cnpj.replace('/','');
     cnpj = cnpj.replace('.','');
     cnpj = cnpj.replace('.','');
     cnpj = cnpj.replace('-','');
   
     var numeros, digitos, soma, i, resultado, pos, tamanho, digitos_iguais;
     digitos_iguais = 1;
   
     if (cnpj.length < 14 && cnpj.length < 15){
        return false;
     }
     for (i = 0; i < cnpj.length - 1; i++){
        if (cnpj.charAt(i) != cnpj.charAt(i + 1)){
           digitos_iguais = 0;
           break;
        }
     }
   
     if (!digitos_iguais){
        tamanho = cnpj.length - 2
        numeros = cnpj.substring(0,tamanho);
        digitos = cnpj.substring(tamanho);
        soma = 0;
        pos = tamanho - 7;
   
        for (i = tamanho; i >= 1; i--){
           soma += numeros.charAt(tamanho - i) * pos--;
           if (pos < 2){
              pos = 9;
           }
        }
        resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
        if (resultado != digitos.charAt(0)){
           return false;
        }
        tamanho = tamanho + 1;
        numeros = cnpj.substring(0,tamanho);
        soma = 0;
        pos = tamanho - 7;
        for (i = tamanho; i >= 1; i--){
           soma += numeros.charAt(tamanho - i) * pos--;
           if (pos < 2){
              pos = 9;
           }
        }
        resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
        if (resultado != digitos.charAt(1)){
           return false;
        }
        return true;
     }else{
        return false;
     }
    }, "CNPJ inválido."); // Mensagem padrão


    //-----------------------------------------------------------------------------------//
    // Criação de Método de Validação de CPF para jquery validate -----------------------//
    //-----------------------------------------------------------------------------------//
    jQuery.validator.addMethod("verificaCPF", function(value, element) {
      	
      	return valida_cpf(value,element);
      	
    }, "CPF inválido."); // Mensagem padrão

    jQuery.validator.addMethod("validaCadastro", function(value, element) {
      validaCadastro(element.name);
      if(element.name == 'seller_cnpj'){
        if($("#validaCNPJ").val() == 'false'){
          $("#validaCNPJ").val('');
          return false;
        } else {
          return true;
        }
      }
      if(element.name == 'seller_email'){
        if($("#validaEmail").val() == 'false'){
          $("#validaEmail").val('');
          return false;
        } else {
          return true;
        }
      }
      if(element.name == 'seller_site'){
        if($("#validaSite").val() == 'false'){
          $("#validaSite").val('');
          return false;
        } else {
          return true;
        }
      }
      
    }, "Lojista já cadastrado."); // Mensagem padrão

    //-----------------------------------------------------------------------------------//
    // Método de Validação de Campo -----------------------------------------------------//
    //-----------------------------------------------------------------------------------//
    var validator = $('#formSeller').validate({
      rules: {
        seller_email: {
          required: true,
          email: true,
          validaCadastro: true
        },
        confirma_email: {
          equalTo: ".seller_email"
        },
        seller_tipolojista: {
          required:true
        },
        seller_name: {
          required: true
        },
        seller_razaosocial: {
          required: '#empresa:checked'
        },
        seller_cnpj: {
          required: '#empresa:checked',
          verificaCNPJ: true,
          validaCadastro: true
        },
        seller_telefone: {
          required: '#empresa:checked'
        },
        seller_cep: {
          required: '#empresa:checked'
        },
        seller_logradouro: {
          required: '#empresa:checked'
        },
        seller_numero: {
          required: '#empresa:checked'
        },
        seller_bairro: {
          required: '#empresa:checked'
        },
        seller_cidade: {
          required: '#empresa:checked'
        },
        seller_estado: {
          required: '#empresa:checked'
        },
        seller_site: {
          required: true,
          url: true,
          validaCadastro: true
        },
        seller_tipo: {
          required: true
        },
        seller_softdescriptor: {
          required: true
        },
        responsavel_name: {
          required: true
        },
        responsavel_datanasc: {
          required: true
        },
        responsavel_telefone: {
          required: true
        },
        responsavel_cpf: {
          required: true,
          verificaCPF: true
        },
        responsavel_cep: {
          required: true
        },
        responsavel_logradouro: {
          required: true
        },
        responsavel_numero: {
          required: true
        },
        responsavel_bairro: {
          required: true
        },
        responsavel_cidade: {
          required: true
        },
        responsavel_estado: {
          required: true
        },
        seller_usuario: {
          required: true
        },
        seller_pass: {
          required: true
        },
        seller_pass_2: {
          equalTo: "#seller_pass"
        },
        contrato: {
          required: true
        }
      },
      highlight: function(element) {
        $(element).closest('.control-group').addClass('error');
        $('#'+element.name).after($('label.error[for='+element.name+']'));
      },
      unhighlight: function(element) {
        $(element).closest('.control-group').removeClass('error');
        $('label.error[for='+element.name+']').remove();
      },
      success: function(element) {
        $(element).closest('.control-group').removeClass('error');
        $('label.error[for='+element.name+']').remove();
      }
    });

    //-----------------------------------------------------------------------------------//
    // MÁSCARAS -------------------------------------------------------------------------//
    //-----------------------------------------------------------------------------------//

    //Máscara para Campos de Data
    $(".data").mask("99/99/9999");

    //Máscara para Campos Telefone
    $('.phone').mask("9999-9999?9");
    //Máscara para Campos Telefone
    $('.phone_ddd').mask("(99)9999-9999?9");

    //Máscara para Campos de CPF
    $(".cpf").mask("999.999.999-99");

    //Máscara para Campos de CEP
    $(".cep").mask("99999-999");

    //Máscara para Campos de CNPJ
    $(".cnpj").mask("99.999.999/9999-99");

    //Número de Rua.
    $(".numero").mask("999999");

    //Máscara para validação de campos de DDD
    $(".ddd").mask("99");

    $(".sellersoftdescriptor").mask("*?************",{placeholder:" "});

    //Ativa Popover.
    $("#pop").popover();

    //Medidor de força de senha
    $('#seller_pass').pstrength();

    $('.submit').on('click', function(evt) {
      if (!(validator.form())){
        validator.showErrors();
        validator.focusInvalid();
        return false;
      }
    });

    var inputTel = 1;
    $('.InputTel').on('click', function() {
      if(inputTel <= 7){
        var html = "<div style='width: 200px'> <input value='' name='seller_ddd_atendimentotel"+inputTel+"' class='ddd' type='text' style='float: left; width:20px;' /> <input value='' name='seller_atendimentotel" +inputTel+ "' class='phone' type='text' style='margin-left: 5px; width:130px;' /> </div>";
        $('#telAtendimento').append(html);
        $('.phone').mask("9999-999?9");
        $(".ddd").mask("99");
        $('#numeroTels').val(inputTel);
        inputTel++;
      }
    });

    $('.seller_email').change( function() {
      $('#seller_usuario').val($('.seller_email').val());
    });

    $('#transparente').on('click', function() {
      $('td').removeClass('selected');
      $('a').removeClass('selected');
      $('#transparente').addClass('selected');
    });

    $('#web').on('click', function() {
      $('td').removeClass('selected');
      $('a').removeClass('selected');
      $('#web').addClass('selected');
    });

    $('#empresa').on('click', function(){

      $('.empresa').show();
      $('.comum').show();
      $('#resp_title').html('Dados do Proprietário Sócio da Empresa');
      $('#endresp_title').html('Endereço do Proprietário');
      $('#pop').removeClass('pop_fisica');
      $('#pop').addClass('pop_empresa');
    });

    $('#fisica').on('click', function(){
      $('.comum').show();
      $('.empresa').hide();
      $('#resp_title').html('Dados do Titular Responsável');
      $('#endresp_title').html('Endereço do Titular');
      $('#pop').removeClass('pop_empresa');
      $('#pop').addClass('pop_fisica');
    });

    $('.seller_email').on('focus', function() {
      $(".seller_email").popover({
        'trigger': 'manual',
        'title': $('.seller_email').attr('reltitle'),
        'content': $('.seller_email').attr('relcont'),
      }).popover('show');
    });

    $('.seller_email').on('blur', function() {
      $('.seller_email').popover('hide');
    });

    $('.seller_cep').on('focus', function() {
      $(".seller_cep").popover({
        'trigger': 'manual',
        'placement': 'top',
        'title': $('.seller_cep').attr('reltitle'),
        'content': $('.seller_cep').attr('relcont'),
      }).popover('show');
    });

    $('.seller_cep').on('blur', function() {
      $('.seller_cep').popover('hide');
    });

    $('.responsavel_cep').on('focus', function() {
      $(".responsavel_cep").popover({
        'trigger': 'manual',
        'placement': 'top',
        'title': $('.responsavel_cep').attr('reltitle'),
        'content': $('.responsavel_cep').attr('relcont'),
      }).popover('show');
    });

    $('.responsavel_cep').on('blur', function() {
      $('.responsavel_cep').popover('hide');
    });

    $('.seller_site').on('focus', function() {
      $(".seller_site").popover({
        'trigger': 'manual',
        'title': $('.seller_site').attr('reltitle'),
        'content': $('.seller_site').attr('relcont'),
      }).popover('show');
    });

    $('.seller_site').on('blur', function() {
      $('.seller_site').popover('hide');
    });

    $('.sellersoftdescriptor').on('focus', function() {
      $(".sellersoftdescriptor").popover({
        'trigger': 'manual',
        'title': $('.sellersoftdescriptor').attr('reltitle'),
        'content': $('.sellersoftdescriptor').attr('relcont'),
      }).popover('show');
    });

    $('.sellersoftdescriptor').on('blur', function() {
      $('.sellersoftdescriptor').popover('hide');
    });

    $('.seller_name').on('focus', function() {
      $(".seller_name").popover({
        'trigger': 'manual',
        'title': $('.seller_name').attr('reltitle'),
        'content': $('.seller_name').attr('relcont'),
      }).popover('show');
    });

    $('.seller_name').on('blur', function() {
      $('.seller_name').popover('hide');
    });

    $('.seller_pass').on('focus', function() {
      $(".seller_pass").popover({
        'trigger': 'manual',
        'placement': 'top',
        'title': $('.seller_pass').attr('reltitle'),
        'content': $('.seller_pass').attr('relcont'),
      }).popover('show');
    });

    $('.seller_pass').on('blur', function() {
      $('.seller_pass').popover('hide');
    });

    function validaCadastro(element){
      var address = "lib.paybras/servicos/PaybrasConsulta.php";
      $.ajax({
        url: address,
        crossDomain:true,
        type: "POST",
        dataType: "json", 
        data: {
          seller_email: $(".seller_email").val(),
          seller_cnpj: $("#seller_cnpj").val(),
          seller_site: $("#seller_site").val(),
          seller_element: element
        },
        success: function(data) {

          if(data.sucesso == 0){
            if(data.tipo == 'cnpj')
              $("#validaCNPJ").val('false');
            if(data.tipo == 'email')
              $("#validaEmail").val('false');
            if(data.tipo == 'site')
              $("#validaSite").val('false');
            if(data.tipo == 'dados'){
              //Dados Estados
              var htmlEst = "";
              for(i=0; i<=data['estados'].length-1;i++){
                htmlEst += "<option value=" + data['estados'][i]['id'] + ">" + data['estados'][i]['uf'] + "</option>"
              }
              $('#cep_resp_estado').append(htmlEst);
              $('#cep_sel_estado').append(htmlEst);
              //$('#sistema').append(htmlSis);
              //$('#categoria').append(htmlCat);
            }
          }
        }
      });
    }
  });

  //-----------------------------------------------------------------------------------//
  // Traduções para Plugin de Validação JQuery ----------------------------------------//
  //-----------------------------------------------------------------------------------//

  jQuery.extend(jQuery.validator.messages, {
    required: "Campo Obrigat&oacute;rio.",
    remote: "Por favor, corrija este campo.",
    email: "E-mail Inv&aacute;lido",
    url: "URL inv&aacute;lida.",
    date: "Data inv&aacute;lida.",
    dateISO: "Por favor, forne&ccedil;a uma data v&aacute;lida (ISO).",
    number: "Por favor, forne&ccedil;a um n&uacute;mero v&aacute;lido.",
    digits: "Por favor, forne&ccedil;a somente d&iacute;gitos.",
    creditcard: "Por favor, forne&ccedil;a um cart&atilde;o de cr&eacute;dito v&aacute;lido.",
    equalTo: "Campos n&atilde;o conferem.",
    accept: "Por favor, forne&ccedil;a um valor com uma extens&atilde;o v&aacute;lida.",
    maxlength: jQuery.validator.format("M&aacute;ximo de {0} caracteres."),
    minlength: jQuery.validator.format("M&iacute;nimo de {0} caracteres."),
    rangelength: jQuery.validator.format("Por favor, forne&ccedil;a um valor entre {0} e {1} caracteres de comprimento."),
    range: jQuery.validator.format("Por favor, forne&ccedil;a um valor entre {0} e {1}."),
    max: jQuery.validator.format("Por favor, forne&ccedil;a um valor menor ou igual a {0}."),
    min: jQuery.validator.format("Por favor, forne&ccedil;a um valor maior ou igual a {0}.")

    // Fim do Código com Jquery
    //-----------------------------------------------------------------------------------//
});

function CompletaCep(element){
  var address = "lib.paybras/servicos/PaybrasConsulta.php";
  $('#'+element+'_loader').show();
  $('.'+element+'_end').hide();
  $('#'+element+'_button').hide();
  $.ajax({   
    url: address,
    crossDomain:true,
    type: "POST",
    dataType: "json",
    data: {
      cep: $('.'+element).val(),
      seller_element: 'cep'
    },
    success: function(retorno){
        $('#'+element+'_endereco').val(retorno.endereco);
        $('#'+element+'_bairro').val(retorno.bairro);
        $('#'+element+'_cidade').val(retorno.cidade);
        $('#'+element+'_estado').val(retorno.uf);
        $("option[value*='"+retorno.uf+"']").attr('selected', 'selected');
        $('label.error[for='+element+']').remove();

        $('#'+element+'_loader').hide();
        $('.'+element+'_end').show();
        $('#'+element+'_button').show();
        $('#'+element+'_numero').focus();
    },
    error: function(retorno){
      $('#post_loader').hide();
    }
   });
}

function valida_cpf(value, element) {
	
	  var cpf = value.replace(/[^\d]+/g,'');
      if(cpf == '') return true;
      while(cpf.length < 11) cpf = "0"+ cpf;
      var expReg = /^0+$|^1+$|^2+$|^3+$|^4+$|^5+$|^6+$|^7+$|^8+$|^9+$/;
      var a = [];
      var b = new Number;
      var c = 11;
      for (i=0; i<11; i++){
        a[i] = cpf.charAt(i);
        if (i < 9) b += (a[i] * --c);
      }
      if ((x = b % 11) < 2) { a[9] = 0 } else { a[9] = 11-x }

      b = 0;
      c = 11;
      
      for (y=0; y<10; y++) b += (a[y] * c--);
      if ((x = b % 11) < 2) { a[10] = 0; } else { a[10] = 11-x; }
      if ((cpf.charAt(9) != a[9]) || (cpf.charAt(10) != a[10]) || cpf.match(expReg)) return false;
      return true;
	
}


// Fim do Código Javascript
//---------------------------------------------------------------------------------------//
