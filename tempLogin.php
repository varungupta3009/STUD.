<?php
if(isset($_POST['SRN'])) {
	$srn = $_POST['SRN'];
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "STUD";
// Create connection
$connection = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
$query = mysqli_query($connection, "SELECT * FROM studentDetails WHERE SRN = '$srn';");
		$rows = mysqli_num_rows($query);
		if($rows == 1)
		{
      $row = mysqli_fetch_assoc($query);
      echo "Name: " . $row["Name"] . "<br>Section: " . $row["Section"] . "<br><br>";
			header("profilePage.html"); //redirecting to other page
		}
		else
		{
						$error = "SRN is invalid";
		}
		mysqli_close($connection);
?>
