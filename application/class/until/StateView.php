<?php

/**
 * Created by IntelliJ IDEA.
 * User: leonel
 * Date: 10/05/16
 * Time: 10:52
 */
class StateView
{

    private $actualView;

    private $session;
    private $load;

    private $welcome = 1;
    private $profileUser = '2';
    private $updateProfileUser = '3';
    private $profileUserList = '4';
    private $profileDelete = '5';
    private $profileAdd = '6';
    private $projectAdd = '7';
    private $dashboardProjectAdmin = '8';
    private $dashboardUserInvolved = '9';
    private $createMeta = '10';
    private $createActividad = '11';
    private $createTarea = '12';
    private $createObjetivo = '13';
    private $listProjecto = '14';
    private $listActividad = '15';
    private $listMeta = '16';
    private $listObjetivo = '17';
    private $listTarea = '18';
    private $listsTareas = '19';
    private $configureCompany = '20';


    function __construct($session, $load)
    {
        $this->session = $session;
        $this->load = $load;
    }

    public function setView($actualView)
    {

        $this->actualView = strval($actualView);

        $data = array(
            'view.active' => $this->actualView
        );
        $this->session->set_userdata($data);
    }


    public function renderView($data = '')
    {
        switch (strval($this->session->userdata('view.active'))) {
            case $this->welcome:
                echo($this->load->view('dashboard-welcome', $data, TRUE));
                break;
            case $this->profileUser:
                echo $this->load->view('dashboard-user-profile', $data, TRUE);
                break;
            case $this->updateProfileUser:
                
                echo $this->load->view('dashboard-user-profile-update', $data, TRUE);
                break;
            case $this->profileUserList:
                echo $this->load->view('dashboard-user-list', $data, TRUE);
                break;
            case $this->profileDelete:
                echo $this->load->view('dashboard-user-remove', $data, TRUE);
                break;
            case $this->profileAdd:
                echo $this->load->view('dashboard-user-add', $data, TRUE);
                break;
            case $this->projectAdd:
                echo $this->load->view('dashboard-project-new', $data, TRUE);
                break;
            case $this->dashboardProjectAdmin:
                echo $this->load->view('dashboard-project-admin', $data, TRUE);
                break;
            case $this->dashboardUserInvolved:
                echo $this->load->view('dashboard-user-involved', $data, TRUE);
                break;
            case $this->createMeta:
                echo $this->load->view('createMeta', $data, TRUE);
                break;
            case $this->createActividad:
                echo $this->load->view('createActividad', $data, TRUE);
                break;
            case $this->createTarea:
                echo $this->load->view('createTarea', $data, TRUE);
                break;
            case $this->createObjetivo:
                echo $this->load->view('createObjetivo', $data, TRUE);
                break;
            case $this->listProjecto:
                echo $this->load->view('listProjecto', $data, TRUE);
                break;
            case $this->listActividad:
                echo $this->load->view('listActividad', $data, TRUE);
                break;
            case $this->listMeta:
                echo $this->load->view('listMeta', $data, TRUE);
                break;
            case $this->listObjetivo:
                echo $this->load->view('listObjetivo', $data, TRUE);
                break;
            case $this->listTarea:
                echo $this->load->view('listTarea', $data, TRUE);
                break;
            case $this->listsTareas:
                echo $this->load->view('listsTareas', $data, TRUE);
                break;
            case $this->configureCompany:
                echo $this->load->view('configure-company', $data, TRUE);
                break;
            default:
                echo($this->load->view('dashboard-welcome', $data, TRUE));
        }
    }

}
 