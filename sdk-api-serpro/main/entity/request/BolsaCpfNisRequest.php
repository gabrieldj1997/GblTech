<?php

namespace org\gov\br\sdk\entity\request;

class BolsaCpfNisRequest extends Request{
    protected $anoMesCompetencia;
    protected $anoMesReferencia;
    protected $codigo;
    protected $pagina;

    /**
     * Get the value of anoMesCompetencia
     */
    public function getAnoMesCompetencia()
    {
        return $this->anoMesCompetencia;
    }

    /**
     * Set the value of anoMesCompetencia
     */
    public function setAnoMesCompetencia($anoMesCompetencia): self
    {
        $this->anoMesCompetencia = $anoMesCompetencia;

        return $this;
    }

    /**
     * Get the value of anoMesReferencia
     */
    public function getAnoMesReferencia()
    {
        return $this->anoMesReferencia;
    }

    /**
     * Set the value of anoMesReferencia
     */
    public function setAnoMesReferencia($anoMesReferencia): self
    {
        $this->anoMesReferencia = $anoMesReferencia;

        return $this;
    }

    /**
     * Get the value of codigo
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set the value of codigo
     */
    public function setCodigo($codigo): self
    {
        $this->codigo = $codigo;

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