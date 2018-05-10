<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["photo"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$name = $_POST["name"];
$guardian = $_POST["gaurdian"];
$phone = $_POST["phone"];
$adhaar = $_POST["adhaar"];
$city = $_POST["city"];
$address = $_POST["address"];
$newfilename = $target_dir . $adhaar . '.' . $imageFileType;

//

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["photo"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

if (file_exists($newfilename)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["photo"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $newfilename)) {

		//connectiing database and inserting rows and file name

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "shivgoraksh";

		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		// Check connection
		if (!$conn) {
		    die("Connection failed: " . mysqli_connect_error());
		}

		$sql = "INSERT INTO shivgoraksh(Name, Guardian, Phone, Adhaar, City, Address, Image) VALUES ('$name', '$guardian', '$phone', '$adhaar', '$city', '$address', '$newfilename')";

		if (mysqli_query($conn, $sql)) {
		    echo "<div class='id-container'><header>";
			echo	"<p class='regard'>!!!Shiv Goraksh!!!</p>";
			echo	"<img src='images/thakurnath.jpg' />";
			echo	"<div class='welcome'>";
			echo		"<p class='trustName'>Shri Somnath Dham Agra</p>";
			echo	"</div>";
			echo "</header>";
			echo "<div class='card'>";
			echo	"<div class='tr'><label>ID:" . $adhaar . "</label>";
			echo	"<img class = 'idcard' src = '" . $newfilename . "' /></div>";
			echo	"<div class='tr'><label>Name:</label><p>" . $name . "</p></div>";
			echo	"<div class='tr'><label>Father/Husband:</label><p>" . $guardian . "</p></div>";
			echo	"<div class='tr'><label>Phone:</label><p>" . $phone . "</p></div>";
			echo	"<div class='tr'><label>City:</label><p>" . $city . "</p></div>";
			echo "</div></div>";
			echo "<a href = 'javascript:void(0)' class='generate-preview'>Download</a>";


			echo "<p class='disclamer'>Download you ID card, take a print of same and bring along in Varshik Utsav 2018</p>";
		} else {
		    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

		mysqli_close($conn);


    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>