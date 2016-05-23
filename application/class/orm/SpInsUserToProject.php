<?php
/**
 * Created by PhpStorm.
 * User: leonel
 * Date: 22/05/16
 * Time: 0:08
 */


require_once ("ProcedureMapper.php");

class SpInsUserToProject extends  \orm\ProcedureMapper
{

    private $in_typeUsert;
    private $in_projectId;
    private $in_userId;

    /**
     * SpGetComboUser constructor.
     * @param $in_typeUsert
     * @param $in_projectId
     * @param $in_userId
     */
    public function __construct($in_typeUsert, $in_projectId, $in_userId)
    {
        parent::__construct($this);
        $this->in_typeUsert = $in_typeUsert;
        $this->in_projectId = $in_projectId;
        $this->in_userId = $in_userId;
    }

    /**
     * @return mixed
     */
    public function getInTypeUsert()
    {
        return $this->in_typeUsert;
    }

    /**
     * @param mixed $in_typeUsert
     */
    public function setInTypeUsert($in_typeUsert)
    {
        $this->in_typeUsert = $in_typeUsert;
    }

    /**
     * @return mixed
     */
    public function getInProjectId()
    {
        return $this->in_projectId;
    }

    /**
     * @param mixed $in_projectId
     */
    public function setInProjectId($in_projectId)
    {
        $this->in_projectId = $in_projectId;
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