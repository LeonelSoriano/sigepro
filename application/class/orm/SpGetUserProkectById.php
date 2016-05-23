<?php
/**
 * Created by PhpStorm.
 * User: leonel
 * Date: 20/05/16
 * Time: 0:34
 */

require_once ("ProcedureMapper.php");

class SpGetUserProkectById extends \orm\ProcedureMapper{


    private $in_idProject;
    private $name;
    private $surname;
    private $root;


    public function  __construct($in_idProject)
    {
        parent::__construct($this);
        $this->in_idProject = 1;
    }

    /**
     * @return mixed
     */
    public function getInIdProject()
    {
        return $this->in_idProject;
    }

    /**
     * @param mixed $in_idProject
     */
    public function setInIdProject($in_idProject)
    {
        $this->in_idProject = $in_idProject;
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
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @param mixed $surname
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;
    }

    /**
     * @return mixed
     */
    public function getRoot()
    {
        return $this->root;
    }

    /**
     * @param mixed $root
     */
    public function setRoot($root)
    {
        $this->root = $root;
    }

    
}