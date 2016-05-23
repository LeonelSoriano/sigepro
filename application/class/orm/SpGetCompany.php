<?php
/**
 * Created by PhpStorm.
 * User: leonel
 * Date: 18/05/16
 * Time: 2:19
 */

require_once ("ProcedureMapper.php");

class SpGetCompany extends \orm\ProcedureMapper{

    private $codigoAlterno;
    private $nombre;
    private $nombreCorto;

    public function  __construct()
    {
        parent::__construct($this);
    }

    /**
     * @return mixed
     */
    public function getCodigoAlterno()
    {
        return $this->codigoAlterno;
    }

    /**
     * @param mixed $codigoAlterno
     */
    public function setCodigoAlterno($codigoAlterno)
    {
        $this->codigoAlterno = $codigoAlterno;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getNombreCorto()
    {
        return $this->nombreCorto;
    }

    /**
     * @param mixed $nombreCorto
     */
    public function setNombreCorto($nombreCorto)
    {
        $this->nombreCorto = $nombreCorto;
    }




}