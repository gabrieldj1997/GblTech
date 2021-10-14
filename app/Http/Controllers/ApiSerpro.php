<?php

namespace App\Http\Controllers;

use SdkApiSerpro\SerproApi;
use Illuminate\Http\Request;
use Exception as GlobalException;

class ApiSerpro extends Controller
{
    //BolsaFamilia
    function consultarBolsaMunicipio(Request $req)
    {
        try {
            $codigoIbge = $req->query('codigoIbge');
            $mesAno = $req->query('mesAno');
            $pagina = $req->query('pagina');
            $apiSerpro = new SerproApi('http://api.portaldatransparencia.gov.br/api-de-dados', "ee62f3ebb1156b63a3fe831a8a4cbbba");
            // $result = $apiSerpro->consultarBolsaMunicipio($codigoIbge, $mesAno, $pagina);
            // return $result;
            return 'ok';
        } catch (GlobalException  $e) {

            return var_dump($e->__toString());
        }
    }

    function consultarBolsaCpfNis(Request $req)
    {
        $anoMesCompetencia = $req->query('anoMesCompetencia');
        $anoMesReferencia = $req->query('anoMesReferencia');
        $codigo = $req->query('codigo');
        $pagina = $req->query('pagina');
        $apiSerpro = new SerproApi('http://api.portaldatransparencia.gov.br/api-de-dados', "ee62f3ebb1156b63a3fe831a8a4cbbba");
        $result = $apiSerpro->consultarBolsaCpfNis($anoMesCompetencia, $anoMesReferencia, $codigo, $pagina);
        return $result;
    }

    function consultarBolsaSaqueNis(Request $req)
    {
        $anoMesCompetencia = $req->query('anoMesCompetencia');
        $anoMesReferencia = $req->query('anoMesReferencia');
        $codigo = $req->query('codigo');
        $pagina = $req->query('pagina');
        $apiSerpro = new SerproApi('http://api.portaldatransparencia.gov.br/api-de-dados', "ee62f3ebb1156b63a3fe831a8a4cbbba");
        $result = $apiSerpro->consultarBolsaParcelaSacadaNis($anoMesCompetencia, $anoMesReferencia, $codigo, $pagina);
        return $result;
    }

    //Auxilo
    function consultarAuxilioMunicipio(Request $req)
    {
        $codigoIbge = $req->query('codigoIbge');
        $mesAno = $req->query('mesAno');
        $pagina = $req->query('pagina');
        $apiSerpro = new SerproApi('http://api.portaldatransparencia.gov.br/api-de-dados', "ee62f3ebb1156b63a3fe831a8a4cbbba");
        $result = $apiSerpro->consultarAuxilioMunicipio($codigoIbge, $mesAno, $pagina);
        return $result;
    }

    function consultarAuxilioCpfNis(Request $req)
    {
        $codigoBenifeciario = $req->query('codigoBenifeciario');
        $codigoResponsavelFamiliar = $req->query('codigoResponsavelFamiliar');
        $pagina = $req->query('pagina');
        $apiSerpro = new SerproApi('http://api.portaldatransparencia.gov.br/api-de-dados', "ee62f3ebb1156b63a3fe831a8a4cbbba");
        $result = $apiSerpro->consultarAuxilioCpfNis($codigoBenifeciario, $codigoResponsavelFamiliar, $pagina);
        return $result;
    }

    function consultarAuxiliobenifeciarioMunicipio(Request $req)
    {
        $codigoIbge = $req->query('codigoIbge');
        $mesAno = $req->query('mesAno');
        $pagina = $req->query('pagina');
        $apiSerpro = new SerproApi('http://api.portaldatransparencia.gov.br/api-de-dados', "ee62f3ebb1156b63a3fe831a8a4cbbba");
        $result = $apiSerpro->consultarAuxiliobeneficiarioMunicipio($codigoIbge, $mesAno, $pagina);
        return $result;
    }
}
