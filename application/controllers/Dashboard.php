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
 * proyectos->obejtivos->metas->actividades->tareas  estado hora_final fecha_final
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
        $this->load->model("ProjectModel");
        $this->load->model("ActividadModel");
        $this->load->model("MetaModel");
        $this->load->model("ObjetivoModel");
        $this->load->model("TareaModel");
        $this->load->model("EmpresaModel");

        $this->load->helper(array('url', 'form', 'sigeproSecurity','comboFormDb'));
        $this->load->library(array('session','upload','parser'));

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

//        var_dump($this->session->userdata('view.active') );

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


            require_once(APPPATH ."/class/orm/SpGetComboStates.php");
            require_once(APPPATH ."/class/orm/SpGetComboUser.php");
            
            $spGetComboStates = new SpGetComboStates();
            $spGetComboStates->exec();
       
            $spGetComboUser = new SpGetComboUser(-1);
            $spGetComboUser->exec();

            $this->data = array(
                'inputStados' =>  comboFormDb($spGetComboStates->toArrayMappeToComnbo(),'inputStados'),
                 'select_responsable_dialog'  => comboMultiFormDb($spGetComboUser->toArrayMappeToComnbo(),"select-responsable-dialog"),
                 'select_observador_dialog'  => comboMultiFormDb($spGetComboUser->toArrayMappeToComnbo(),"select-observador-dialog")
            );

            if($this->input->post('idProject') !== null ){

                $proyectActive = $this->ProjectModel->findByid($this->input->post('idProject'));

                $this->data['proyectActive'] = $this->input->post('idProject');
                
                $this->data['inputName'] = textAreaFormData("descripcion",0,0,$proyectActive->nombre);
                $this->data['inputAlias'] = form_input('"alias"', $proyectActive->nombre);
                $this->data['fechaEntrega'] =  $proyectActive->fecha_creacion;
                $this->data['horaEntrega'] = $proyectActive->hora_entrega;

                $this->data['inputStados'] = comboFormDbCode($this->ProjectModel->estadoForCombo(
                    $this->input->post('idProject')),
                    'inputStados');

                $this->data['multiObservador'] = comboMultiFormDbCode($this->ProjectModel->getMultiObservador(
                    $this->input->post('idProject')),'select-observador');

                $this->data['multiResponsable'] = comboMultiFormDbCode($this->ProjectModel->getMultiResposanble(
                    $this->input->post('idProject')),'select-responsable');

                $this->data['idHidden'] = form_hidden(array("idHidden"=>$this->input->post('idProject')));


            }

        }else if( $this->session->userdata('view.active') ===   '8'){

            require_once(APPPATH ."/class/component/ComponentProject.php");
            $component = new ComponentProject();
            $this->data = array('com' =>  $component->renderHtml());
            
            
        }else if($this->session->userdata('view.active') === '10'){

            require_once(APPPATH ."/class/orm/SpGetComboStates.php");
            require_once(APPPATH ."/class/orm/SpGetComboUser.php");

            $spGetComboStates = new SpGetComboStates();
            $spGetComboStates->exec();

            $spGetComboUser = new SpGetComboUser(-1);
            $spGetComboUser->exec();


            $this->data = array(
                'inputStados' =>  comboFormDb($spGetComboStates->toArrayMappeToComnbo(),'inputStados'),
                'select_responsable_dialog'  => comboMultiFormDb($spGetComboUser->toArrayMappeToComnbo(),"select-responsable-dialog"),
                'select_observador_dialog'  => comboMultiFormDb($spGetComboUser->toArrayMappeToComnbo(),"select-observador-dialog")

            );

            if($this->input->post('idProject') !== null ) {

                $proyectActive = $this->MetaModel->findByid($this->input->post('idProject'));

                $this->data['proyectActive'] = $this->input->post('idProject');

                $this->data['inputName'] = textAreaFormData("descripcion", 0, 0, $proyectActive->nombre);
                $this->data['inputAlias'] = form_input('"alias"', $proyectActive->nombre);
                $this->data['fechaEntrega'] = $proyectActive->fecha_entrega;
                $this->data['horaEntrega'] = $proyectActive->hora_entrega;

                $this->data['inputStados'] = comboFormDbCode($this->MetaModel->estadoForCombo(
                    $this->input->post('idProject')),
                    'inputStados');

                $this->data['multiObservador'] = comboMultiFormDbCode($this->MetaModel->getMultiObservador(
                    $this->input->post('idProject')), 'select-observador');

                $this->data['multiResponsable'] = comboMultiFormDbCode($this->MetaModel->getMultiResposanble(
                    $this->input->post('idProject')), 'select-responsable');

                $this->data['idHidden'] = form_hidden(array("idHidden" => $this->input->post('idProject')));

            }


            
        }else if($this->session->userdata('view.active') === '11'){

            require_once(APPPATH ."/class/orm/SpGetComboStates.php");
            require_once(APPPATH ."/class/orm/SpGetComboUser.php");

            $spGetComboStates = new SpGetComboStates();
            $spGetComboStates->exec();

            $spGetComboUser = new SpGetComboUser(-1);
            $spGetComboUser->exec();


            $this->data = array(
                'inputStados' =>  comboFormDb($spGetComboStates->toArrayMappeToComnbo(),'inputStados'),
                'select_responsable_dialog'  => comboMultiFormDb($spGetComboUser->toArrayMappeToComnbo(),"select-responsable-dialog"),
                'select_observador_dialog'  => comboMultiFormDb($spGetComboUser->toArrayMappeToComnbo(),"select-observador-dialog")

            );




            if($this->input->post('idProject') !== null ) {

                $proyectActive = $this->ActividadModel->findByid($this->input->post('idProject'));

                $this->data['proyectActive'] = $this->input->post('idProject');

                $this->data['inputName'] = textAreaFormData("descripcion", 0, 0, $proyectActive->nombre);
                $this->data['inputAlias'] = form_input('alias', $proyectActive->nombre);
                $this->data['fechaEntrega'] = $proyectActive->fecha_entrega;
                $this->data['horaEntrega'] = $proyectActive->hora_entrega;



                $this->data['inputStados'] = comboFormDbCode($this->ActividadModel->estadoForCombo(
                    $this->input->post('idProject')),
                    'inputStados');

                $this->data['multiObservador'] = comboMultiFormDbCode($this->ActividadModel->getMultiObservador(
                    $this->input->post('idProject')), 'select-observador');

                $this->data['multiResponsable'] = comboMultiFormDbCode($this->ActividadModel->getMultiResposanble(
                    $this->input->post('idProject')), 'select-responsable');

                $this->data['idHidden'] = form_hidden(array("idHidden" => $this->input->post('idProject')));

            }


        }else if($this->session->userdata('view.active') === '12'){

            require_once(APPPATH ."/class/orm/SpGetComboStates.php");
            require_once(APPPATH ."/class/orm/SpGetComboUser.php");

            $spGetComboStates = new SpGetComboStates();
            $spGetComboStates->exec();

            $spGetComboUser = new SpGetComboUser(-1);
            $spGetComboUser->exec();


            $this->data = array(
                'inputStados' =>  comboFormDb($spGetComboStates->toArrayMappeToComnbo(),'inputStados'),
                'select_responsable_dialog'  => comboMultiFormDb($spGetComboUser->toArrayMappeToComnbo(),"select-responsable-dialog"),
                'select_observador_dialog'  => comboMultiFormDb($spGetComboUser->toArrayMappeToComnbo(),"select-observador-dialog")

            );



            if($this->input->post('idProject') !== null ) {

                $proyectActive = $this->TareaModel->findByid($this->input->post('idProject'));

                $this->data['proyectActive'] = $this->input->post('idProject');

                $this->data['inputName'] = textAreaFormData("descripcion", 0, 0, $proyectActive->nombre);
                $this->data['inputAlias'] = form_input('alias', $proyectActive->nombre);
                $this->data['fechaEntrega'] = $proyectActive->fecha_entrega;
                $this->data['horaEntrega'] = $proyectActive->hora_entrega;


                $this->data['porcentaje'] =  $proyectActive->porcentaje;

                $this->data['inputStados'] = comboFormDbCode($this->TareaModel->estadoForCombo(
                    $this->input->post('idProject')),
                    'inputStados');

                $this->data['multiObservador'] = comboMultiFormDbCode($this->TareaModel->getMultiObservador(
                    $this->input->post('idProject')), 'select-observador');

                $this->data['multiResponsable'] = comboMultiFormDbCode($this->TareaModel->getMultiResposanble(
                    $this->input->post('idProject')), 'select-responsable');

                $this->data['idHidden'] = form_hidden(array("idHidden" => $this->input->post('idProject')));

            }




        }else if($this->session->userdata('view.active') === '13'){

            require_once(APPPATH ."/class/orm/SpGetComboStates.php");
            require_once(APPPATH ."/class/orm/SpGetComboUser.php");
            require_once(APPPATH ."/class/orm/SpGetComboProjectByUser.php");


            $spGetComboStates = new SpGetComboStates();
            $spGetComboStates->exec();

            $spGetComboUser = new SpGetComboUser(-1);
            $spGetComboUser->exec();

            $spGetComboProjectByUser = new SpGetComboProjectByUser($this->session->userdata('user.id'));
            $spGetComboProjectByUser->exec();

            $this->data = array(
                'inputStados' =>  comboFormDb($spGetComboStates->toArrayMappeToComnbo(),'inputStados'),
                'select_responsable_dialog'  => comboMultiFormDb($spGetComboUser->toArrayMappeToComnbo(),"select-responsable-dialog"),
                'select_observador_dialog'  => comboMultiFormDb($spGetComboUser->toArrayMappeToComnbo(),"select-observador-dialog"),
                'master_combo' =>  comboFormDb($spGetComboProjectByUser->toArrayMappeToComnbo(),"master_combo")
            );


            if($this->input->post('idProject') !== null ){


                $active = $this->ObjetivoModel->findByid($this->input->post('idProject'));

                $this->data['proyectActive'] = $this->input->post('idProject');

                $this->data['inputName'] = textAreaFormData("descripcion",0,0,$active->nombre);
                $this->data['inputAlias'] = form_input('"alias"', $active->nombre);
                $this->data['fechaEntrega'] =  $active->fecha_entrega;
                $this->data['horaEntrega'] = $active->hora_entrega;

                $this->data['inputStados'] = comboFormDbCode($this->ObjetivoModel->estadoForCombo(
                    $this->input->post('idProject')),
                    'inputStados');

                $this->data['multiObservador'] = comboMultiFormDbCode($this->ObjetivoModel->getMultiObservador(
                    $this->input->post('idProject')),'select-observador');

                $this->data['multiResponsable'] = comboMultiFormDbCode($this->ObjetivoModel->getMultiResposanble(
                    $this->input->post('idProject')),'select-responsable');

                $this->data['idHidden'] = form_hidden(array("idHidden"=>$this->input->post('idProject')));

            }


        }else if($this->session->userdata('view.active') === '14'){

            $this->data = array();
            $this->data["tabla"] = $this->ProjectModel->findForList($this->session->userdata('user.id'));

        }else if($this->session->userdata('view.active') === '20'){

            $this->data = array();
            
            $this->data['companyName'] = form_input('companyName', '');
            var_dump($this->EmpresaModel->deleteById(2));die;

        }else{

            $this->ajaxProject();
            $this->listView();
            return;
        }

        $this->stateView->renderView($this->data);
    }


    /**
     *
     */
    public function ajaxProject(){

        $renderHere = false;

        if( $this->input->post('pk') !== null){

            $data = array(
                'view.project'  => $this->input->post('pk')
            );
            $this->session->set_userdata($data);

        }

        $pk = $this->session->userdata('view.project');



        if($this->session->userdata('view.active') === '9'){
            $renderHere = true;
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
        if($renderHere){
            $this->stateView->renderView($this->data);
        }

    }
    
    
    public function listView(){

        $renderHere = false;

        if($this->input->post('view') != 0){
        $this->stateView->setView($this->input->post('view'));
        }


        if($this->session->userdata('view.active') === '17'){
            $renderHere = true;

            if($this->input->post('key') != null){
                $data = array(
                    'list.objetivo'  => $this->input->post('key')
                );
                $this->session->set_userdata($data);
            }

            $this->data = array();
            $this->data["tabla"] =$this->ObjetivoModel->findForList($this->session->userdata('list.objetivo'));

            $this->data["project"] = $this->ProjectModel->findByidAlias($this->session->userdata('list.objetivo'));

//            $this->data["father"] = $this->ObjetivoModel->getPrject($this->session->userdata('list.objetivo'));
            
        }else if($this->session->userdata('view.active') === '16'){


            $renderHere = true;
            if($this->input->post('key') != null){
                $data = array(
                    'list.meta'  => $this->input->post('key')
                );
                $this->session->set_userdata($data);
            }

            $this->data = array();
            $this->data["tabla"] =$this->MetaModel->findForList($this->session->userdata('list.meta'));
            $this->data["objetivo"] =$this->ObjetivoModel->findByid($this->session->userdata('list.meta'));
            
            
        }else if($this->session->userdata('view.active') === '15'){
            $renderHere = true;
            if($this->input->post('key') != null){
                $data = array(
                    'list.actividad'  => $this->input->post('key')
                );
                $this->session->set_userdata($data);
            }


            $this->data = array();
            $this->data["tabla"] =$this->ActividadModel->findForList($this->session->userdata('list.actividad'));
            $this->data["meta"] = $this->MetaModel->findByid($this->session->userdata('list.actividad'));
            
        }else if($this->session->userdata('view.active') === '18'){
            $renderHere = true;
            if($this->input->post('key') != null){
                $data = array(
                    'list.tarea'  => $this->input->post('key')
                );
                $this->session->set_userdata($data);
            }


            $this->data = array();
            $this->data["tabla"] =$this->TareaModel->findForList($this->session->userdata('list.tarea'));
            $this->data["actividad"] = $this->ActividadModel->findByid($this->session->userdata('list.tarea'));


        }else if($this->session->userdata('view.active') === '19'){

            $renderHere = true;
            $this->data = array();
            $this->data["tabla"] =$this->TareaModel->findForListAll();

        }

        if($renderHere ){
            $this->stateView->renderView($this->data);
        }

    }


    public  function deleteInList(){

        if($this->session->userdata('view.active') === '14'){

            $this->ProjectModel->deleteProject($this->input->post('deleteid'));

            $this->data = array();
            $this->data["tabla"] = $this->ProjectModel->findForList($this->session->userdata('user.id'));

        }else if($this->session->userdata('view.active') === '17'){

            $this->ObjetivoModel->deleteObjetive($this->input->post('deleteid'));

            if($this->input->post('key') != null){
                $data = array(
                    'list.objetivo'  => $this->input->post('key')
                );
                $this->session->set_userdata($data);
            }

            $this->data = array();
            $this->data["tabla"] =$this->ObjetivoModel->findForList($this->session->userdata('list.objetivo'));

        }else if($this->session->userdata('view.active') === '16'){

            $this->MetaModel->deleteMeta($this->input->post('deleteid'));

            $this->data = array();
            $this->data["tabla"] =$this->MetaModel->findForList($this->session->userdata('list.meta'));

        }else if($this->session->userdata('view.active') === '15'){

            $this->ActividadModel->deleteActividad($this->input->post('deleteid'));
            $this->data = array();
            $this->data["tabla"] =$this->ActividadModel->findForList($this->session->userdata('list.actividad'));

        }else if($this->session->userdata('view.active') === '18' ){

            $this->TareaModel->deleteTarea($this->input->post('deleteid'));
            $this->data = array();
            $this->data["tabla"] =$this->TareaModel->findForList($this->session->userdata('list.tarea'));

        }else if($this->session->userdata('view.active') === '19'){

            $this->TareaModel->deleteTarea($this->input->post('deleteid'));
            $this->data = array();
            $this->data["tabla"] =$this->TareaModel->findForListAll();

        }
        
        $this->stateView->renderView($this->data);
    }

    public function completeTask(){

        $this->TareaModel->completeTask($this->input->post('idTask'));
        $this->listView();
    }


    public function addProject()
    {
       
        if($this->input->post('idHidden')!== null){

            $this->ProjectModel->updateProyect(
                $this->input->post('descripcion'),
                $this->input->post('alias'),
                $this->input->post('select-responsable'),
                $this->input->post('select-observador'),
                $this->input->post('fecha_entrega'),
                date('H:i', strtotime($this->input->post('hoursend'))),
                $this->input->post('inputStados'),
                $this->session->userdata('user.id'),
                $this->input->ip_address(),
                $this->input->post('idHidden')
            );

        }else{

            $this->ProjectModel->insertProject(
                $this->input->post('descripcion'),
                $this->input->post('alias'),
                $this->input->post('select-responsable'),
                $this->input->post('select-observador'),
                $this->input->post('fecha_entrega'),
                date('H:i', strtotime($this->input->post('hoursend'))),
                $this->input->post('inputStados'),
                $this->session->userdata('user.id'),
                $this->input->ip_address()
            );
        }
        redirect('/dashboard');
    }


    public function createActividad(){

        $codigoMetas = $this->session->userdata('list.actividad');

        if($this->input->post('idHidden')!== null){



            $this->ActividadModel->update_activity(
                $this->input->post('descripcion'),
                $this->input->post('alias'),
                $this->input->post('select-responsable'),
                $this->input->post('select-observador'),
                $this->input->post('fecha_entrega'),
                date('H:i', strtotime($this->input->post('hoursend'))),
                $this->input->post('inputStados'),
                $this->session->userdata('user.id'),
                $this->input->ip_address(),
                $codigoMetas,
                $this->input->post('idHidden')
            );


        }else{

            $this->ActividadModel->insertActividad(
                $this->input->post('descripcion'),
                $this->input->post('alias'),
                $this->input->post('select-responsable'),
                $this->input->post('select-observador'),
                $this->input->post('fecha_entrega'),
                date('H:i', strtotime($this->input->post('hoursend'))),
                $this->input->post('inputStados'),
                $this->session->userdata('user.id'),
                $this->input->ip_address(),
                $codigoMetas
            );

        }


        redirect('/dashboard');
    }

    public function  createMeta(){


        $codigoMeta = $this->session->userdata('list.meta');


        if($this->input->post('idHidden')!== null){
            $this->MetaModel->updateMetas(
                $this->input->post('descripcion'),
                $this->input->post('alias'),
                $this->input->post('select-responsable'),
                $this->input->post('select-observador'),
                $this->input->post('fecha_entrega'),
                date('H:i', strtotime($this->input->post('hoursend'))),
                $this->input->post('inputStados'),
                $this->session->userdata('user.id'),
                $this->input->ip_address(),
                $codigoMeta,
                $this->input->post('idHidden')
            );
        }else{
            $this->MetaModel->insertMeta(
                $this->input->post('descripcion'),
                $this->input->post('alias'),
                $this->input->post('select-responsable'),
                $this->input->post('select-observador'),
                $this->input->post('fecha_entrega'),
                date('H:i', strtotime($this->input->post('hoursend'))),
                $this->input->post('inputStados'),
                $this->session->userdata('user.id'),
                $this->input->ip_address(),
                $codigoMeta
            );
        }

        redirect('/dashboard');
    }


    public function  createObjetivo(){

        $codigoProyectos = $this->session->userdata('list.objetivo');


        if($this->input->post('idHidden')!== null){
            $this->ObjetivoModel->updateObjetivos(
                $this->input->post('descripcion'),
                $this->input->post('alias'),
                $this->input->post('select-responsable'),
                $this->input->post('select-observador'),
                $this->input->post('fecha_entrega'),
                date('H:i', strtotime($this->input->post('hoursend'))),
                $this->input->post('inputStados'),
                $this->session->userdata('user.id'),
                $this->input->ip_address(),
                $codigoProyectos,
                $this->input->post('idHidden')
            );

        }else{
            $this->ObjetivoModel->insertObjetive(
                $this->input->post('descripcion'),
                $this->input->post('alias'),
                $this->input->post('select-responsable'),
                $this->input->post('select-observador'),
                $this->input->post('fecha_entrega'),
                date('H:i', strtotime($this->input->post('hoursend'))),
                $this->input->post('inputStados'),
                $this->session->userdata('user.id'),
                $this->input->ip_address(),
                $codigoProyectos
            );
        }

        redirect('/dashboard');
    }

    //proyectos->obejtivos->metas->actividades->tareas
    public function createTarea(){

        $codigoActividades = $this->session->userdata('list.tarea');

        if($this->input->post('idHidden')!== null){
            $this->TareaModel->update_tarea(
                $this->input->post('descripcion'),
                $this->input->post('alias'),
                $this->input->post('select-responsable'),
                $this->input->post('select-observador'),
                $this->input->post('fecha_entrega'),
                date('H:i', strtotime($this->input->post('hoursend'))),
                $this->input->post('inputStados'),
                $this->session->userdata('user.id'),
                $this->input->ip_address(),
                $codigoActividades,
                $this->input->post('porcentaje'),
                $this->input->post('idHidden')
            );
        }else{
            $this->TareaModel->insertTarea(
                $this->input->post('descripcion'),
                $this->input->post('alias'),
                $this->input->post('select-responsable'),
                $this->input->post('select-observador'),
                $this->input->post('fecha_entrega'),
                date('H:i', strtotime($this->input->post('hoursend'))),
                $this->input->post('inputStados'),
                $this->session->userdata('user.id'),
                $this->input->ip_address(),
                $codigoActividades,
                $this->input->post('porcentaje')
            );
        }

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
