<?php
/**
 * Created by IntelliJ IDEA.
 * User: leonel
 * Date: 8/05/16
 * Time: 15:18
 */
// proyecto->objetivo->meta->actividad->tarea
defined('BASEPATH') OR exit('No direct script access allowed');

require_once(APPPATH .'/class/dto/UserDTO.php');
require_once(APPPATH .'/class/until/StateView.php');


/**
 * Login class
 * proyectos->obejtivos->metas->actividades->tareas
 */



class Dashboard extends CI_Controller {


    private $stateView;
    private $data;

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


        if($this->input->post('view') !== '0'){
            $this->stateView->setView($this->input->post('view'));
        }

        if($this->session->userdata('view.active') === 1){

            $this->data = array(
                'userId' => $this->session->userdata('user.id'),
                'userName' => $this->session->userdata('user.name'),
                'userSurName' => $this->session->userdata('user.surName'),
            );
        }
        else if($this->session->userdata('view.active') === '2'){

            $this->data = $this->UserModel->UserById($this->session->userdata('user.id'));


        }
        else if($this->session->userdata('view.active') === '3'){

            $dataUser = $this->UserModel->UserById($this->session->userdata('user.id'));

            $this->data = array(
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
            $this->data = $tableUser->toArray();
        
        }else if($this->session->userdata('view.active') === '5'){
            require_once(APPPATH ."/class/orm/SpGetUserByIdViewUserList.php");
            $tableUser = new  SpGetUserByIdViewUserList($this->session->userdata('user.id'));
            $tableUser->exec();
            $this->data = $tableUser->toArray();

        }else if($this->session->userdata('view.active') === '6'){

            $dataUser = $this->UserModel->UserById(-1);

            $this->data = array(
                'userNameInput' => inputTextFormData("name",30,255,$dataUser['name']),
                'surNameInput' => inputTextFormData("surname",30,255,$dataUser['surname']),
                'phoneInput' => inputTextFormData("phone",30,255,$dataUser['phone']),
                'emailInput' => inputTextFormData("email",30,255,$dataUser['email']),
                'addressInput' => textAreaFormData("address",35,4,$dataUser['addres']),
                'positionInput' => comboFormDb(
                    $this->LoadComboModel->combineUsertToCompany(-1),"position"),
                'passwordInput' => inputPasswordFormData("password",30,255,""),
                'typeUserInput' => comboFormDb(
                    $this->LoadComboModel->typeUserFromUser(-1),"typeuser"),

            );

        }else if($this->session->userdata('view.active') === '7'){
            $this->data = array();
        }else if( $this->session->userdata('view.active') ===   '8'){

            require_once(APPPATH ."/class/component/ComponentProject.php");
            $component = new ComponentProject();
            $this->data = array('com' =>  $component->renderHtml());
        }else{
            $this->ajaxProject();
            return;
        }

        $this->stateView->renderView($this->data);
    }


    /**
     *
     */
    public function ajaxProject(){

        if( $this->input->post('pk') !== null){

            $data = array(
                'view.project'  => $this->input->post('pk')
            );
            $this->session->set_userdata($data);

        }

        $pk = $this->session->userdata('view.project');

        if($this->input->post('view') !== '0'){
            $this->stateView->setView($this->input->post('view'));
        }


        if($this->session->userdata('view.active') === '9'){
            require_once(APPPATH ."/class/orm/SpGetComboUserTypeProject.php");
            require_once(APPPATH ."/class/orm/SpGetComboUser.php");
            require_once(APPPATH ."/class/orm/SpGetUserProkectById.php");

            $spGetComboUserTypeProject = new SpGetComboUserTypeProject(-1);
            $spGetComboUserTypeProject->exec();

            $spGetComboUser = new SpGetComboUser(-1);
            $spGetComboUser->exec();


            $spGetUserProkectById = new SpGetUserProkectById($pk);

            $this->data = array(
                'projectId' => $pk,
                'typeUserInput' => comboFormDb(
                    $spGetComboUserTypeProject->toArrayMappeToComnbo(),"typeuser"),
                'userCombo' => comboFormDb(
                    $spGetComboUser->toArrayMappeToComnbo(),"userCombo"),
                'table' => $spGetUserProkectById->toArray()
            );
        }

        $this->stateView->renderView($this->data);
    }


    public function addProject(){

        require_once(APPPATH ."/class/orm/SpInsNewProject.php");
        $spProject = new SpInsNewProject(
            $this->input->post('descripcion'),
            $this->input->post('alias'),
            $this->input->post('fecha_entrega'),
            $this->input->post('fecha_inicio'),
            date('H:i', strtotime($this->input->post('hourstart'))),
                date('H:i', strtotime($this->input->post('hoursend'))),
            $this->session->userdata('user.id'),
            $this->input->ip_address()
        );

        $spProject->exec();
        redirect('/dashboard');
    }

    public function addUser(){

        require_once(APPPATH ."/class/orm/SpInsUser.php");

        $spInsUser = new SpInsUser($this->input->post('user'),
            $this->input->post('x_password'),
            $this->input->post('name'),
            $this->input->post('surname'),
            $this->input->post('email'),
            $this->input->post('position'),
            $_FILES['imagen']['name'],
            $this->input->post('phone'),
            $this->input->post('typeuser')
        );
        $spInsUser->exec();

        if($_FILES['imagen']['name'] != ''){
            move_uploaded_file($_FILES['imagen']['tmp_name'],APPPATH . "../uploads/" . basename($_FILES['imagen']['name']));
        }

        redirect('/dashboard');

    }

    public function loadTableProject(){

        require_once(APPPATH ."/class/orm/SpGetUserProkectById.php");
        require_once(APPPATH ."/class/orm/SpInsUserToProject.php");
        $spGetUserProkectById = new SpGetUserProkectById($this->session->userdata('view.project'));
        $spGetUserProkectById->exec();

        $spInsUserToProject = new SpInsUserToProject($this->input->get('in_typeUsert'),
            $this->session->userdata('view.project'), $this->session->userdata('user.id'));
        $spInsUserToProject->setNoReturn(true);
        $spInsUserToProject->exec();
        $headerv = array("Nombre","Apellido","Funcion");

        echo( tableFromDB("info",$headerv,
            $spGetUserProkectById->toArray(),false));
        
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
