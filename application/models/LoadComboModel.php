<?php

/**
 * Created by IntelliJ IDEA.
 * User: leonel
 * Date: 11/05/16
 * Time: 1:08
 */
class LoadComboModel extends CI_Model{

    public function __construct() {
        parent::__construct();
        $this->load->database();

    }


    public function companyFromUser($id){

    $consulta =  $this->db->query("call sp_combo_to_user($id)");

        $result = $consulta->result();
        $arrayRetun = array();

        foreach ($result as $value) {

            $arrayRetun[$value->id] = array(
                'name' => $value->name,
                'active' => $value->active
            );
        }

        $consulta->next_result();
        $consulta->free_result();
       return $arrayRetun;
    }



    public function departamentFromUser($id){

        $consulta =  $this->db->query("call sp_combo_user_to_departament($id)");

        $result = $consulta->result();
        $arrayRetun = array();

        foreach ($result as $value) {

            $arrayRetun[$value->id] = array(
                'name' => $value->name,
                'active' => $value->active
            );
        }

        $consulta->next_result();
        $consulta->free_result();
        return $arrayRetun;
    }


    public function positionFromUser($id){

        $consulta =  $this->db->query("call sp_get_combo_user_to_position($id)");

        $result = $consulta->result();
        $arrayRetun = array();

        foreach ($result as $value) {

            $arrayRetun[$value->id] = array(
                'name' => $value->name,
                'active' => $value->active
            );
        }

        $consulta->next_result();
        $consulta->free_result();
        return $arrayRetun;
    }


    public function typeUserFromUser($id){

        $consulta =  $this->db->query("call sp_get_combo_user_to_typeuser($id)");

        $result = $consulta->result();
        $arrayRetun = array();

        foreach ($result as $value) {

            $arrayRetun[$value->id] = array(
                'name' => $value->name,
                'active' => $value->active
            );
        }

        $consulta->next_result();
        $consulta->free_result();
        return $arrayRetun;
    }


    public function combineUsertToCompany($id){

        $consulta =  $this->db->query("call sp_get_combo_position_company_user($id)");

        $result = $consulta->result();
        $arrayRetun = array();

        foreach ($result as $value) {

            $arrayRetun[$value->id] = array(
                'name' => $value->name,
                'active' => $value->active
            );
        }

        $consulta->next_result();
        $consulta->free_result();
        return $arrayRetun;
    }

}