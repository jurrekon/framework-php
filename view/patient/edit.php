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
				<option value="Hond">Hond</option>
				<option value="Kat">Kat</option>
					<!-- foreach ($species as $race) {
						echo "<option value=\"" . $race['species'] . "\">" . $race['species'] . "</option>";
					} -->
				
			</select>
		</div>
		<div>
			<label for="gender">Gender:</label>
			<input type="radio" id="male" name="gender" value="Male">Male
			<input type="radio" id="female" name="gender" value="Female">Female
				<!-- foreach ($select_gender as $selected_gender) {
					if ($selected_gender == $patient['gender']) {
						echo "<input type=\"radio\" id=\"$selected_gender\" name=\"gender\" value=\"0\" checked=\"checked\">$selected_gender";
					} else {
						echo "<input type=\"radio\" id=\"$selected_gender\" name=\"gender\" value=\"1\">$selected_gender";
					}
				} -->
		</div>
		<div>
			<label for="name">Status:</label>
			<textarea id="status" name="status"></textarea>
		</div>
		<div>
			<label for="client">Client name:</label>
			<select name="client">
				<option value="Klaas">klaas</option>
					<!-- foreach ($clients as $client) {
						echo "<option value=\"" . $client['id'] . "\">" . $client['name'] . "</option>";
					} -->
			</select>
		</div>
		<div>
			<label></label>
			<input type="submit" value="Save">
		</div>
	</form>