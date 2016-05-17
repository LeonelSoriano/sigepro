<?php
/**
 * Created by IntelliJ IDEA.
 * User: leonel
 * Date: 8/05/16
 * Time: 18:08
 */
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('sigeproSecurity'))
{
    function sigeproSecurity($session)
    {
        if ( $session->userdata('user.id') === null){
            redirect('/login');
        }
    }



    function sigeproSecurytyIsAdmin($session){
        if($session->userdata('user.id') ===  "1" || $session->userdata('user.id') === 1){
            return true;
        }

        return false;
    }

    function sigeproSecurytyIsAdminOut($session,$view){
        if($session->userdata('user.id') ===  "1" || $session->userdata('user.id') === 1){
            return true;
        }
        $view->setView(1);
        redirect('/Dashboard');
        return false;
    }
}