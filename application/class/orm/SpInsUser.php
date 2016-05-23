<?php
/**
 * Created by PhpStorm.
 * User: leonel
 * Date: 17/05/16
 * Time: 6:35
 */

require_once ("ProcedureMapper.php");

class SpInsUser extends \orm\ProcedureMapper{


    private $in_loginName;
    private $in_passwordValue;
    private $in_userName;
    private $in_surName;
    private $in_email;
    private $in_codePosition;
    private $in_img;
    private $in_phone;
    private $in_userType;

    /**
     * SpInsUser constructor.
     * @param $in_loginName
     * @param $in_passwordValue
     * @param $in_userName
     * @param $in_surName
     * @param $in_email
     * @param $in_codePosition
     * @param $in_img
     * @param $in_phone
     * @param $in_userType
     */
    public function __construct($in_loginName,
                                $in_passwordValue, $in_userName,
                                $in_surName, $in_email, $in_codePosition,
                                $in_img, $in_phone, $in_userType)
    {
        parent::__construct($this);

        $this->in_loginName = $in_loginName;
        $this->in_passwordValue = $in_passwordValue;
        $this->in_userName = $in_userName;
        $this->in_surName = $in_surName;
        $this->in_email = $in_email;
        $this->in_codePosition = $in_codePosition;
        $this->in_img = $in_img;
        $this->in_phone = $in_phone;
        $this->in_userType = $in_userType;
    }

    /**
     * @return mixed
     */
    public function getInLoginName()
    {
        return $this->in_loginName;
    }

    /**
     * @param mixed $in_loginName
     */
    public function setInLoginName($in_loginName)
    {
        $this->in_loginName = $in_loginName;
    }

    /**
     * @return mixed
     */
    public function getInPasswordValue()
    {
        return $this->in_passwordValue;
    }

    /**
     * @param mixed $in_passwordValue
     */
    public function setInPasswordValue($in_passwordValue)
    {
        $this->in_passwordValue = $in_passwordValue;
    }

    /**
     * @return mixed
     */
    public function getInUserName()
    {
        return $this->in_userName;
    }

    /**
     * @param mixed $in_userName
     */
    public function setInUserName($in_userName)
    {
        $this->in_userName = $in_userName;
    }

    /**
     * @return mixed
     */
    public function getInSurName()
    {
        return $this->in_surName;
    }

    /**
     * @param mixed $in_surName
     */
    public function setInSurName($in_surName)
    {
        $this->in_surName = $in_surName;
    }

    /**
     * @return mixed
     */
    public function getInEmail()
    {
        return $this->in_email;
    }

    /**
     * @param mixed $in_email
     */
    public function setInEmail($in_email)
    {
        $this->in_email = $in_email;
    }

    /**
     * @return mixed
     */
    public function getInCodePosition()
    {
        return $this->in_codePosition;
    }

    /**
     * @param mixed $in_codePosition
     */
    public function setInCodePosition($in_codePosition)
    {
        $this->in_codePosition = $in_codePosition;
    }

    /**
     * @return mixed
     */
    public function getInImg()
    {
        return $this->in_img;
    }

    /**
     * @param mixed $in_img
     */
    public function setInImg($in_img)
    {
        $this->in_img = $in_img;
    }

    /**
     * @return mixed
     */
    public function getInPhone()
    {
        return $this->in_phone;
    }

    /**
     * @param mixed $in_phone
     */
    public function setInPhone($in_phone)
    {
        $this->in_phone = $in_phone;
    }

    /**
     * @return mixed
     */
    public function getInUserType()
    {
        return $this->in_userType;
    }

    /**
     * @param mixed $in_userType
     */
    public function setInUserType($in_userType)
    {
        $this->in_userType = $in_userType;
    }


}