<h1>New client</h1>
	<form action="<?= URL ?>client/createSave" method="post">
		<div>
			<label for="fullname">Full name:</label>
			<input type="text" id="fullname" name="fullname">
		</div>
		<div>
			<label for="street">Street:</label>
			<input type="text" id="street" name="street">
		</div>
		<div>
			<label for="city">City:</label>
			<input type="text" id="city" name="city">
		</div>
		<div>
			<label for="zipcode">Zipcode:</label>
			<input type="text" id="zipcode" name="zipcode">
		</div>
		<div>
			<label></label>
			<input type="submit" value="Save">
		</div>
	</form>