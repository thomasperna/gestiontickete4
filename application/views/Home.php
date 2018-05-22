<!DOCTYPE html>
<html>
    <head>
        <title>Gestion tickets</title>
        <script type="text/javascript" src="<?php echo base_url();?>JS/lesFonctions.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>JQUERY/jquery-3.1.1.min.js"></script>
        <script src="<?php echo base_url();?>Bootstrap/js/bootstrap.min.js"></script>
        <link href="<?php echo base_url(); ?>Bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>Bootstrap/css/bootstrap-theme.css" rel="stylesheet">
    </head>
    <body>
        <?php
            if($this->session->has_userdata('erreur'))
            {
        ?>
        <div id="divErreur" class="alert alert-warning">
            <h3 ><?php echo $this->session->userdata('erreur'); $this->session->unset_userdata('erreur'); ?></h3>
        </div>
        <?php
            }
        ?>
        
        <form method="post" action="<?php echo base_url();?>index.php/Ctrl_Ticket/VerifierUser">
        <h1>Gestion tickets ==> connexion</h1>
            <table class=".table-bordered">
                <tr>
                    <td><img alt="" src="<?php echo base_url().'Images/Securite.jpg';?>"/></td>
                    <td class="col-lg-1"></td>
                    <td>
                            <label>Login</label><br />
                            <input id="txtLogin" type="text" name="txtLogin"><br /><br/>
                            <label>Mot de passe</label><br />
                            <input id="txtMdp" type="text" name="txtMdp"><br /><br/>
                            <input class="btn btn-success" style="width: 180px" type="submit" value="Envoyer" name="cmdEnvoyer">
                            
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>


<!--VerifierUser($('#txtLogin').val(),$('#txtMdp').val())-->