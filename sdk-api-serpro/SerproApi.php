<?php

namespace SdkApiSerpro;

require_once dirname(__FILE__) . '/vendor/autoload.php';

use org\gov\br\sdk\ControllerAPI;
use org\gov\br\sdk\entity\request\AuxilioBeneficiarioMunicipioRequest;
use org\gov\br\sdk\entity\request\AuxilioMunicipioRequest;
use org\gov\br\sdk\entity\request\AuxilioNisRequest;
use org\gov\br\sdk\entity\request\BolsaCpfNisRequest;
use org\gov\br\sdk\entity\request\BolsaMunicipioRequest;
use org\gov\br\sdk\entity\request\BolsaParcelaSaqueNis;

class SerproApi{

    private $apiService;

    public function __construct($url, $chave){
        if(!isset($this->apiService)){
            $this->apiService = new ControllerAPI($url, $chave);
        }    
    }

    public function consultarBolsaCpfNis($anoMesCompetencia, $anoMesReferencia, $codigo, $pagina){
        $bolsaCpfNis = new BolsaCpfNisRequest();
        $bolsaCpfNis->setAnoMesCompetencia($anoMesCompetencia);
        $bolsaCpfNis->setAnoMesReferencia($anoMesReferencia);
        $bolsaCpfNis->setCodigo($codigo);
        $bolsaCpfNis->setPagina($pagina);

        $response = $this->apiService->bolsaFamiliaService->consultarBolsaCpfNis($bolsaCpfNis);
        return $response;
    }

    public function consultarBolsaMunicipio($codigoIbge, $mesAno, $pagina){
        $bolsaMunicipio = new BolsaMunicipioRequest();
        $bolsaMunicipio->setCodigoIbge($codigoIbge);
        $bolsaMunicipio->setMesAno($mesAno);
        $bolsaMunicipio->setpagina($pagina);

        $response = $this->apiService->bolsaFamiliaService->consultarBolsaMunicipio($bolsaMunicipio);
        return $response;
    }

    public function consultarBolsaParcelaSacadaNis($anoMesCompetencia, $anoMesReferencia, $nis, $pagina){
        $bolsaParcelaSacadaNis = new BolsaParcelaSaqueNis();
        $bolsaParcelaSacadaNis->setAnoMesCompetencia($anoMesCompetencia);
        $bolsaParcelaSacadaNis->setAnoMesCompetencia($anoMesReferencia);
        $bolsaParcelaSacadaNis->setNis($nis);
        $bolsaParcelaSacadaNis->setPagina($pagina);

        $response = $this->apiService->bolsaFamiliaService->consultarBolsaParcelaSaqueNis($bolsaParcelaSacadaNis);
        return $response;
    }

    public function consultarAuxilioBeneficiarioMunicipio($codigoIbge, $mesAno, $pagina){
        $auxilioBeneficiarioMunicipio = new AuxilioBeneficiarioMunicipioRequest();
        $auxilioBeneficiarioMunicipio->setCodigoIbge($codigoIbge);
        $auxilioBeneficiarioMunicipio->setCodigoIbge($mesAno);
        $auxilioBeneficiarioMunicipio->setCodigoIbge($pagina);

        $response = $this->apiService->auxilioService->consultarAuxilioBeneficiarioMunicipio($auxilioBeneficiarioMunicipio);
        return $response;
    }

    public function consultarAuxilioCpfNis($codigoBenifeciario, $codigoResponsavelFamiliar, $pagina){
        $auxilioNisRequest = new AuxilioNisRequest();
        $auxilioNisRequest->setCodigoBenifeciario($codigoBenifeciario);
        $auxilioNisRequest->setCodigoResponsavelFamiliar($codigoResponsavelFamiliar);
        $auxilioNisRequest->setPagina($pagina);

        $response = $this->apiService->auxilioService->consultarAuxilioCpfNis($auxilioNisRequest);
        return $response;
    }

    public function consultarAuxilioMunicipio($codigoIbge, $mesAno, $pagina){
        $auxilioMunicipioRequest = new AuxilioMunicipioRequest();
        $auxilioMunicipioRequest->setCodigoIbge($codigoIbge);
        $auxilioMunicipioRequest->setMesAno($mesAno);
        $auxilioMunicipioRequest->setPagina($pagina);

        $response = $this->apiService->auxilioService->consultarAuxilioMunicipio($auxilioMunicipioRequest);
        return $response;
    }

    public function teste(){
        echo(dirname(__FILE__));
    }
}