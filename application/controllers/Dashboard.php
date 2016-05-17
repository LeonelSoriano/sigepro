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
        $this->load->library(array('session','upload'));


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

        }else if($this->session->userdata('view.active') === '4'){
            require_once(APPPATH ."/class/orm/SpGetUserByIdViewUserList.php");
            $tableUser = new  SpGetUserByIdViewUserList($this->session->userdata('user.id'));
            $tableUser->exec();

            $data = $tableUser->toArray();
        }else if($this->session->userdata('view.active') === '5'){
            require_once(APPPATH ."/class/orm/SpGetUserByIdViewUserList.php");
            $tableUser = new  SpGetUserByIdViewUserList($this->session->userdata('user.id'));
            $tableUser->exec();
            $data = $tableUser->toArray();

        }else if($this->session->userdata('view.active') === '6'){

            $dataUser = $this->UserModel->UserById(-1);

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

      //  var_dump(basename($_FILES['x_imagen']['name']));
        $paramImg = null;

        if($this->input->post('a_x_imagen') == '2'){
            $paramImg = "";
        }else if($this->input->post('a_x_imagen') == '3'){
            $paramImg = $_FILES['x_imagen']['name'];


            $config['upload_path'] = 'uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']	= '100';
            $config['max_width']  = '1024';
            $config['max_height']  = '768';

            $this->load->library('upload', $config);
            /* TODO: reparar esto de las imagenes*/
            move_uploaded_file($_FILES['x_imagen']['tmp_name'],APPPATH . "../uploads/" . basename($_FILES['x_imagen']['name']));

        }

        $this->UserModel->updateUser($this->session->userdata('user.id'),
            $this->input->post('name'),$this->input->post('surname'),
            $this->input->post('phone'),$this->input->post('address'),
            $this->input->post('email'),$this->input->post('position'),
            $paramImg,$this->input->post('typeuser'),$this->input->post('password')
            );

        $this->stateView->setView("4");
        redirect('/dashboard');
    }


    public function deleteUser(){
        require_once(APPPATH ."/class/orm/SpDelUser.php");
        $delUser = new  SpDelUser($this->session->userdata('user.id'));
        $delUser->exec();
        $this->logout();
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
