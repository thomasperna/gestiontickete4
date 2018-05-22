<?php
class Ctrl_Ticket extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_User');
        $this->load->model('Model_Ticket');
    }

    function index()
    {
        $this->load->view('Home');
    }

    function VerifierUser()
    {
        $login = $_POST['txtLogin'];
        $mdp = $_POST['txtMdp'];
        $trouve = $this->Model_User->getVerifierUser($login,$mdp);
        if($trouve)
        {
            $infos = array('login'=>$login,'mdp'=>$mdp);
            $this->session->set_userdata($infos);
            // L'utilisateur existe MAIS avec quel statut ?'
            $this->afficherLesTickets($login,$mdp);  
        }
        else
        {
            $erreur = array('erreur'=>'Identifiants (login ou mot de passe) incorrects');
            $this->session->set_userdata($erreur);
            
            $this->load->view('Home');
            //echo "Identifiants (login ou mot de passe) incorrects";
        }
    }

    function modifier()
    {
        $idTicket = $_GET['idTicket'];
        $ticket['ticket'] = $this->Model_Ticket->getTicketById($idTicket);
        $ticket['lesUsers'] = $this->Model_User->getAllUsers();
        $this->load->view('View_OneTicket',$ticket);
    }

    function modifierUnTicket()
    {
        $data['idTicket'] = $_POST['txtId'];
        $data['dateTicket'] = $_POST['txtDate'];
        $data['idUser'] = $_POST['lstUsers'];
        $data['niveauTicket'] = $_POST['lstNiveaux'];
        $this->Model_Ticket->updateTicket($_POST['txtId'],$data);
        $this->afficherLesTickets($this->session->userdata('login'),$this->session->userdata('mdp'));
    }

    function afficherLesTickets($unLogin,$unMdp)
    {
        $data = $this->Model_User->getStatut($unLogin,$unMdp);
        $statut = array('statut'=>$data[0]->statutUser);
        $this->session->set_userdata($statut);
        
        if($data[0]->statutUser =='admin')
        {
                $lesTickets['lesTickets'] = $this->Model_Ticket->getAllTickets();
                //$lesTickets['statut'] = "admin";
                //echo 'ADMIN'."<br>";
                //echo var_dump($lesTickets);
        }
        else
        {
                $lesTickets['lesTickets'] = $this->Model_Ticket->getTicketsByUser($data[0]->idUser);
                //$lesTickets['statut'] = "user";
        }
        $this->load->view('View_AllTickets',$lesTickets);
    }
    function creerTicket(){
        $data;
    }
}
?>