<?php
	include_once "connection.php";
	$patient_id=$_POST['patient_id'];

	$sql = "SELECT distinct(patient_id), name, medicine_advise.quantity, unit_price, medicine_advise.quantity*unit_price FROM medicine_advise, medicine WHERE patient_id = $patient_id and name = medicine_name";
	$result = $conn->query($sql);
	if ($result->num_rows> 0) {
		while ($row=$result->fetch_assoc()) {
			echo "<h4>Patient ID : " . $row['patient_id']. " - Name : " . $row["name"] ." - Quantity: " . $row["quantity"]. " - Unit Price: " .$row["unit_price"]. " - Total: " .$row["medicine_advise.quantity*unit_price"]. "Tk" ."<br></h4>";
		}
	} else {
		echo "<script>alert('0 results')</script>";
	}
	echo "<hr>";
	$conn->close();
?>