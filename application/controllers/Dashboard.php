<?php
/**
 * Created by IntelliJ IDEA.
 * User: leonel
 * Date: 8/05/16
 * Time: 15:18
 */

defined('BASEPATH') OR exit('No direct script access allowed');

require_once(APPPATH .'/class/dto/UserDTO.php');
require_once(APPPATH .'/class/until/StateView.php');
/**
 * Login class
 */



class Dashboard extends CI_Controller {


    private $stateView;

    /**
     * Login constructor.
     */
    function __construct()
    {
        parent::__construct();
        $this->load->model("UserModel");
        $this->load->model("LoadComboModel");


        $this->load->helper(array('url', 'form', 'sigeproSecurity','comboFormDb'));
        $this->load->library(array('session'));


       $this->stateView = new StateView($this->session,$this->load);
    }


    public function index()
    {
        sigeproSecurity($this->session);
        $data = array(
            'userId' => $this->session->userdata('user.id'),
            'userName' => $this->session->userdata('user.name'),
            'userSurName' => $this->session->userdata('user.surName'),

            );
        $this->renderLoginData($data);
    }


    public function logout(){
        $user = new UserDTO();
        $user->removeUserSession($this->session);
        redirect('/login');
    }


    public function ajaxUserProfile(){

//        comboFormDb($this->LoadComboModel->companyFromUser($this->session->userdata('user.id')));

        //var_dump(inputTextForData("ejemplo",30,255,"soy un ejemplo"));


        if($this->input->post('view') !== '0'){
            $this->stateView->setView($this->input->post('view'));
        }

        $data = '';

        if($this->session->userdata('view.active') === 1){
            $data = array(
                'userId' => $this->session->userdata('user.id'),
                'userName' => $this->session->userdata('user.name'),
                'userSurName' => $this->session->userdata('user.surName'),
            );
        }
        else if($this->session->userdata('view.active') === '2'){

            $data = $this->UserModel->UserById($this->session->userdata('user.id'));

        }
        else if($this->session->userdata('view.active') === '3'){

            $dataUser = $this->UserModel->UserById($this->session->userdata('user.id'));


            $data = array(
                'userNameInput' => inputTextFormData("name",30,255,$dataUser['name']),
                'surNameInput' => inputTextFormData("surname",30,255,$dataUser['surname']),
                'phoneInput' => inputTextFormData("phone",30,255,$dataUser['phone']),
                'emailInput' => inputTextFormData("email",30,255,$dataUser['email']),
                'addressInput' => textAreaFormData("address",35,4,$dataUser['addres']),
                'positionInput' => comboFormDb(
                    $this->LoadComboModel->combineUsertToCompany($this->session->userdata('user.id')),"position"),
                'passwordInput' => inputPasswordFormData("password",30,255,$dataUser['password']),
                'typeUserInput' => comboFormDb(
                    $this->LoadComboModel->typeUserFromUser($this->session->userdata('user.id')),"typeuser"),

            );

        }
        $this->stateView->renderView($data);
    }



    public function updateUser(){

        sigeproSecurity($this->session);

        var_dump($this->input->post());

        $paramImg = null;
        if($this->input->post('a_x_imagen') == '2'){
            $paramImg = "";
        }else if($this->input->post('a_x_imagen') == '3'){
            $paramImg = $this->input->post('x_imagen');

            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']	= '100';
            $config['max_width']  = '1024';
            $config['max_height']  = '768';

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload())
            {
                $error = array('error' => $this->upload->display_errors());
                var_dump($error);
                //$this->load->view('upload_form', $error);
            }
            else
            {
                $data = array('upload_data' => $this->upload->data());

                var_dump($data);
            }


        }
//        $id,$name,$surName,$phone,$address,$email,$positionJob,$img,$typeUser
        $this->UserModel->updateUser($this->session->userdata('user.id'),
            $this->input->post('name'),$this->input->post('surname'),
            $this->input->post('phone'),$this->input->post('address'),
            $this->input->post('email'),$this->input->post('position'),
            $paramImg,$this->input->post('typeuser'),$this->input->post('password')
            );

        //redirect('/login');
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
