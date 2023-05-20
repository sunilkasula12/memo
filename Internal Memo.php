
<?php
include  ("db_conn.php");
include ("nav.php");

?>


<!doctype html>
<html>
<head>
<title>Prime Commerical Bank Ltd</title>

</head>

<body>
<center><h2>Internal Memo</h2></center>
<center><h2>Request for Internal Memo Number</h2></center>
    
<Form class="form" action="" method="POST">
				<label for="DATE">DATE:</label>
				<input type="DATE" name="DATE" id="DATE"><br><br>
				<label for="SUBJECT">SUBJECT :</label>
				<input type="text" id="SUBJECT" name="SUBJECT"required><br><br>
				<label for="UNIT">UNIT :</label>
				<select name="UNIT" id="UNIT">
					<option value=" " selected disabled hidden></option>
					<option value="Card Issuance" >Card Issuance</option>
					<option value="Card Reconciliation & Settlement" >Card Reconciliation & Settlement</option>
					<option value="Credit Card" >Credit Card</option>	
					<option value="Mobile Banking" >Mobile Banking</option>
					<option value="Quick Response (QR)" >Quick Response (QR)</option>
					<option value="Point Of Sales (Pos)" >Point Of Sales (Pos)</option>
					<option value="Remittance Recon & Settlement" >Remittance Recon & Settlement</option>
					<option value="Credit Memo Tracking System (CMTS)" >Credit Memo Tracking System (CMTS)</option>

				</select><br><br>
				 <label for="Type"> Type</label>
				 <input type="radio" name="TYPE" value="Operations" required> Operations
				 <input type="radio" name="TYPE" value="Project" required> Project
				  <br><br>
				  <button type="Submit" name="Submit" value="Submit">Submit</button>
				<!--    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;   -->
				  <button type="Reset" name="Reset">Reset</button>
				  </Form>
				  
</body>
</html>

<?php

if(isset($_POST["Submit"]))
{
	$USER_NAME = $_SESSION['name'];
$DATE = $_POST["DATE"];
$SUBJECT = $_POST["SUBJECT"];
$UNIT = $_POST["UNIT"];
$TYPE = $_POST["TYPE"];



$query ="INSERT INTO db_data
VALUES ('','$USER_NAME','$DATE','$SUBJECT','$UNIT','$TYPE','','','')";


   if($conn->query($query) == FALSE)
    {
    die("Error: ".$conn->error);
    }
	$memo = "DD-".$conn->insert_id;
	
mysqli_query($conn,"UPDATE db_data SET MEMO_NO='$memo' WHERE ID='$conn->insert_id'");
	
    echo "Succeesfully Registered <br> Memo Register No.DB/".$conn->insert_id;
	
$conn->close();
}

?>



