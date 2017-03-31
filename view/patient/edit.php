<?php
	$select_gender = array('Male', 'Female');
?>
<h1>Edit patiënt</h1>
	<form action="<?= URL ?>patient/editSave" method="post">
		<div>
			<input type="hidden" name="id" value="<?=$patients[0]['id']?>">
			<label for="name">Name:</label>
			<input type="text" id="name" name="name" value="<?=$patients[0]['name']?>">
		</div>
		<div>
			<label for="species">Species:</label>
			<select name="species">
				<?php
					foreach ($species as $specie) {
						if($specie['species'] == $patients[0]['species']){
							echo "<option selected=\"selected\" value=\"" . $specie['species'] . "\">" . $specie['species'] . "</option>";
						} else {
							echo "<option value=\"" . $specie['species'] . "\">" . $specie['species'] . "</option>";
						}
					}
				?>
			</select>
		</div>
		<div>
			<label for="gender">Gender:</label>
			<?php
					if ("Male" == $patients[0]['gender']) {
						echo "<input type=\"radio\" id=\"male\" name=\"gender\" value=\"Male\" checked=\"checked\">Male";
						echo "<input type=\"radio\" id=\"female\" name=\"gender\" value=\"Female\">Female";
					} else {
						echo "<input type=\"radio\" id=\"male\" name=\"gender\" value=\"Male\">Male";
						echo "<input type=\"radio\" id=\"female\" name=\"gender\" value=\"Female\" checked=\"checked\">Female";
					}
			?>
		</div>
		<div>
			<label for="name">Status:</label>
			<textarea id="status" name="status"><?=$patients[0]['status']?></textarea>
		</div>
		<div>
			<label for="client">Client name:</label>
			<select name="client">
				<?php
					foreach ($clients as $client) {
						if($client['id'] == $patients[0]['client_id']){
							echo "<option selected=\"selected\" value=\"" . $client['id'] . "\">" . $client['fullname'] . "</option>";
						} else {
							echo "<option value=\"" . $client['id'] . "\">" . $client['fullname'] . "</option>";
						}
					}
				?>
			</select>
		</div>
		<div>
			<label></label>
			<input type="submit" value="Save">
		</div>
	</form>