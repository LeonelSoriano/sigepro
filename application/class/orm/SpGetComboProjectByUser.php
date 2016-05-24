<?php
/**
 * Created by PhpStorm.
 * User: leonel
 * Date: 23/05/16
 * Time: 2:22
 **/


require_once ("ProcedureMapper.php");

class SpGetComboProjectByUser extends  \orm\ProcedureMapper
{
    private $in_userId;
    private $id;
    private $name;
    private $active;

    public function  __construct($in_userId)
    {
        parent::__construct($this);
        $this->in_userId = $in_userId;
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
    public function getInUserId()
    {
        return $this->in_userId;
    }

    /**
     * @param mixed $in_userId
     */
    public function setInUserId($in_userId)
    {
        $this->in_userId = $in_userId;
    }



}