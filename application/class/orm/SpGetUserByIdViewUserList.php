<?php
/**
 * Created by PhpStorm.
 * User: leonel
 * Date: 17/05/16
 * Time: 2:11
 */

require_once ("ProcedureMapper.php");

class  spGetUserByIdViewUserList  extends \orm\ProcedureMapper{

    private $in_id;

    private $name;
    private $surName;
    private $phone;
    private $email;
    private $companyName;
    private $departamentName;
    private $positionName;
    private $img;

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
    public function getSurName()
    {
        return $this->surName;
    }

    /**
     * @param mixed $surName
     */
    public function setSurName($surName)
    {
        $this->surName = $surName;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * @param mixed $companyName
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;
    }

    /**
     * @return mixed
     */
    public function getDepartamentName()
    {
        return $this->departamentName;
    }

    /**
     * @param mixed $departamentName
     */
    public function setDepartamentName($departamentName)
    {
        $this->departamentName = $departamentName;
    }

    /**
     * @return mixed
     */
    public function getPositionName()
    {
        return $this->positionName;
    }

    /**
     * @param mixed $positionName
     */
    public function setPositionName($positionName)
    {
        $this->positionName = $positionName;
    }

    /**
     * @return mixed
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * @param mixed $img
     */
    public function setImg($img)
    {
        $this->img = $img;
    }

}