<?php
/**
 * Created by PhpStorm.
 * User: leonel
 * Date: 15/05/16
 * Time: 19:36
 */

namespace orm;
//require_once ("../../system/core/Model.php");
require_once (APPPATH ."../system/core/Model.php");

abstract class ProcedureMapper
{

    private $infObj;
    private $obj;
    private $model;

    private $noReturn = false;

    /**
     * @param boolean $noReturn
     */
    public function setNoReturn($noReturn)
    {
        $this->noReturn = $noReturn;
    }


    public function __construct($infObj)
    {
        $obj = new \ReflectionClass($infObj);
        $this->model = new \CI_Model();
        $this->model->load->database();
        $this->obj =  $infObj;
        $this->infObj =  new \ReflectionClass($infObj);

    }

    public function generateProcedure(){

        $procedureSql = " CALL ";

        for($i = 0;$i<strlen($this->infObj->name);$i++){
            $actualChar = $this->infObj->name[$i];

            if(ctype_upper($actualChar)){
                if($i != 0){
                    $procedureSql .= "_". $actualChar;
                }else{
                    $procedureSql .= strtoupper($actualChar);
                }

            }else{
                $procedureSql .= strtoupper($actualChar);
            }
        }
    
        $countParamIn = 0;
        $procedureSql .="(";
        for($i = 0;$i<count($this->infObj->getProperties());$i++){
            $actualMethod = $this->infObj->getProperties()[$i]->name;

            if(substr( $actualMethod, 0, 3 ) === "in_"){

                if($countParamIn != 0){
                    $procedureSql .= ",";
                }
                $countParamIn++;

                $arr = explode('_', $actualMethod, 3);
                $actualMethod = "";

                for ($j=0;$j<count($arr);$j++){

                    $actualMethod .= ucfirst($arr[$j]);

                }
                $reflection = new \ReflectionObject($this->obj);
                $value = "'". $reflection->getMethod("get".$actualMethod)->invoke($this->obj)."'";
                $procedureSql .= $value;
            }
        }
        $procedureSql .= "); ";

        return $procedureSql;
    }

    public function exec(){

        $returValues = array();

        $consulta=$this->model->db->query($this->generateProcedure());


        if($consulta->result_id->num_rows == 0){

            return;
        }
            $result = $consulta->result();

                for($k = 0;$k<count($result);$k++){
                    $itemArray = get_object_vars($result[$k]);
                    foreach ( $itemArray as $index => $item) {
                        if(!array_key_exists( $index,$returValues)){
                                $returValues[$index] = array();
                        }
                        array_push($returValues[$index],$item);
                    }
                }

        foreach ( $returValues as $index => $item) {
            $setMethod = "set". ucfirst($index);
            call_user_func_array(array($this->obj, $setMethod), array($item));
        }


        if($consulta->result_id->num_rows != 0 && !$this->noReturn){
            $consulta->next_result();
            $consulta->free_result();
        }

    }
    
    
    public function  toArray(){
        $reflection = new \ReflectionObject($this->obj);
        $returArray = array();

        for($i = 0;$i<count($this->infObj->getProperties());$i++){
            $actualMethod = $this->infObj->getProperties()[$i]->name;
            if(substr( $actualMethod, 0, 3 ) !== "in_"){
                $getMethod = "get". ucfirst($actualMethod);
                $value = $reflection->getMethod($getMethod )->invoke($this->obj);
       
                if(count($value) == 1){
                    $returArray[$actualMethod] = $value[0];
                }else if(count($value) > 1){
                    $returArray[$actualMethod] = $value;
                }
            }
        }
        return $returArray;
    }



    public function  toArrayMappeToComnbo(){
        $reflection = new \ReflectionObject($this->obj);
        $returArray = array();
        for($i = 0;$i<count($this->infObj->getProperties());$i++){
            $actualMethod = $this->infObj->getProperties()[$i]->name;
            if(substr( $actualMethod, 0, 3 ) !== "in_"){
                $getMethod = "get". ucfirst($actualMethod);
                $value = $reflection->getMethod($getMethod )->invoke($this->obj);

                $returArray[$actualMethod] = $value;
            }
        }
        $arrayCombo = null;
      
            for($i = 0;$i<count($returArray['id']);$i++){

                $arrayCombo[$returArray['id'][$i]] = array();
                $arrayCombo[$returArray['id'][$i]]['name'] =$returArray['name'][$i];
                $arrayCombo[$returArray['id'][$i]]['active'] =$returArray['active'][$i];
            }
        
        return $arrayCombo;
    }


}