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
        $comboHTML = "<select style='width: 100%' id='$name'  name='$name' >";
        $comboHTML .= "<option value='-1'>Por favor Seleccione</option>";
        foreach ($infoDb as $key => $value){
            $isActive = $value['active'] === '1' ? "selected" : "";
            $comboHTML .= "<option value=\"".$key."\" $isActive>".$value['name']."</option>";
        }
        $comboHTML .= "</select>";

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