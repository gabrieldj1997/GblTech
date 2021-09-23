<?php
//Carregar a classe da API
use SdkApiSerpro\SerproApi;

//Intancializar a classe com a URL base e a chave da API
$serpro = new SerproApi('http://api.portaldatransparencia.gov.br/api-de-dados', "ee62f3ebb1156b63a3fe831a8a4cbbba");

//Metodo de consulta da bolsa familia por CPF ou NIS
//Params = 1-AnoMesCompetencia; 2-AnoMesReferencia; 3-CPF ou NIS; 4-Pagina
$result = $serpro->consultarBolsaCpfNis("202006","202003","01942057113","1");


//Metodo de consulta da bolsa familia por municipio
//Params = 1-CodigoIbge; 2-mesAno; 3-pagina
$result = $serpro->consultarBolsaMunicipio("5300108","202005","1");

//Metodo de consulta das parcelas sacadas da bolsa familia por NIS
//Params = 1-AnoMesCompetencia; 2-AnoMesReferencia; 3-NIS; 4-Pagina
$result = $serpro->consultarBolsaCpfNis("202005","202005","0000000000","1");

//Metodo de consulta de benifeciario do auxilio por municipio
//Params = 1-codigoIbge; 2-mesAno; 3-pagina
$result = $serpro->consultarAuxilioBeneficiarioMunicipio("5300108", "202005","1");

//Metodo de consulta de benifeciario do auxilio por NIS
//Params = 1-CpfNisBenifeciario; 2-CpfNisResponsavelFamiliar; 3-pagina
$result = $serpro->consultarAuxilioCpfNis("00000", "00000000","1");

//Metodo de consulta dos dados do auxilio por municipio
//Params = 1-codigoIbge; 2-mesAno; 3-pagina
$result = $serpro->consultarAuxilioMunicipio("5300108", "202005","1");