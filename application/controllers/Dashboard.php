<?php
/**
 * Created by IntelliJ IDEA.
 * User: leonel
 * Date: 8/05/16
 * Time: 15:18
 */

defined('BASEPATH') OR exit('No direct script access allowed');

require_once(APPPATH .'/class/dto/UserDTO.php');
/**
 * Login class
 */
class Dashboard extends CI_Controller {

    /**
     * Login constructor.
     */
    function __construct()
    {
        parent::__construct();

        $this->load->helper(array( 'url','form','sigeproSecurity'));
        $this->load->library(array('session'));
        //$this->load->model("UserModel");
    }


    public function index()
    {
        sigeproSecurity($this->session);

        $data = array(
            'userId' => $this->session->userdata('user.id'),
            'userName' => $this->session->userdata('user.name'),

            );


        $this->renderLoginData($data);

    }


    public function logout(){
        $user = new UserDTO();
        $user->removeUserSession($this->session);
        redirect('/login');


    }



    /**
     * hace render a la vista
     */
    private function renderLogin(){
        $this->load->view('/layout/head');
        //$this->load->view('login');
        $this->load->view('/layout/endpage');
    }

    /**
     * hace render a la vista
     */
    private function renderLoginData($data){
//        $this->load->view('/layout/head');
        $this->load->view('/dashboard',$data);
//        $this->load->view('/layout/endpage');
    }

}
