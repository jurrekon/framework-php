<h1>Edit species</h1>
	<form action="<?= URL ?>species/editSave" method="post">
		<div>
			<input type="hidden" name="id" value="<?=$species[0]['id']?>">
			<label for="species">Species:</label>
			<input type="text" id="species" name="species" value="<?=$species[0]['species']?>">
		</div>
		<div>
			<label></label>
			<input type="submit" value="Save">
		</div>
	</form>