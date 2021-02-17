<?php
 // Include config file
 require_once "connect.php";


 $cid=$_GET['vid'];
 echo $cid;

 $sql = "DELETE FROM tblvehicle WHERE id=$cid";

 if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Buyer Details has been Deleted');</script>";
    echo "<script>window.location.href ='index.php'</script>";
  } else {
    echo "<script>alert('Buyer Details Not been Deleted');</script>". $conn->error;
    echo "<script>window.location.href ='manage-incomingvehicle.php'</script>";
  }
  
  $conn->close();
  ?>
