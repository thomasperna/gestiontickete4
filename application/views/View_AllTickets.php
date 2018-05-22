<!DOCTYPE html>
<html>
    <head>
        <title>Gestion tickets</title>
        <script type="text/javascript" src="../../JS/lesFonctions.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>JQUERY/jquery-3.1.1.min.js"></script>
        <script src="<?php echo base_url();?>Bootstrap/js/bootstrap.min.js"></script>
        <link href="<?php echo base_url(); ?>Bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>Bootstrap/css/bootstrap-theme.css" rel="stylesheet">
    </head>
    <body>
        <h1>Consultation des tickets</h1>
        <a href="<?php echo base_url(); ?>" class="btn btn-link">Home</a><br />
<table class="table table-striped">
    <tr>
    <td>Num&eacutero</td><td>Nom</td><td>Date</td><td>Niveau</td><td>Nom</td><td>Pr&eacutenom</td><td>Votre choix</td>
    </tr>
        <?php foreach($lesTickets->result() as $unTicket): ?>
        <tr>
            <td><?php echo $unTicket->idTicket ; ?></td>
            <td><?php echo $unTicket->nomTicket ; ?></td>
            <td><?php echo $unTicket->dateTicket ; ?></td>
            <td><?php echo $unTicket->niveauTicket ; ?></td>
            <td><?php echo $unTicket->nomUser ; ?></td>
            <td><?php echo $unTicket->prenomUser ; ?></td>
            <td>
                <input class="btn btn-success dropdown-toggle" type="button" value="Modifier" onclick="ModifierTicket(<?php echo $unTicket->idTicket; ?>)">
                    <!--<a class="btn btn-success dropdown-toggle" <a href="<?php echo "modifier/".$unTicket->idTicket ; ?>">Modifier</a>-->
            </td>
        </tr>
        <?php endforeach ; ?>
	
</table>
        <div id="divModificationTicket"></div>
 </body>
</html>
