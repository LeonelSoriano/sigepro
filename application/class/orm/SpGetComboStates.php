<?php
/**
 * Created by PhpStorm.
 * User: leonel
 * Date: 23/05/16
 * Time: 0:46
 */

require_once ("ProcedureMapper.php");

class SpGetComboStates extends  \orm\ProcedureMapper
{

    private $id;
    private $name;
    private $active;

    public function  __construct()
    {
        parent::__construct($this);

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

    

}
