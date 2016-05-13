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

    function __construct($session,$load)
    {
        $this->session = $session;
        $this->load = $load;
    }

    public function setView($actualView){

        $this->actualView = $actualView;

        $data = array(
            'view.active' => $this->actualView
        );

        $this->session->set_userdata($data);
    }



    public function renderView($data = '')
    {
        switch ($this->session->userdata('view.active')) {
            case $this->welcome:
                 echo($this->load->view('dashboard-welcome', $data, TRUE));
        break;
            case $this->profileUser:
                echo $this->load->view('dashboard-user-profile', $data, TRUE);
        break;
            case $this->updateProfileUser:
                echo $this->load->view('dashboard-user-profile-update', $data, TRUE);
        break;
            default:
                echo($this->load->view('dashboard-welcome', $data, TRUE));
        }
    }

}