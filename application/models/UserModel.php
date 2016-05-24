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
        $user->setAddress($result->address);

        $consulta->next_result();
        $consulta->free_result();
        return  $user;
    }


    public function UserById($id){
        require_once(APPPATH .'/class/dto/UserByIdDTO.php');

        $userByIdDTO = new UserByIdDTO();

        $consulta=$this->db->query("call sp_get_user_by_id($id)");
        if(count($consulta->result()) > 0){
            $result = $consulta->result()[0];

            $userByIdDTO->setName($result->name);
            $userByIdDTO->setSurname($result->surname);
            $userByIdDTO->setPhone($result->phone);
            $userByIdDTO->setEmail($result->email);
            $userByIdDTO->setAddres($result->addres);
            $userByIdDTO->setJobTitle($result->job_title);
            $userByIdDTO->setDepartament($result->departament);
            $userByIdDTO->setNameCompany($result->name_company);
            $userByIdDTO->setUserType($result->user_type);
            $userByIdDTO->setUserName($result->user_name);
            $userByIdDTO->setImg($result->img);
            $userByIdDTO->setPassword($result->password);
        }
        $consulta->next_result();
        $consulta->free_result();
        return $userByIdDTO->toArray();

    }


    public function  updateUser($id,$name,$surName,$phone,$address,$email,$positionJob,$img,$typeUser,$password){
        require_once(APPPATH .'/class/dto/UserDTO.php');

        $userDTO = new UserDTO();
        $userDTO->setId($id);
        $userDTO->setName($name);
        $userDTO->setSurName($surName);
        $userDTO->setPhone($phone);
        $userDTO->setAddress($address);
        $userDTO->setEmail($email);
        $userDTO->setAddress($address);
        $userDTO->setPositionJob($positionJob);
        $userDTO->setImg($img);
        $userDTO->setTypeUser($typeUser);
        $userDTO->setPassword($password);

        $consulta=$this->db->query("call sp_upd_user($id,
                      '$name','$surName','$phone','$email','$address',$positionJob,
                       '$img',$typeUser,'$password')");


    }

}
