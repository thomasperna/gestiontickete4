<?php
class Model_Ticket extends CI_Model
{
    function getAllTickets()
    {
        $query = "select idTicket,nomTicket,dateTicket,niveauTicket,nomUser,prenomUser from tickets, users where tickets.idUser = users.idUser order by tickets.idTicket";
        return $this->db->query($query);
    }

    function getTicketsByUser($idUser)
    {
        $query = "select idTicket,nomTicket,dateTicket,niveauTicket,nomUser,prenomUser from tickets, users where tickets.idUser = users.idUser and tickets.idUser=".$idUser. " order by tickets.idTicket";
        return $this->db->query($query);
    }
    function getTicketById($id)
    {
        $this->db->where('idTicket',$id);
        return $this->db->get('tickets');
    }
    function updateTicket($id,$data)
    {
        $this->db->where('idTicket', $id);  
        if ($this->db->update('tickets', $data)) 
        {    
            return true;  
        } 
        else 
        {    
            return false;  
        } 
    }
}
?>

