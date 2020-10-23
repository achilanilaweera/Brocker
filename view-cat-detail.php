<?php require_once('check_login.php');?>
<?php include('head.php');?>
<?php include('header.php');?>
<?php include('sidebar.php');?>
<?php include('connect.php');
if(isset($_POST['submit']))
  {
    
    $cid=$_GET['viewid'];
      //$remark=$_POST['remark'];
      $sale=$_POST['sale'];
      $sdate=$_POST['sdate'];
      
    $query=mysqli_query($conn, "update  tblcategory set sale='$sale',sdate='$sdate' where ID='$cid'");
    if ($query) {
       echo "<script>alert popup()('Data Successfully Updated.');</script>";
       echo "<script>window.location.href ='index.php'</script>";
  }
  else
    {
      $msg="Something Went Wrong. Please try again";
    }

  
} 

?>
<div class="pcoded-content">
<div class="pcoded-inner-content">

<div class="main-body">
<div class="page-wrapper">

<div class="page-header">
<div class="row align-items-end">
<div class="col-lg-8">
<div class="page-header-title">
<div class="d-inline">
<h4>Sell Lands</h4>

</div>
</div>
</div>
<div class="col-lg-4">
<div class="page-header-breadcrumb">
<ul class="breadcrumb-title">
<li class="breadcrumb-item">
<a href="dashboard.php"> <i class="feather icon-home"></i> </a>
</li>
<li class="breadcrumb-item"><a>Sell</a>
</li>
<li class="breadcrumb-item"><a href="manage-incomingvehicle.php">Lands</a>
</li>
</ul>
</div>
</div>
</div>
</div>
<div class="page-body">
   <div class="card">
                        <div class="card-header">
                            <strong class="card-title">View Land Information</strong>
                        </div>
                        <div class="card-body"> 
                          <?php
                          $cid=$_GET['viewid'];
                          $ret=mysqli_query($conn,"select * from tblcategory where ID='$cid'");
                          $cnt=1;
                          while ($row=mysqli_fetch_array($ret)) {

                          ?>                       
                          <table border="1" class="table table-bordered mg-b-0">
              
                            <tr>
                                <th>Land Name</th>
                                <td><?php  echo $row['land_cat'];?></td>
                              </tr>                             
                              <tr>
                                <th>Perch</th>
                                  <td><?php  echo $row['perch'];?></td>
                              </tr>
                            <tr>
                              <th>Owner</th>
                              <td><?php  echo $packprice= $row['owner'];?></td>
                            </tr>
                            <tr>
                              <th>Address</th>
                              <td><?php  echo $row['address'];?></td>
                            </tr>
                            <tr>
                              <th>Broker</th>
                              <td><?php  echo $row['broker'];?></td>
                            </tr>
                            <tr>  
                              <th>Price</th>
                              <td><?php  echo $row['price'];?></td>
                            </tr>
                    
                            <tr>
                            <th>Land Status</th>
                            <td> 
                              <?php  
                              if($row['sale']=="F")
                              {
                                echo "Not Sold";
                              }
                              if($row['sale']=="T")
                              {
                                echo "Sold";
                              } 
                              ;?>
                            </td>
                          </tr> 
                        </table>
                    </div>
                </div>
<table class="table mb-0"> 
                  <?php if($row['Status']==""){ ?>
                  <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <p style="font-size:16px; color:red" align="center"> <?php if(isset($msg)){
                        echo $msg;
                      }  ?> 
                    </p> 
                    <tr>
                      <th>Remark :</th>
                      <td>
                      <textarea name="remark" placeholder="" rows="12" cols="14" class="form-control" required="true"></textarea></td>
                    </tr>
                    <tr>
                      <th>Status :</th>
                      <td>
                        <select name="sale" class="form-control" required="true" >
                          <option value="Sold">Sold</option>
                        </select>
                      </td>
                    </tr>
                    <tr>
                      <th>Sell Date :</th>
                      <td>
                      <input type="date" name="sdate" class="form-control" required="true"></input></td>
                    </tr>
                    <tr>  
                      <p style="text-align: center;"><td> <button type="submit" class="btn btn-primary m-b-0" name="submit" >Update</button></p></td></tr>
                    </form>
                </table>
                <?php } else { ?>
                    <table border="1" class="table table-bordered mg-b-0">
                  <tr>
                    <th>Remark</th>
                    <td><?php echo $row['Remark']; ?></td>
                  </tr>
                <tr>
                  <tr>
                    <th>Parking Fee</th>
                  <td><?php echo $row['ParkingCharge']; ?></td>
                  </tr>
</tr>
<?php } ?>
   </table>               
<?php } ?>
                    </div>
                </div>


<!--  Author Name: Mayuri K. 
 for any PHP, Codeignitor or Laravel work contact me at mayuri.infospace@gmail.com  -->

</div>

</div>
</div>

<div id="#">
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!--  Author Name: Mayuri K. 
 for any PHP, Codeignitor or Laravel work contact me at mayuri.infospace@gmail.com  -->

<?php include('footer.php');?>
<?php if(!empty($_SESSION['success'])) {  ?>
<div class="popup popup--icon -success js_success-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
      Success 
    </h3>
    <p><?php echo $_SESSION['success']; ?></p>
    <p>
    <?php echo "<script>setTimeout(\"location.href = 'manage-incomingvehicle.php';\",1500);</script>"; ?> 
      <button class="button button--success" data-for="js_success-popup">Close</button> 
    </p>
  </div>
</div>

<?php unset($_SESSION["success"]);  
 ?>
<?php } ?>    
<script>
      var addButtonTrigger = function addButtonTrigger(el) {
  el.addEventListener('click', function () {
    var popupEl = document.querySelector('.' + el.dataset.for);
    popupEl.classList.toggle('popup--visible');
  });
};

Array.from(document.querySelectorAll('button[data-for]')).
forEach(addButtonTrigger);
    </script>