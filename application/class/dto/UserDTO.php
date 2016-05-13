<?php
/**
 * Created by IntelliJ IDEA.
 * User: leonel
 * Date: 7/05/16
 * Time: 23:23
 */

if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class UserDTO {

    private $id;
    private $nameUser;
    private $name;
    private $surName;
    private $idCard;
    private $email;
    private $img;
    private $skype;
    private $phone;
    private $typeUser;
    private $address;
    private $password;
    private $positionJob;

    public function toSessionVar($session,$id,$nameUser,$name,$surName,
        $idCard,$email,$img,$skype,$phone,$typeUser,$address){

        $this->id = $id;
        $this->nameUser = $nameUser;
        $this->name = $name;
        $this->surName = $surName;
        $this->idCard = $idCard;
        $this->email = $email;
        $this->img = $img;
        $this->skype = $skype;
        $this->phone = $phone;
        $this->typeUser = $typeUser;
        $this->address = $address;



        $data = array(
            'user.id'       => $this->id,
            'user.username'      => $this->username,
            'user.name'       => $this->name,
            'user.surName'          => $this->surName,
            'user.idCard'        => $this->idCard,
            'user.email'        => $this->email,
            'user.img'        => $this->img,
            'user.skype'    => $this->skype,
            'user.phone'   => $this->phone,
            'user.typeUser' => $this->typeUser,
            'user.address' => $this->address
        );


        $session->set_userdata($data);


    }



    public function persistToSerssion($session){

        $data = array(
            'user.id'       => $this->id,
            'user.username'      => $this->username,
            'user.name'       => $this->name,
            'user.surName'          => $this->surName,
            'user.idCard'        => $this->idCard,
            'user.email'        => $this->email,
            'user.img'        => $this->img,
            'user.skype'    => $this->skype,
            'user.phone'   => $this->phone,
            'user.typeUser' => $this->typeUser,
            'user.address' => $this->address
        );

        $session->set_userdata($data);
    }


    public function removeUserSession($session){
        $session->unset_userdata('user.id');
        $session->unset_userdata('user.username');
        $session->unset_userdata('user.name');
        $session->unset_userdata('user.surName');
        $session->unset_userdata('user.idCard');
        $session->unset_userdata('user.email');
        $session->unset_userdata('user.img');
        $session->unset_userdata('user.skype');
        $session->unset_userdata('user.phone');
        $session->unset_userdata('user.typeUser');
        $session->unset_userdata('user.address');
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
    public function getIdCard()
    {
        return $this->idCard;
    }

    /**
     * @param mixed $idCard
     */
    public function setIdCard($idCard)
    {
        $this->idCard = $idCard;
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
    public function getNameUser()
    {
        return $this->nameUser;
    }

    /**
     * @param mixed $nameUser
     */
    public function setNameUser($nameUser)
    {
        $this->nameUser = $nameUser;
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
    public function getSkype()
    {
        return $this->skype;
    }

    /**
     * @param mixed $skype
     */
    public function setSkype($skype)
    {
        $this->skype = $skype;
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
    public function getTypeUser()
    {
        return $this->typeUser;
    }

    /**
     * @param mixed $typeUser
     */
    public function setTypeUser($typeUser)
    {
        $this->typeUser = $typeUser;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
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

    /**
     * @return mixed
     */
    public function getPositionJob()
    {
        return $this->positionJob;
    }

    /**
     * @param mixed $positionJob
     */
    public function setPositionJob($positionJob)
    {
        $this->positionJob = $positionJob;
    }




}