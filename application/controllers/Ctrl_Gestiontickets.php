<?php
class Ctrl_Gestiontickets extends CI_Controller{
    public function index()
    {
        $this->load->view("v_Connexion");
        //$this->load->view("v_Admin");
          
    }
    public function verificationLogin()
    {
        $idUser=$_GET['loginUser'];
        $idUser=$_POST['pwdUser'];
//        $this->load->model(Model_Connexion);
//        $this->load->view(v_Admin);
    }
    public function afficherAdmin(){
        
            $this->load->view("v_Admin");
    }
}



