<?php
class Model_Connexion extends CI_Model{
    public function verificationLogin(){
        $sql=$this->db->query("select loginUser, pwdUser from user");
        
        }
        
    public function getAllTickets(){
        $sql=$this->db->query("select * from tickets");
    }
    }





