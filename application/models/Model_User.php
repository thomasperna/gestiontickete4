<?php
class Model_User extends CI_Model
{
    function getVerifierUser($login,$mdp)
    {
        $query = "select loginUser, pwdUser from users where loginUser='".$login."' and pwdUser='".$mdp."'";
        $result = $this->db->query($query);
        if ($result->result())
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }		
    }
    function getStatut($login,$mdp)
    {
        $infos = array('login'=>$login,'mdp'=>$mdp);
        $this->session->set_userdata($infos);
//         echo ("statut User = ".$this->session->userdata('login'));
//                    echo "<br>";
//        
//        echo ("statut = ".$login)."<br>";
//        echo ("statut = ".$mdp)."<br>";
        $query = "select idUser, statutUser from users where loginUser='".$login."' and pwdUser='".$mdp."'";
        $result = $this->db->query($query);
        $data = array();
        foreach($result->result() as $row)
        {
            $data[]=$row;
        }
        return $data;
        //return $result->result();
    }
    function getAllUsers()
    {
        return $this->db->get('users');
    }
}
?>