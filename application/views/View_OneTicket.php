<hr>
<h1>Modification du ticket</h1>
<form action="<?php echo base_url().'index.php/Ctrl_Ticket/modifierUnTicket' ; ?>" method="post">
<table class="table table-striped">
	<tr>
	<td>Nom</td><td>Date</td><td>Niveau</td><td>D&eacuteveloppeur</td><td>Votre choix</td>
	</tr>
		<?php foreach($ticket->result() as $unTicket): ?>
		<tr>
			<td hidden="hidden"><input name="txtId" value="<?php echo $unTicket->idTicket ; ?>"></td>
                        <td><input type="text" disabled="disabled"  value="<?php echo $unTicket->nomTicket ; ?>" name="txtNom"/></td>
			<td><input type="date" value="<?php echo $unTicket->dateTicket ; ?>" name="txtDate"/></td>
			<td>
				<select name="lstNiveaux">
					<?php 
						if ($unTicket->niveauTicket == "Mineur") 
						{
					?>
						<option value="Mineur" selected="">Mineur
						<option value="Majeur">Majeur
						<option value="Bloquant">Bloquant
					<?php		
						}
					?>		
					<?php 
						if ($unTicket->niveauTicket == "Majeur") 
						{
					?>
						<option value="Mineur">Mineur
						<option value="Majeur" selected="">Majeur
						<option value="Bloquant">Bloquant
					<?php		
						}
					?>
					<?php 
						if ($unTicket->niveauTicket == "Bloquant") 
						{
					?>
						<option value="Mineur">Mineur
						<option value="Majeur">Majeur
						<option value="Bloquant" selected="">Bloquant
					<?php		
						}
					?>
				</select>	
			</td>
			
			<td>
                            <?php if($this->session->userdata('statut')=="admin")
                                //$this->session->userdata('name');
                            {
                                echo "<select name='lstUsers'>";
                            }
                            else
                            {
                                echo "<select name='lstUsers' disabled>";
                            }
                                
                                ?>
                           
					<?php foreach($lesUsers->result() as $unUser): ?>
						<?php if($unTicket->idUser == $unUser->idUser){ ?>
						<option selected="" value="<?php echo $unUser->idUser ; ?>"><?php echo $unUser->nomUser ; ?>
						<?php } else { ?>
						<option value="<?php echo $unUser->idUser ; ?>"><?php echo $unUser->nomUser ; ?>
						<?php } ?>
					<?php endforeach ; ?>
				</select>
			</td>
			<td>
			<input type="submit" value="Modifier" class="btn btn-success dropdown-toggle"/>
			</td>
		</tr>
		<?php endforeach ; ?>
	
</table>
</form>