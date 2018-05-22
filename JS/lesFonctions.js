//function VerifierUser(login, mdp)
//{
//    //alert(login + " - " + mdp);
//    $.ajax(
//    {
//        type:"post",
//        url:"index.php/Ctrl_Ticket/VerifierUser",
//        data:"login="+login+"&mdp="+mdp,
////        success:function(data)
////        {
//////            $('#divFormations').empty();
//////            $('#divFormations').append(data);
////        },
////        error:function()
////        {
////            alert('Erreur SQL');
////        }
//    }
//    );
//}

function ModifierTicket(idTicket)
{
    $.ajax(
    {
        type:"get",
        url:"modifier",
        data:"idTicket="+idTicket,
        success:function(data)
        {
            $('#divModificationTicket').empty();
            $('#divModificationTicket').append(data);
        },
        error:function()
        {
            alert('Erreur SQL');
        }
    }
    );
}