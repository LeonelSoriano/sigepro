<?php

/**
 * Created by PhpStorm.
 * User: leonel
 * Date: 19/05/16
 * Time: 23:07
 */

require_once ("ProcedureMapper.php");

class SpGetComboUserToTypeuser extends  \orm\ProcedureMapper
{
    private $in_idparam;
    private $id;
    private $name;
    private $active;

    public function  __construct($in_idparam)
    {
        parent::__construct($this);
        $this->in_idparam = $in_idparam;
    }
    

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * @param mixed $active
     */
    public function setActive($active)
    {
        $this->active = $active;
    }

    /**
     * @return mixed
     */
    public function getInIdparam()
    {
        return $this->in_idparam;
    }

    /**
     * @param mixed $in_idparam
     */
    public function setInIdparam($in_idparam)
    {
        $this->in_idparam = $in_idparam;
    }


}