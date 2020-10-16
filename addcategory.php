<?php require_once('check_login.php');?>
<?php include('head.php');?>
<?php include('header.php');?>
<?php include('sidebar.php');?>
<?php include('connect.php');


 if(isset($_POST['submit']))
    {
         $catname=$_POST['catename'];
         $perchname=$_POST['perchname'];
         $ownername=$_POST['ownername'];
         $address=$_POST['address'];
         $address2=$_POST['address2'];
         $bname=$_POST['bname'];
         $city=$_POST['city'];
         $province=$_POST['province'];
         $gw=$_POST['gw'];
         $price=$_POST['price'];
         $purpose=$_POST['purpose'];

        $query=mysqli_query($conn,"insert into tblcategory (land_cat,perch,owner,address,address2,broker,city,province,gw,price,purpose) value('$catname','$perchname','$ownername','$address','$address2','$bname','$city','$province','$gw','$price',' $purpose')");
        if ($query) {
         
          echo "<script>alert('Data Successfully Added.');</script>";
          echo "<scripat>window.location.href ='manage-category.php'</scripat>";
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
      <input type="text" class="form-control" name="perchname" placeholder="Perch/Hectares" required="true" >
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Owner</label>
    <input type="text" class="form-control" name="ownername" placeholder="John Doe" required="true" >
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" name="address"placeholder="1234 Main St" required="true" >
  </div>
  <div class="form-group">
    <label for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" name="address2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Broker Name</label>
    <input type="text" class="form-control" name="bname" placeholder="Apartment, studio, or floor">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" name="city">
    </div>
    <div class="form-group col-md-4">
      <label for="province">Province</label>
      <select id="inputState" name="province" class="form-control">
        <option selected >Central Province</option>
        <option selected >Western Province</option>
        <option selected >Southern Province</option>
        <option selected >North Province</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">G.W</label>
      <input type="text" name="gw" class="form-control" >
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress2">Price</label>
    <input type="text" name="price" class="form-control"  >
  </div>
  <div class="form-group">
    <label for="inputAddress2">Purpose</label>
    <input type="text"  name="purpose" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
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
<div class="alert alert-primary" role="alert">
  This is a primary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
</div>
<script>
function at(){
$('.alert').alert();
}
</script>
<!--  Author Name: Mayuri K. 
 for any PHP, Codeignitor or Laravel work contact me at mayuri.infospace@gmail.com  -->
<?php include("footer.php"); ?>