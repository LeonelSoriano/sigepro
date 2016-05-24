<?php
/**
 * Created by IntelliJ IDEA.
 * User: leonel
 * Date: 11/05/16
 * Time: 0:37
 */


if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('comboFormDb'))
{
    /**
     * esta funcio completa los combos desde base de datos
     * hay q pasarle como parametros db (id|nombre|activo=1 o 0)
     */
    function comboFormDb($infoDb,$name)
    {
        $defaulActive = "";

        $defaulActiveBool = false;

        $comboHTML = "<select style='width: 100%' id='$name'  name='$name' >";
        $comboHTML .= "<option value='-1' ".$defaulActive.">Por favor Seleccione</option>";
        foreach ($infoDb as $key => $value){
            $isActive = $value['active'] === '1' ? "selected" : "";

            if($isActive  === "selected"){
                $defaulActive = true;
            }

            $comboHTML .= "<option value=\"".$key."\" $isActive>".$value['name']."</option>";
        }
        $comboHTML .= "</select>";

        if(!$defaulActive){
            $defaulActive = "selected";
        }

        return $comboHTML;
    }


    function comboMultiFormDb($infoDb,$name)
    {
        $defaulActive = "";

        $defaulActiveBool = false;

        $comboHTML = "<select style='width: 100%' id='$name'   multiple>";

        foreach ($infoDb as $key => $value){
            $isActive = $value['active'] === '1' ? "selected" : "";

            if($isActive  === "selected"){
                $defaulActive = true;
            }

            $comboHTML .= "<option value=\"".$key."\" $isActive>".$value['name']."</option>";
        }
        $comboHTML .= "</select>";

        if(!$defaulActive){
            $defaulActive = "selected";
        }

        return $comboHTML;
    }




    /**
     * helper para crear de forma mas rapida un input tipo text
     * @param $name
     * @param $size
     * @param $maxlength
     * @param $value
     * @return string|void
     */
    function inputPasswordFormData($name,$size,$maxlength,$value){
        $inputTextHtml = " <input style='width: 100%' type=\"password\" ";

        if($name == ""){
            var_dump("Error el parametro name es obligatorio en un input text");
            return;
        }

        $inputTextHtml .= "name=\"$name\" ";
        $inputTextHtml .= "id=\"$name\" ";

        if( $size != 0 && $size != ""){
            $inputTextHtml .= " size=\"$size\" ";
        }

        if($maxlength != 0 && $maxlength != ""){
            $inputTextHtml .= " maxlength=\"$maxlength\" ";
        }

        if($value != ""){
            $inputTextHtml .= " value=\"$value\" ";
        }
        $inputTextHtml .= "/> ";

        return $inputTextHtml;
    }


    /**
     * @param $name id
     * @param $header el header footer
     * @param $data datos
     * @param $existFooter si se rendeara el footer
     * @param string $extra cosas extras
     * @return string regresa la tabla
     */
    function tableFromDB($name,$header,$data,$existFooter,$extra=''){
      
        $tableHtml = " ";
        $footer = "";

        $tableHtml .= "<table class=\"display\" id='$name' $extra > ";
        $tableHtml .= "<thead><tr>";
        $footer .= "<tfoot><tr>";

        foreach ($header as $index => $item) {
            $tableHtml .= "<th> $item </th>";
            $footer .= " $item ";
        }

        $footer .= "</tfoot></tr>";
        $tableHtml .= "</thead></tr>";

        if($existFooter){
            $tableHtml .= $footer;
        }

        $tableHtml .= "<tbody><tr>";

        foreach ($data as $index => $item) {

            $tableHtml .= " <td> $item </td>";
        }

        $tableHtml .= "</tbody></tr>";
        $tableHtml .= "</table> ";


        $tableHtml .= " <script> 
                $('#$name').DataTable();
 
        </script> ";

        return $tableHtml;
        
    }



    /**
     * helper para crear de forma mas rapida un input tipo text
     * @param $name
     * @param $size
     * @param $maxlength
     * @param $value
     * @return string|void
     */
    function inputTextFormData($name,$size,$maxlength,$value){
        $inputTextHtml = " <input type=\"text\" ";

        if($name == ""){
            var_dump("Error el parametro name es obligatorio en un input text");
            return;
        }

        $inputTextHtml .= "name=\"$name\" ";
        $inputTextHtml .= "id=\"$name\" ";

        if( $size != 0 && $size != ""){
            $inputTextHtml .= " size=\"$size\" ";
        }

        if($maxlength != 0 && $maxlength != ""){
            $inputTextHtml .= " maxlength=\"$maxlength\" ";
        }

        if($value != ""){
            $inputTextHtml .= " value=\"$value\" ";
        }
        $inputTextHtml .= "/> ";

        return $inputTextHtml;
    }


    /**
     * crea un text area depende los parametros
     * @param $name
     * @param $cols
     * @param $rows
     * @param $value
     * @return string|void
     */
    function textAreaFormData($name,$cols,$rows,$value){

        $textAreaHtml = " <textarea ";
        if($name == ""){
            var_dump("Error el parametro name es obligatorio en un textArea");
            return;
        }
        $textAreaHtml .= " name=\"$name\" ";
        $textAreaHtml .= " id=\"$name\" ";
        if($cols != 0){
            $textAreaHtml .= " cols=\"$cols\" ";
        }
        if($rows != 0){
            $textAreaHtml .= " rows=\"$rows\" ";
        }
        $textAreaHtml .= " >";
        $textAreaHtml .= "$value";
        $textAreaHtml .= "</textarea>";


        return $textAreaHtml;
    }
}