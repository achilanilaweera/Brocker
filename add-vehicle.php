<?php require_once('check_login.php');?>
<?php include('head.php');?>
<?php include('header.php');?>
<?php include('sidebar.php');?>
<?php include('connect.php');
if(isset($_POST['submit']))
  {
    $bname=$_POST['bname'];
    $buyeraddress=$_POST['buyeraddress'];
    $chome=$_POST['chome'];
    $cmobile=$_POST['cmobile'];
    $oname=$_POST['oname'];
    $NIC=$_POST['NIC'];
 
    
     
   $query=mysqli_query($conn, "insert into  tblvehicle(buyername,buyeraddress,mobile,OwnerName,NIC) value('$bname',' $buyeraddress','$chome',' $cmobile',' $oname',' $NIC')");
    if ($query) {
echo "<script>alert('Buyer Detail has been added');</script>";
echo "<script>window.location.href ='manage-incomingvehicle.php'</script>";
  }
  else
    {
     echo "<script>alert('Something Went Wrong. Please try again.');</script>";       
    }

  
}
?>
<script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>

<div class="pcoded-content">
<div class="pcoded-inner-content">

<div class="main-body">
<div class="page-wrapper">

<div class="page-header">
<div class="row align-items-end">
<div class="col-lg-8">
<div class="page-header-title">
<div class="d-inline">
<h4>Add Buyers</h4>

</div>
</div>
</div>
<div class="col-lg-4">
<div class="page-header-breadcrumb">
<ul class="breadcrumb-title">
<li class="breadcrumb-item">
<a href="dashboard.php"> <i class="feather icon-home"></i> </a>
</li>
<li class="breadcrumb-item"><a>Add Buyers</a>
</li>
<li class="breadcrumb-item"><a href="add-vehicle.php">Add Buyers</a>
</li>
</ul>
</div>
</div>
</div>
</div>


<div class="page-body">
<div class="row">
<div class="col-sm-12">

<div class="card">
<div class="card-header">
<!-- <h5>Basic Inputs Validation</h5>
<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span> -->
</div>
<div class="card-block">
<form id="main" method="post" enctype="multipart/form-data">




<div class="form-group row">
<label class="col-sm-2 col-form-label">Buyer Name</label>
<div class="col-sm-4">
<input type="text" class="form-control" id="bname" name="bname" placeholder="Buyer Name" required="">
<span class="messages"></span>
</div>
<label class="col-sm-2 col-form-label">Buyer Address</label>
<div class="col-sm-4">
<input type="text" class="form-control" id="buyeraddress" name="buyeraddress" placeholder="Buyer Name" required="">
<span class="messages"></span>
</div>
</div>
<div class="form-group row">
<label class="col-sm-2 col-form-label">Contact Number</label>
<div class="col-sm-4">
<input type="text" class="form-control" id="vehreno" name="chome"  placeholder="Home"  required="">
<span class="messages"></span>
</div>
<label class="col-sm-2 col-form-label">Contact Number</label>
<div class="col-sm-4">
<input type="text" id="cmobile" name="cmobile" class="form-control" placeholder="Mobile"  required="true">
<span class="messages"></span>
</div>
</div>


<div class="form-group row">
<label class="col-sm-2 col-form-label">Owners Name</label>
<div class="col-sm-4">
<input type="text" id="oname" name="oname" class="form-control" placeholder="name"  required="true">
</div>
<label class="col-sm-2 col-form-label">NIC</label>
<div class="col-sm-4">
<input type="text" id="nic" name="nic" class="form-control" placeholder="NIC" required="true" >
<span class="messages"></span>
</div>
</div>

<div class="form-group row">
<label class="col-sm-2"></label>
<div class="col-sm-10">
<button type="submit" name="submit" class="btn btn-primary m-b-0">Submit</button>
</div>
</div>

</form>
</div>
</div>
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