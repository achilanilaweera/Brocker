<?php require_once('check_login.php');?>
<?php include('head.php');?>
<?php include('header.php');?>
<?php include('sidebar.php');?>
<?php include('connect.php');


 if(isset($_POST['submit']))
    {
         $catname=$_POST['catename'];

        $query=mysqli_query($conn,"insert into tblcategory (VehicleCat) value('$catname')");
        if ($query) {
echo "<script>alert('Vehicle Category Entry Detail has been added');</script>";
echo "<script>window.location.href ='manage-category.php'</script>";
  }
  else
    {
     echo "<script>alert('Something Went Wrong. Please try again.');</script>";       
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
<h4>Land Registration</h4>


</div>
</div>
</div>
<div class="col-lg-4">
<div class="page-header-breadcrumb">
<ul class="breadcrumb-title">
<li class="breadcrumb-item">
<a href=""> <i class="feather icon-home"></i> </a>
</li>
<li class="breadcrumb-item"><a>Land</a>
</li>
<li class="breadcrumb-item"><a href="addcategory">Land Registration</a>
</li>
</ul>
</div>
</div>
</div>
</div>

<div class="page-body">

<div class="card">
<div class="card-block">
<form role="form" method="post">

<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="catename">Land</label>
      <input type="text" name="catename" class="form-control"  placeholder="Land Name">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Perch/Hectares</label>
      <input type="text" class="form-control" name="catename" placeholder="Perch/Hectares" required="true" >
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Owner</label>
    <input type="text" class="form-control" name="catename" placeholder="John Doe">
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" name="catename"placeholder="1234 Main St">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" name="catename" placeholder="Apartment, studio, or floor">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" name="catename">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Province</label>
      <select id="inputState" name="catename" class="form-control">
        <option selected name="catename">Central Province</option>
        <option selected name="catename">Western Province</option>
        <option selected name="catename">Southern Province</option>
        <option selected name="catename">North Province</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">G.W</label>
      <input type="text" name="catename" class="form-control" >
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress2">Price</label>
    <input type="text" name="catename" class="form-control"  >
  </div>
  <div class="form-group">
    <label for="inputAddress2">Purpose</label>
    <input type="text"  name="catename" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <button type="submit"  name="submit" class="btn btn-primary">Submit</button>
</form>
       
</form>
</div>
</div>


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
<?php include("footer.php"); ?>