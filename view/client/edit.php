<h1>Edit client</h1>
	<form action="<?= URL ?>client/editSave" method="post">
		<div>
			<input type="hidden" name="id" value="<?=$clients[0]['id']?>">
			<label for="fullname">Full name:</label>
			<input type="text" id="fullname" name="fullname" value="<?=$clients[0]['fullname']?>">
		</div>
		<div>
			<label for="street">Street:</label>
			<input type="text" id="street" name="street" value="<?=$clients[0]['street']?>">
		</div>
		<div>
			<label for="city">City:</label>
			<input type="text" id="city" name="city" value="<?=$clients[0]['city']?>">
		</div>
		<div>
			<label for="zipcode">Zipcode:</label>
			<input type="text" id="zipcode" name="zipcode" value="<?=$clients[0]['zipcode']?>">
		</div>
		<div>
			<label></label>
			<input type="submit" value="Save">
		</div>
	</form>