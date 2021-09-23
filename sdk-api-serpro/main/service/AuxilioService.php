<?

namespace org\gov\br\sdk\service;

use org\gov\br\sdk\entity\request\AuxilioBeneficiarioMunicipioRequest;
use org\gov\br\sdk\entity\request\AuxilioNisRequest;
use org\gov\br\sdk\entity\request\AuxilioMunicipioRequest;

class AuxilioService extends Service {
    public function consultarAuxilioBeneficiarioMunicipio(AuxilioBeneficiarioMunicipioRequest $auxilioBeneficiarioMunicipioRequest){
        $this->setUrlApi("/auxilio-emergencial-beneficiario-por-municipio");
        $this->setRequestObject($auxilioBeneficiarioMunicipioRequest);
        $this->setRequestMethod("GET");

        try{
            $response = $this->execute();
            return $response;
        }catch(\Exception $e){
            throw $e;
        }
    }

    public function consultarAuxilioCpfNis(AuxilioNisRequest $auxilioNisRequest){
        $this->setUrlApi("/auxilio-emergencial-por-cpf-ou-nis");
        $this->setRequestObject($auxilioNisRequest);
        $this->setRequestMethod("GET");

        try{
            $response = $this->execute();
            return $response;
        }catch(\Exception $e){
            throw $e;
        }
    }

    public function consultarAuxilioMunicipio(AuxilioMunicipioRequest $auxilioMunicipioRequest){
        $this->setUrlApi("/auxilio-emergencial-por-municipio");
        $this->setRequestObject($auxilioMunicipioRequest);
        $this->setRequestMethod("GET");

        try{
            $response = $this->execute();
            return $response;
        }catch(\Exception $e){
            throw $e;
        }
    }
}