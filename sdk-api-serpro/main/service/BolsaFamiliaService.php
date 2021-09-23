<?
namespace org\gov\br\sdk\service;

use org\gov\br\sdk\entity\request\BolsaCpfNisRequest;
use org\gov\br\sdk\entity\request\BolsaMunicipioRequest;
use org\gov\br\sdk\entity\request\BolsaParcelaSaqueNis;

class BolsaFamiliaService extends Service{
    public function consultarBolsaCpfNis(BolsaCpfNisRequest $bolsaCpfNisRequest){
        $this->setUrlApi("/bolsa-familia-disponivel-por-cpf-ou-nis");
        $this->setRequestObject($bolsaCpfNisRequest);
        $this->setRequestMethod("GET");

        try{
            $response = $this->execute();
            return $response;
        }catch(\Exception $e){
            throw $e;
        }
    }
    public function consultarBolsaMunicipio(BolsaMunicipioRequest $bolsaMunicipioRequest){
        $this->setUrlApi("/bolsa-familia-por-municipio");
        $this->setRequestObject($bolsaMunicipioRequest);
        $this->setRequestMethod("GET");

        try{
            $response = $this->execute();
            return $response;
        }catch(\Exception $e){
            throw $e;
        }
    }
    public function consultarBolsaParcelaSaqueNis(BolsaParcelaSaqueNis $bolsaParcelaSaqueNis){
        $this->setUrlApi("/bolsa-familia-sacado-por-nis");
        $this->setRequestObject($bolsaParcelaSaqueNis);
        $this->setRequestMethod("GET");

        try{
            $response = $this->execute();
            return $response;
        }catch(\Exception $e){
            throw $e;
        }
    }
}