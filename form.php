<form action="javascript:void(0)" name="registration-form" id ="register-form" >
	<label for="name">Name
		<input type="text" name = "name" placeholder="Full Name" required>
	</label>
	<label for="gaurdian">Father's/Husband's Name
		<input type="text" name = "gaurdian" Placeholder = "Father's/Husband's Name" required>
	</label>
	<label for="phone">Phone No.
		<input type="number" name="phone" placeholder="Phone Number" required>
	</label>
	<label for="adhaar">Adhaar Card No.
		<input type="number" pattern= "^[0-9]{12,12}$" name="adhaar" placeholder="Adhaar Card No." required>
	</label>
	<label for="city">City
		<input type="text" name = "city" placeholder="City of Residence" required>
	</label>
	<label for="address">Address
		<textarea name="address" placeholder="Address" required></textarea>
	</label>
	<input type="file" name="photo" id = "photo" accept="image/*" required>
	<label for="photo" id="image-upload">Upload Your Photo
		<span>Upload</span>
	</label>
	
	<input type="submit" name="submit" value="Generate ID">
</form>


