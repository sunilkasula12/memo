<?php
include  ("db_conn.php");

$result=mysqli_query($conn,"SELECT * FROM db_data");
	
	
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
echo "<pre>";
	
	 $memo = "DD-".$row['ID'];
   $id = $row['ID'];
	  
mysqli_query($conn,"UPDATE db_data SET MEMO_NO='$memo' WHERE ID='$id'");
    echo "Success";
  }
} else {
  echo "0 results";
}
exit;