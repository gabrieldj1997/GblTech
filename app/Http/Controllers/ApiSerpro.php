<?php

namespace App\Http\Controllers;

use SdkApiSerpro\SerproApi;

class ApiSerpro extends Controller
{
     //BolsaFamilia
     function consultarBolsaMunicipio($codigoIbge, $mesAno, $pagina){
        $apiSerpro = new SerproApi($_SESSION['apiSerpro']['url'], $_SESSION['apiSerpro']['chave']);
        $result = $apiSerpro->consultarBolsaMunicipio($codigoIbge, $mesAno, $pagina);
        return $result;
    }

    function consultarBolsaCpfNis($anoMesCompetencia, $anoMesReferencia, $codigo, $pagina){
        $apiSerpro = new SerproApi($_SESSION['apiSerpro']['url'], $_SESSION['apiSerpro']['chave']);
        $result = $apiSerpro->consultarBolsaCpfNis($anoMesCompetencia, $anoMesReferencia, $codigo, $pagina);
        return $result;
    }

    function consultarBolsaSaqueNis($anoMesCompetencia, $anoMesRefencia, $codigo, $pagina){
        $apiSerpro = new SerproApi($_SESSION['apiSerpro']['url'], $_SESSION['apiSerpro']['chave']);
        $result = $apiSerpro->consultarBolsaParcelaSacadaNis($anoMesCompetencia, $anoMesRefencia, $codigo, $pagina);
        return $result;
    }

    //Auxilo
    function consultarAuxilioMunicipio($codigoIbge, $mesAno, $pagina){
        $apiSerpro = new SerproApi($_SESSION['apiSerpro']['url'], $_SESSION['apiSerpro']['chave']);
        $result = $apiSerpro->consultarAuxilioMunicipio($codigoIbge, $mesAno, $pagina);
        return $result;
    }

    function consultarAuxilioCpfNis($codigoBenifeciario, $codigoResponsavelFamiliar, $pagina){
        $apiSerpro = new SerproApi($_SESSION['apiSerpro']['url'], $_SESSION['apiSerpro']['chave']);
        $result = $apiSerpro->consultarAuxilioCpfNis($codigoBenifeciario, $codigoResponsavelFamiliar, $pagina);
        return $result;
    }

    function consultarAuxiliobenifeciarioMunicipio($codigoIbge, $mesAno, $pagina){
        $apiSerpro = new SerproApi($_SESSION['apiSerpro']['url'], $_SESSION['apiSerpro']['chave']);
        $result = $apiSerpro->consultarAuxiliobeneficiarioMunicipio($codigoIbge, $mesAno, $pagina);
        return $result;
    }
}
