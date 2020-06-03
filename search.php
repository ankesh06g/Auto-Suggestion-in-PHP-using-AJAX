<?php

// Create connection
$conn = mysqli_connect("localhost", "root", "", "db1");
$sql = "SELECT * FROM employee WHERE first_name LIKE '%".$_POST['name']."%'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0){
	while ($row=mysqli_fetch_assoc($result)) {
		echo "<option val='".$row['id']."'>".
				$row['first_name']." ".$row['last_name']. "( ".
				$row['city']. " )"."</option>";
	}
}
?>