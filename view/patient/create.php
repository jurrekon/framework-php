<h1>New patiënt</h1>
	<form action="<?= URL ?>patient/createSave" method="post">
		<div>
			<label for="name">Name:</label>
			<input type="text" id="name" name="name">
		</div>
		<div>
			<label for="species">Species:</label>
			<select name="species">
				<?php
					foreach ($species as $specie) {
						echo "<option value=\"" . $specie['species'] . "\">" . $specie['species'] . "</option>";
					}
				?>
			</select>
		</div>
		<div>
			<label for="gender">Gender:</label>
			<input type="radio" id="male" name="gender" value="Male">Male
			<input type="radio" id="female" name="gender" value="Female">Female
		</div>
		<div>
			<label for="name">Status:</label>
			<textarea id="status" name="status"></textarea>
		</div>
		<div>
			<label for="client">Client name:</label>
			<select name="client">
				<?php
					foreach ($clients as $client) {
						echo "<option value=\"" . $client['id'] . "\">" . $client['fullname'] . "</option>";
					}
				?>
			</select>
		</div>

		<div>
			<label></label>
			<input type="submit" value="Save">
		</div>
	</form>