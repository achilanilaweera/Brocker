

 <?php require_once('check_login.php');?>
<?php include('head.php');?>
<?php include('header.php');?>
<?php include('sidebar.php');?>
<?php include('connect.php');?>
<div class="pcoded-content">
<div class="pcoded-inner-content">

<div class="main-body">
<div class="page-wrapper">

<div class="page-header">
<div class="row align-items-end">
<div class="col-lg-8">
<div class="page-header-title">
<div class="d-inline">
<h4>Manage Buyers</h4>

</div>
</div>
</div>
<div class="col-lg-4">
<div class="page-header-breadcrumb">
<ul class="breadcrumb-title">
<li class="breadcrumb-item">
<a href="dashboard.php"> <i class="feather icon-home"></i> </a>
</li>
<li class="breadcrumb-item"><a>Manage Buyers</a>
</li>
<li class="breadcrumb-item"><a href="manage-incomingvehicle.php">Manage Buyers</a>
</li>
</ul>
</div>
</div>
</div>
</div>

<div class="page-body">

<div class="card">
<div class="card-header">
    <div class="col-sm-10">
        
        <a href="addcategory.php"><button class="btn btn-primary pull-right">+ Add Lands</button></a>
        
    </div>

</div>
<div class="card-block">
<div class="table-responsive dt-responsive">
<table id="dom-jqry" class="table table-striped table-bordered nowrap">
<thead>
<tr>
                                            <th>Buyers Name</th>
                                            <th>Buyers Address</th>
                                            <th>Home Telephone</th>
                                            <th>Mobile</th> 
                                            <th>Owners Name</th>
                                            <th>NIC</th>  
                                            <th>Action</th>
                                        </tr>
</thead>
 <?php
                                $ret=mysqli_query($conn,"select *from   tblvehicle ");
                                //$cnt=1;
                                while ($row=mysqli_fetch_array($ret)) {
                                ?> 
<tbody>
  <tr>
                              
                            
                                    <td><?php  echo $row['buyername'];?></td>
                                    <td><?php  echo $row['buyeraddress'];?></td>
                                  <td><?php  echo $row['home'];?></td> 
                                  <td><?php  echo $row['mobile'];?></td> 
                                  <td><?php  echo $row['OwnerName'];?></td>
                                  <td><?php  echo $row['NIC'];?></td>
                                    <td><a href="view-incomingvehicle-detail.php?viewid=<?php echo $row['ID'];?>"class="btn btn-xs btn-primary"><i class="feather icon-clock m-t-10 f-16 " ></i></a>  
                                        <a href="print.php?vid=<?php echo $row['ID'];?>" style="cursor:pointer"  class="btn btn-xs btn-danger"><i class="feather icon-printer   m-t-10 f-16 " ></i></a>
                                    </td>
        </tr>
    
</tbody>
 <?php 
                                $cnt=$cnt+1;
                                }?>
</table>
</div>
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

    <!--  Author Name: Mayuri K. 
 for any PHP, Codeignitor or Laravel work contact me at mayuri.infospace@gmail.com  -->