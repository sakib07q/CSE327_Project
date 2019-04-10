<?php
	
	
	include_once "connection.php";
	$supplier_id = $_POST['id'];
	$first_name = $_POST['first_name'];
	$middle_name = $_POST['middle_name'];
	$last_name = $_POST['last_name'];
	$date_of_supply = $_POST['DOS'];
	$medicine_id = $_POST['medicine_id'];
	$medicine_name = $_POST['medicine_name'];
	$type = $_POST['type'];
	$unit_price = $_POST['unit_price'];
	$quantity = $_POST['quantity'];
	$date_of_manufacture = $_POST['DOM'];
	$date_of_expire = $_POST['DOE'];
	$medicine_id1 = $_POST['medicine_id1'];
	$medicine_name1 = $_POST['medicine_name1'];
	$type1 = $_POST['type1'];
	$unit_price1 = $_POST['unit_price1'];
	$quantity1 = $_POST['quantity1'];
	$date_of_manufacture1 = $_POST['DOM1'];
	$date_of_expire1 = $_POST['DOE1'];
	$medicine_id2 = $_POST['medicine_id2'];
	$medicine_name2 = $_POST['medicine_name2'];
	$type2 = $_POST['type2'];
	$unit_price2 = $_POST['unit_price2'];
	$quantity2 = $_POST['quantity2'];
	$date_of_manufacture2 = $_POST['DOM2'];
	$date_of_expire2 = $_POST['DOE2'];
	$medicine_id3 = $_POST['medicine_id3'];
	$medicine_name3 = $_POST['medicine_name3'];
	$type3 = $_POST['type3'];
	$unit_price3 = $_POST['unit_price3'];
	$quantity3 = $_POST['quantity3'];
	$date_of_manufacture3 = $_POST['DOM3'];
	$date_of_expire3 = $_POST['DOE3'];
	$medicine_id4 = $_POST['medicine_id4'];
	$medicine_name4 = $_POST['medicine_name4'];
	$type4 = $_POST['type4'];
	$unit_price4 = $_POST['unit_price4'];
	$quantity4 = $_POST['quantity4'];
	$date_of_manufacture4 = $_POST['DOM4'];
	$date_of_expire4 = $_POST['DOE4'];
	$query = "INSERT INTO supplier (supplier_id, first_name, middle_name, last_name, date_of_supply) 
		VALUES ('".$supplier_id."','".$first_name."', '".$middle_name."','".$last_name."','".$date_of_supply."')";
	$query1 = "INSERT INTO medicine (supplier_id, medicine_id, medicine_name, type, unit_price, quantity, date_of_manufacture, expire_date) 
		VALUES('".$supplier_id."','".$medicine_id."', '".$medicine_name."', '".$type."', '".$unit_price."', '".$quantity."', 
				'".$date_of_manufacture."', '".$date_of_expire."'), 
			  ('".$supplier_id."','".$medicine_id1."', '".$medicine_name1."', '".$type1."', '".$unit_price1."', '".$quantity1."', 
				'".$date_of_manufacture1."', '".$date_of_expire1."'),
			  ('".$supplier_id."','".$medicine_id2."', '".$medicine_name2."', '".$type2."', '".$unit_price2."', '".$quantity2."', 
				'".$date_of_manufacture2."', '".$date_of_expire2."'),
			  ('".$supplier_id."','".$medicine_id3."', '".$medicine_name3."', '".$type3."', '".$unit_price3."', '".$quantity3."', 
				'".$date_of_manufacture3."', '".$date_of_expire3."'),
              ('".$supplier_id."','".$medicine_id4."', '".$medicine_name4."', '".$type4."', '".$unit_price4."', '".$quantity4."', 
				'".$date_of_manufacture4."', '".$date_of_expire4."')";

	if ($conn->query($query) === TRUE && $conn->query($query1) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: ";
	}
	$conn->close();
	
?> 

