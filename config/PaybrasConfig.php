<?php
/*
***********************************
 Arquivo de Configuração - PAYBRAS
***********************************
*/

$PaybrasConfig = array();

$PaybrasConfig['ambiente'] = Array();

//Serviço cadastro de lojistas para ambiente de produção
$PaybrasConfig['ambiente']['cadastro_lojista']['producao'] = "https://service.paybras.com/core/Sellers/cadastraSeller";
//Serviço de cadastro de lojistas para ambiente de sandbox
$PaybrasConfig['ambiente']['cadastro_lojista']['sandbox'] = "https://sandbox.paybras.com/core/Sellers/cadastraSeller";
//Serviço de cadastro de lojistas para ambiente local - apenas para desenvolvedores paybras
$PaybrasConfig['ambiente']['cadastro_lojista']['local'] = "http://localhost/paybras/core/Sellers/cadastraSeller";

//Serviço cadastro de conta bancária para ambiente de produção
$PaybrasConfig['ambiente']['cadastro_contabancaria']['producao'] = "https://service.paybras.com/core/Sellers/cadastraContaBancaria";
//Serviço de cadastro de conta bancária para ambiente de sandbox
$PaybrasConfig['ambiente']['cadastro_contabancaria']['sandbox'] = "https://sandbox.paybras.com/core/Sellers/cadastraContaBancaria";
//Serviço de cadastro de conta bancária para ambiente local - apenas para desenvolvedores paybras
$PaybrasConfig['ambiente']['cadastro_contabancaria']['local'] = "http://localhost/paybras/core/Sellers/cadastraContaBancaria";

//Serviço consulta de conta bancária para ambiente de produção
$PaybrasConfig['ambiente']['consulta_contabancaria']['producao'] = "https://service.paybras.com/core/Sellers/consultaContaBancaria";
//Serviço de consulta de conta bancária para ambiente de sandbox
$PaybrasConfig['ambiente']['consulta_contabancaria']['sandbox'] = "https://sandbox.paybras.com/core/Sellers/consultaContaBancaria";
//Serviço de consulta de conta bancária para ambiente local - apenas para desenvolvedores paybras
$PaybrasConfig['ambiente']['consulta_contabancaria']['local'] = "http://localhost/paybras/core/Sellers/consultaContaBancaria";

//Serviço solicitação de saque para ambiente de produção
$PaybrasConfig['ambiente']['solicitacao_saque']['producao'] = "https://service.paybras.com/core/Sellers/enviaSolicitacaoSaque";
//Serviço solicitação de saque para ambiente de sandbox
$PaybrasConfig['ambiente']['solicitacao_saque']['sandbox'] = "https://sandbox.paybras.com/core/Sellers/enviaSolicitacaoSaque";
//Serviço solicitação de saque para ambiente local - apenas para desenvolvedores paybras
$PaybrasConfig['ambiente']['solicitacao_saque']['local'] = "http://localhost/paybras/core/Sellers/enviaSolicitacaoSaque";

//Serviço consulta saldo para ambiente de produção
$PaybrasConfig['ambiente']['consulta_saldo']['producao'] = "https://service.paybras.com/core/Sellers/consultaSaldo";
//Serviço consulta saldo para ambiente de sandbox
$PaybrasConfig['ambiente']['consulta_saldo']['sandbox'] = "https://sandbox.paybras.com/core/Sellers/consultaSaldo";
//Serviço consulta saldo para ambiente local - apenas para desenvolvedores paybras
$PaybrasConfig['ambiente']['consulta_saldo']['local'] = "http://localhost/paybras/core/Sellers/consultaSaldo";

$PaybrasConfig['lojista'] = Array();

//Ambiente que se deseja utilizar:
// - sandbox: ambiente de teste; 
// - producao: ambiente de produção; 
// - local: ambiente local (apenas para desenvolvedores paybras)
$PaybrasConfig['lojista']['ambiente'] = "local";


?>