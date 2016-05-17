<?php
/**
 * Created by PhpStorm.
 * User: leonel
 * Date: 17/05/16
 * Time: 3:01
 */

require_once ("ProcedureMapper.php");


class SpDelUser  extends  \orm\ProcedureMapper{

    private $in_id;

    public function  __construct($in_id)
    {
        parent::__construct($this);
        $this->in_id = $in_id;
    }

    /**
     * @return mixed
     */
    public function getInId()
    {
        return $this->in_id;
    }

    /**
     * @param mixed $in_id
     */
    public function setInId($in_id)
    {
        $this->in_id = $in_id;
    }

    

}