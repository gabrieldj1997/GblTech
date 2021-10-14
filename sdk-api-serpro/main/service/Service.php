<?

namespace org\gov\br\sdk\service;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Exception\BadResponseException;

class Service {
    private $urlBase;
    private $urlApi;
    private $requestObject;
    private $http_status_code;
    private $requestMethod;
    private $chaveApi;

    public function __construct($urlBase, $chaveApi)
    {
        // $this->setUrlBase($urlBase);
        // $this->setChaveApi($chaveApi);
    }

    protected function execute(){
        $this->urlApi = preg_replace('/\/$/', '', $this->urlApi);
        $headers = array();
        $query = array();

        foreach($this->requestObject->iterate() as $index => $value){
            $query[$index] = $value;
        };

        $headers = ['chave-api-dados' => $this->chaveApi];
        
        $client = new Client();

        $request = $client->createRequest($this->requestMethod,  $this->urlBase.$this->urlApi, array('query' => $query));
        $request->setHeaders($headers);
        
        try{
            $response = $client->send($request);

        }catch (ClientException $e) {
            $error_message = $e->getResponse();
            throw new \Exception($error_message, $e->getResponse()->getStatusCode());
        } catch (ServerException $e) {
            throw new \Exception($e, $e->getResponse()->getStatusCode());
        } catch (BadResponseException $e) {
            throw new \Exception($e->getResponse(), $e->getResponse()->getStatusCode());
        }

        return json_decode($response->getBody()->getContents());
    }



    /**
     * Get the value of urlBase
     */
    public function getUrlBase()
    {
        return $this->urlBase;
    }

    /**
     * Set the value of urlBase
     */
    public function setUrlBase($urlBase): self
    {
        $this->urlBase = $urlBase;

        return $this;
    }

    /**
     * Get the value of urlApi
     */
    public function getUrlApi()
    {
        return $this->urlApi;
    }

    /**
     * Set the value of urlApi
     */
    public function setUrlApi($urlApi): self
    {
        $this->urlApi = $urlApi;

        return $this;
    }

    /**
     * Get the value of requestObject
     */
    public function getRequestObject()
    {
        return $this->requestObject;
    }

    /**
     * Set the value of requestObject
     */
    public function setRequestObject($requestObject): self
    {
        $this->requestObject = $requestObject;

        return $this;
    }

    /**
     * Get the value of http_status_code
     */
    public function getHttpStatusCode()
    {
        return $this->http_status_code;
    }

    /**
     * Set the value of http_status_code
     */
    public function setHttpStatusCode($http_status_code): self
    {
        $this->http_status_code = $http_status_code;

        return $this;
    }

    /**
     * Get the value of requestMethod
     */
    public function getRequestMethod()
    {
        return $this->requestMethod;
    }

    /**
     * Set the value of requestMethod
     */
    public function setRequestMethod($requestMethod): self
    {
        $this->requestMethod = $requestMethod;

        return $this;
    }

    /**
     * Get the value of chaveApi
     */
    public function getChaveApi()
    {
        return $this->chaveApi;
    }

    /**
     * Set the value of chaveApi
     */
    public function setChaveApi($chaveApi): self
    {
        $this->chaveApi = $chaveApi;

        return $this;
    }
}