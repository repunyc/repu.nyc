<?php
	//global $wpdb;
	$con = mysqli_connect("localhost","wellsp","NikhiL@123","nk10000repu") or die('not connected');
	echo "connected".$con;

	$sql = "SELECT id, first_name, last_name FROM reg-users";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
    // output data of each row
		while($row = $result->fetch_assoc()) {
			echo "id: " . $row["id"]. " - Name: " . $row["first_name"]. " " . $row["last_name"]. "<br>";
		}
	}
	else 
	{
		echo "0 results";
	}	

?>