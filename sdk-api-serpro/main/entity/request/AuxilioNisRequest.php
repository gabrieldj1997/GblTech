<?

namespace org\gov\br\sdk\entity\request;

class AuxilioNisRequest extends Request{
    protected $codigoBenifeciario;
    protected $codigoResponsavelFamiliar;
    protected $pagina;

    /**
     * Get the value of codigoBenifeciario
     */
    public function getCodigoBenifeciario()
    {
        return $this->codigoBenifeciario;
    }

    /**
     * Set the value of codigoBenifeciario
     */
    public function setCodigoBenifeciario($codigoBenifeciario): self
    {
        $this->codigoBenifeciario = $codigoBenifeciario;

        return $this;
    }

    /**
     * Get the value of codigoResponsavelFamiliar
     */
    public function getCodigoResponsavelFamiliar()
    {
        return $this->codigoResponsavelFamiliar;
    }

    /**
     * Set the value of codigoResponsavelFamiliar
     */
    public function setCodigoResponsavelFamiliar($codigoResponsavelFamiliar): self
    {
        $this->codigoResponsavelFamiliar = $codigoResponsavelFamiliar;

        return $this;
    }

    /**
     * Get the value of pagina
     */
    public function getPagina()
    {
        return $this->pagina;
    }

    /**
     * Set the value of pagina
     */
    public function setPagina($pagina): self
    {
        $this->pagina = $pagina;

        return $this;
    }
}