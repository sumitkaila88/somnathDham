<?php include_once 'head.php'; ?>

	<!-- navigation will come here later -->
		<article class="register">
			<h2>List of ID cards</h2>
				<div class="registered-list">
		
				<?php
					$servername = "localhost";
					$username = "root";
					$password = "";
					$dbname = "shivgoraksh";

					// Create connection
					$conn = mysqli_connect($servername, $username, $password, $dbname);
					if (!$conn) {
					    die('Could not connect: ' . mysqli_error($conn));
					}

					mysqli_select_db($conn,"shivgoraksh");

					$search = $_POST["search"];
					$sql="SELECT * FROM shivgoraksh WHERE Phone = $search";
					$result = mysqli_query($conn,$sql);
					if(mysqli_query($conn,$sql)){
						while($row = mysqli_fetch_array($result)) {
						        echo "<div class='id-container'><header>";
								echo	"<p class='regard'>!!!Shiv Goraksh!!!</p>";
								echo	"<img src='images/thakurnath.jpg' />";
								echo	"<div class='welcome'>";
								echo		"<p class='trustName'>Shri Somnath Dham Agra</p>";
								echo	"</div>";
								echo "</header>";
								echo "<div class='card'>";
								echo	"<div class='tr'><label>ID:" . $row['Adhaar'] . "</label>";
								echo	"<img class = 'idcard' src = '" . $row['Image'] . "' /></div>";
								echo	"<div class='tr'><label>Name:</label><p>" . $row['Name'] . "</p></div>";
								echo	"<div class='tr'><label>Father/Husband:</label><p>" . $row['Guardian'] . "</p></div>";
								echo	"<div class='tr'><label>Phone:</label><p>" . $row['Phone'] . "</p></div>";
								echo	"<div class='tr'><label>City:</label><p>" . $row['City'] . "</p></div>";
								echo "</div></div>";
								echo "<a href = 'javascript:void(0)' class='generate-preview'>Download</a>";
						}
								echo "<p class='disclamer'>Download you ID card, take a print of same and bring along in Varshik Utsav 2018</p>";
					}
					else {
						echo "<p class='disclamer'>Sorry no records found with this phone number, try another</p>";
					}
					mysqli_close($conn);

					?>
				 
	</div>

		</article>



<?php include_once 'footer.php'; ?>