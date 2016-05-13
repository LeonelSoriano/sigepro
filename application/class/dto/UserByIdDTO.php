<?php

/**
 * Created by IntelliJ IDEA.
 * User: leonel
 * Date: 10/05/16
 * Time: 21:55
 */
class UserByIdDTO
{

    private $name;
    private $surname;
    private $phone;
    private $email;
    private $addres;
    private $jobTitle;
    private $departament;
    private $nameCompany;
    private $userType;
    private $userName;
    private $img;
    private $password;


    public function toArray(){

        return array(
            'name'         => $this->name,
            'surname'      => $this->surname,
            'phone'        => $this->phone,
            'email'        => $this->email,
            'addres'  => $this->addres,
            'jobTitle'        => $this->jobTitle,
            'departament'     => $this->departament,
            'nameCompany'    => $this->nameCompany,
            'userType'   => $this->userType,
            'userName' => $this->userName,
            'img' => $this->img,
            'password' => $this->password
        );
    }

    /**
     * @return mixed
     */
    public function getAddres()
    {
        return $this->addres;
    }

    /**
     * @param mixed $addres
     */
    public function setAddres($addres)
    {
        $this->addres = $addres;
    }

    /**
     * @return mixed
     */
    public function getDepartament()
    {
        return $this->departament;
    }

    /**
     * @param mixed $departament
     */
    public function setDepartament($departament)
    {
        $this->departament = $departament;
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
    public function getJobTitle()
    {
        return $this->jobTitle;
    }

    /**
     * @param mixed $jobTitle
     */
    public function setJobTitle($jobTitle)
    {
        $this->jobTitle = $jobTitle;
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
    public function getNameCompany()
    {
        return $this->nameCompany;
    }

    /**
     * @param mixed $nameCompany
     */
    public function setNameCompany($nameCompany)
    {
        $this->nameCompany = $nameCompany;
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
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * @param mixed $userName
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
    }

    /**
     * @return mixed
     */
    public function getUserType()
    {
        return $this->userType;
    }

    /**
     * @param mixed $userType
     */
    public function setUserType($userType)
    {
        $this->userType = $userType;
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

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }



}