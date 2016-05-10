<?php
/**
 * Created by IntelliJ IDEA.
 * User: leonel
 * Date: 7/05/16
 * Time: 22:51
 */
//extendemos CI_Model

require_once(APPPATH .'/class/dto/UserDTO.php');

class UserModel extends CI_Model{

    public function __construct() {
        
        parent::__construct();
        $this->load->database();
        

    }

    public function validteLogin($passwordParam,$nameUserParam){
        $user = new UserDTO();

        $consulta=$this->db->query("call get_user_by_password_username('$passwordParam','$nameUserParam')");
        $result = $consulta->result()[0];

        $user->setId($result->id);
        $user->setNameUser($result->nameUser);
        $user->setName($result->name);
        $user->setSurName($result->surName);
        $user->setIdCard($result->idcard);
        $user->setEmail($result->email);
        $user->setImg($result->img);
        $user->setSkype($result->skype);
        $user->setPhone($result->phone);
        $user->setTypeUser($result->typeUser);

        return  $user;
    }



}
