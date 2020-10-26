<?php
 // Include config file
 require_once "connect.php";


 $cid=$_GET['bid'];
 echo $cid;

 $sql = "DELETE FROM tbl_broker WHERE id=$cid";

 if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Broker Details has been Deleted');</script>";
    echo "<script>window.location.href ='manage-brokers.php'</script>";
  } else {
    echo "<script>alert('Broker Details Not been Deleted');</script>". $conn->error;
    echo "<script>window.location.href ='manage-brokers.php'</script>";
  }
  
  $conn->close();
  ?>