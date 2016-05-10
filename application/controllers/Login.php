<?php
/**
 * Created by IntelliJ IDEA.
 * User: leonel
 * Date: 7/05/16
 * Time: 19:47
 */
defined('BASEPATH') OR exit('No direct script access allowed');


/**
 * Login class
 */
class Login extends CI_Controller {

    /**
     * Login constructor.
     */
    function __construct()
    {
        parent::__construct();

        $this->load->helper(array( 'url','form'));
        $this->load->library(array('session'));
        $this->load->model("UserModel");
    }


    public function index()
    {


        if(isset($_POST) && !empty($_POST) ){

            $password = $this->input->post('password');
            $nameUser = $this->input->post('username');

            $user = $this->UserModel->validteLogin($password,$nameUser);

            if($user->getId() === '-1'){

                $data = array('failLogin' => true);
                $this->session->unset_userdata('user');
                $this->renderLoginData($data);

            }else {

                $user->persistToSerssion($this->session);
                redirect('/dashboard');
            }

        }else{
            $this->renderLogin();

        }

    }



    /**
     * hace render a la vista
     */
    private function renderLogin(){
        $this->load->view('/layout/head');
        $this->load->view('login');
        $this->load->view('/layout/endpage');
    }

    /**
     * hace render a la vista
     */
    private function renderLoginData($data){
        $this->load->view('/layout/head');
        $this->load->view('login',$data);
        $this->load->view('/layout/endpage');
    }

}
