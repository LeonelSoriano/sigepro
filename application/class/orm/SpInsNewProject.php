<?php
/**
 * Created by PhpStorm.
 * User: leonel
 * Date: 18/05/16
 * Time: 22:47
 */

require_once ("ProcedureMapper.php");


class SpInsNewProject extends \orm\ProcedureMapper{

    private $in_descriptionp;
    private $in_aliasp;
    private $in_fechaentregap;
    private $in_fechainiciop;
    private $in_horaentregap;
    private $in_horainiciop;
    private $in_usercreadorp;
    private $in_direccionipp;

    /**
     * SpInsNewProject constructor.
     * @param $in_descriptionp
     * @param $in_aliasp
     * @param $in_fechaentregap
     * @param $in_fechainiciop
     * @param $in_horaentregap
     * @param $in_horainiciop
     * @param $in_usercreadorp
     * @param $in_direccionipp
     */
    public function __construct(
        $in_descriptionp,
        $in_aliasp,
        $in_fechaentregap,
        $in_fechainiciop, $in_horaentregap,
        $in_horainiciop,
        $in_usercreadorp,
        $in_direccionipp)
    {
        parent::__construct($this);

        $this->in_descriptionp = $in_descriptionp;
        $this->in_aliasp = $in_aliasp;
        $this->in_fechaentregap = $in_fechaentregap;
        $this->in_fechainiciop = $in_fechainiciop;
        $this->in_horaentregap = $in_horaentregap;
        $this->in_horainiciop = $in_horainiciop;
        $this->in_usercreadorp = $in_usercreadorp;
        $this->in_direccionipp = $in_direccionipp;
    }

    /**
     * @return mixed
     */
    public function getInDescriptionp()
    {
        return $this->in_descriptionp;
    }

    /**
     * @param mixed $in_descriptionp
     */
    public function setInDescriptionp($in_descriptionp)
    {
        $this->in_descriptionp = $in_descriptionp;
    }

    /**
     * @return mixed
     */
    public function getInAliasp()
    {
        return $this->in_aliasp;
    }

    /**
     * @param mixed $in_aliasp
     */
    public function setInAliasp($in_aliasp)
    {
        $this->in_aliasp = $in_aliasp;
    }

    /**
     * @return mixed
     */
    public function getInFechaentregap()
    {
        return $this->in_fechaentregap;
    }

    /**
     * @param mixed $in_fechaentregap
     */
    public function setInFechaentregap($in_fechaentregap)
    {
        $this->in_fechaentregap = $in_fechaentregap;
    }

    /**
     * @return mixed
     */
    public function getInFechainiciop()
    {
        return $this->in_fechainiciop;
    }

    /**
     * @param mixed $in_fechainiciop
     */
    public function setInFechainiciop($in_fechainiciop)
    {
        $this->in_fechainiciop = $in_fechainiciop;
    }

    /**
     * @return mixed
     */
    public function getInHoraentregap()
    {
        return $this->in_horaentregap;
    }

    /**
     * @param mixed $in_horaentregap
     */
    public function setInHoraentregap($in_horaentregap)
    {
        $this->in_horaentregap = $in_horaentregap;
    }

    /**
     * @return mixed
     */
    public function getInHorainiciop()
    {
        return $this->in_horainiciop;
    }

    /**
     * @param mixed $in_horainiciop
     */
    public function setInHorainiciop($in_horainiciop)
    {
        $this->in_horainiciop = $in_horainiciop;
    }

    /**
     * @return mixed
     */
    public function getInUsercreadorp()
    {
        return $this->in_usercreadorp;
    }

    /**
     * @param mixed $in_usercreadorp
     */
    public function setInUsercreadorp($in_usercreadorp)
    {
        $this->in_usercreadorp = $in_usercreadorp;
    }

    /**
     * @return mixed
     */
    public function getInDireccionipp()
    {
        return $this->in_direccionipp;
    }

    /**
     * @param mixed $in_direccionipp
     */
    public function setInDireccionipp($in_direccionipp)
    {
        $this->in_direccionipp = $in_direccionipp;
    }


}