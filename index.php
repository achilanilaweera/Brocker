
<!DOCTYPE html>
<html lang="en">
<?php require_once('check_login.php');?>
<?php include('head.php');?>
<?php include('header.php');?>
<?php include('sidebar.php');?>


                                  
 <?php 
 include('connect.php');
  $sql = "select * from admin where id = '".$_SESSION["id"]."'";
        $result=$conn->query($sql);
        $row1=mysqli_fetch_array($result);
       
            $q = "select * from tbl_permission_role where role_id='".$row1['role_id']."'";
            $ress=$conn->query($q);
            //$row=mysqli_fetch_all($ress);
             $name = array();
            while($row=mysqli_fetch_array($ress)){
          $sql = "select * from tbl_permission where id = '".$row['permission_id']."'";
        $result=$conn->query($sql);
        $row1=mysqli_fetch_array($result);
             array_push($name,$row1[1]);
             }
             $_SESSION['name']=$name;
             $useroles=$_SESSION['name'];

$ret=mysqli_query($conn,"select count(ID) as id4 from tblcategory where sale='Sold'");
 $row4=mysqli_fetch_array($ret);  

$ret=mysqli_query($conn,"select count(ID) as id1 from tblcategory ");
 $row=mysqli_fetch_array($ret);  
 //echo $row;exit;                
$ret=mysqli_query($conn,"select count(ID) as id2 from tblvehicle ");
 $row2=mysqli_fetch_array($ret); 

 $ret=mysqli_query($conn,"select count(ID) as id3 from tbl_broker ");
 $row3=mysqli_fetch_array($ret); 

 $ret=mysqli_query($conn,"select count(ID) id1 from   tblcategory where sale='F'");
$row5=mysqli_fetch_array($ret);

$ret=mysqli_query($conn,"select count(ID) id2 from   tblcategory where sale='Sold'");
 $row6=mysqli_fetch_array($ret);
 ?>   

<!--  Author Name: Mayuri K. 
 for any PHP, Codeignitor or Laravel work contact me at mayuri.infospace@gmail.com  -->
<div class="pcoded-content">
<div class="pcoded-inner-content">
<div class="main-body">
<div class="page-wrapper full-calender">
<div class="page-body">
<div class="row">


<?php if(isset($useroles)){  if(in_array("clients_statistics",$useroles)){ ?>
<div class="col-xl-3 col-md-6">
<div class="card bg-c-green update-card">
<div class="card-block">
<div class="row align-items-end">
<div class="col-8">

<h4 class="text-white"><?php echo $row4['id4']; ?></h4>
<h6 class="text-white m-b-0">Sold Lands</h6>
</div>
<div class="col-4 text-right">
<canvas id="update-chart-2" height="50"></canvas>
</div>
</div>
</div>
</div>
</div>
<?php } } ?> 

<?php if(isset($useroles)){  if(in_array("invoices_statistics",$useroles)){ ?>
<div class="col-xl-3 col-md-6">
<div class="card bg-c-pink update-card">
<div class="card-block">
<div class="row align-items-end">
<div class="col-8">

<h4 class="text-white"><?php echo $row['id1']; ?></h4>
<h6 class="text-white m-b-0">Total Lands</h6>
</div>
<div class="col-4 text-right">
<canvas id="update-chart-3" height="50"></canvas>
</div>
</div>
</div>
</div>
</div>
<?php } } ?> 



<div class="col-xl-3 col-md-6">
<div class="card bg-c-lite-green update-card">
<div class="card-block">
<div class="row align-items-end">
<div class="col-8">

<h4 class="text-white"><?php echo $row2['id2']; ?></h4>
<h6 class="text-white m-b-0">Registerd Buyers</h6>
</div>
<div class="col-4 text-right">
<canvas id="update-chart-4" height="50"></canvas>
</div>
</div>
</div>
</div>
</div>


<!--  Author Name: Mayuri K. 
 for any PHP, Codeignitor or Laravel work contact me at mayuri.infospace@gmail.com  -->
<?php if(isset($useroles)){  if(in_array("repairs_statistics",$useroles)){ ?>
<div class="col-xl-3 col-md-6">
<div class="card bg-c-yellow update-card">
<div class="card-block">
<div class="row align-items-end">
<div class="col-8">

<h4 class="text-white"><?php echo $row3['id3']; ?></h4>
<h6 class="text-white m-b-0">Registerd Brokers</h6>
 </div>
<div class="col-4 text-right">
<canvas id="update-chart-1" height="50"></canvas>

</div>
</div>
</div>
</div>
</div>
<?php } } ?> 

<div class="card col-xl-7 col-md-6 m-t-3">
  
<div class="table-responsive dt-responsive m-t-50">
<table id="dom-jqry" class="table table-striped table-bordered nowrap">
<thead>
<tr>
                                            <th>ID</th>
                                            <th>Land Name</th>
                                            <th>Owner Name</th>
                                            <th>Staus</th> 
                                            
                                        </tr>
</thead>
 <?php
                                $ret=mysqli_query($conn,"select *from   tblcategory where sale='Sold'");
                                $cnt=1;
                                while ($row=mysqli_fetch_array($ret)) {
                                ?> 
<tbody>
  <tr>
            <td><?php echo $cnt;?></td> 
                                    <td><?php  echo $row['land_cat'];?></td>
                                    <td><?php  echo $row['owner'];?></td>
                                    <td><?php  echo $row['sale'];?></td> 
                                    
        </tr>
    
</tbody>
 <?php 
                                $cnt=$cnt+1;
                                }?>
</table>
</div>
</div>
<div class="card col-xl-5 col-md-6 ">
  <div class="card-header">
  <h3>Land Status Graph</h3>
  </div> 
    <div class="container m-t-50" id="invoice">
<div>
<canvas id="myChart" style="margin-top:5%;"></canvas>
</div>
</div>
</div>







</div>
</div>
</div>
</div>
</div>

<script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.2.2/Chart.min.js'></script>
<script>
var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
type: 'pie',
data: {
labels: ["Pending Lands","Sold Lands"],
datasets: [{
backgroundColor: ["#47EC3B","#8B5DA2"],
data: [<?php echo $row5['id1']; ?>,<?php echo $row6['id2']; ?>]
}]
}
});
</script>

<!--  Author Name: Mayuri K. 
 for any PHP, Codeignitor or Laravel work contact me at mayuri.infospace@gmail.com  -->

<?php include('footer.php');?>

