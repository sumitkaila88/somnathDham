<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, height=device-height">
	<title>Shiv Goraksh - Shri Somnath Dham Agra</title>
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<link rel="icon" href="/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="css/style.css">
	<script src="js/jquery.min.js"></script>
</head>
<body>

	<!-- navigation will come here later -->
	<div class="image-container">
		<h1>Shiv Goraksh - Shri Somnath Dham</h1>
		<article class="register">
			<h2>Varshik Utsav Registration</h2>
			<form action="#">
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
					<input type="number" name="adhaar" placeholder="Adhaar Card No." required>
				</label>
				<label for="city">City
					<input type="text" name = "city" placeholder="City of Residence" required>
				</label>
				<label for="address">Address
					<textarea name="address" placeholder="Address" required></textarea>
				</label>
				<label for="photo" id="image-upload">Upload Your Photo
					<input type="file" name = "photo" accept="image/*">
					<button id = "upload" type = "button" class="browse">Upload</button>
				</label>
				<input type="submit" name="submit" value="Generate ID">
			</form>

		</article>
		
		<footer>
			<p>&copy; 2018 Shri Somnath Dham Agra. All rights Reserved</p>
		</footer>
	</div>

	<!-- footer will come here after adding other components on the page -->
	<script src="js/scripts.js"></script>
</body>
</html>