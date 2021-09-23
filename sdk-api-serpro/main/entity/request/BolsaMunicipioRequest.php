<?

namespace org\gov\br\sdk\entity\request;

class BolsaMunicipioRequest extends Request{
    protected $codigoIbge;
    protected $mesAno;
    protected $pagina;

    /**
     * Get the value of codigoIbge
     */
    public function getCodigoIbge()
    {
        return $this->codigoIbge;
    }

    /**
     * Set the value of codigoIbge
     */
    public function setCodigoIbge($codigoIbge): self
    {
        $this->codigoIbge = $codigoIbge;

        return $this;
    }

    /**
     * Get the value of mesAno
     */
    public function getMesAno()
    {
        return $this->mesAno;
    }

    /**
     * Set the value of mesAno
     */
    public function setMesAno($mesAno): self
    {
        $this->mesAno = $mesAno;

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