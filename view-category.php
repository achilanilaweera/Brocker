<?php require_once('check_login.php');?>
<?php include('head.php');?>
<?php include('header.php');?>
<?php include('sidebar.php');?>
<?php include('connect.php');
if(isset($_POST['submit']))
    {
        $aid=$_SESSION['vpmsaid'];
        $catname=$_POST['catename'];
        $perchname=$_POST['perchname'];
        $ownername=$_POST['ownername'];
        $address=$_POST['address'];
        $bname=$_POST['bname'];
        $price=$_POST['price'];
        $city=$_POST['city'];
        $province=$_POST['province'];
        $gw=$_POST['gw'];





    $eid=$_GET['editid'];
    
        $query=mysqli_query($conn, "update tblcategory set land_cat='$catname', perch='$perchname', owner=' $ownername' , address=' $address', broker=' $bname', price=' $price', city='$city' ,province='$province' ,gw='$gw'where ID='$eid'");
        if ($query) {
        $msg="Category has been updated.";
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
<h4>Vehicle Category</h4>


</div>
</div>
</div>
<div class="col-lg-4">
<div class="page-header-breadcrumb">
<ul class="breadcrumb-title">
<li class="breadcrumb-item">
<a href=""> <i class="feather icon-home"></i> </a>
</li>
<li class="breadcrumb-item"><a>Manage Category</a>
</li>
<li class="breadcrumb-item"><a href="edit-category.php">edit-category</a>
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
<form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    <p style="font-size:16px; color:red" align="center"> <?php if(isset($msg)){
                                        echo $msg;
                                    }  ?> </p>
                                                        
                                    <?php
                                    $cid=$_GET['editid'];
                                    $ret=mysqli_query($conn,"select * from  tblcategory where id='$cid'");
                                    $cnt=1;
                                    while ($row=mysqli_fetch_array($ret)) {

                                    ?>
    <div class="form-group row">
        <label class="col-lg-2">Category</label>
        
        <input type="text" id="catename" name="catename" class="form-control col-lg-6" placeholder="Vehicle Category" required="true" value="<?php  echo $row['land_cat'];?>">
        <br>
    </div>
    <div class="form-group row">
        <label class="col-lg-2">Perch</label>
        <input type="text" id="catename" name="perchname" class="form-control col-lg-6" placeholder="Perch" required="true" value="<?php  echo $row['perch'];?>">
    </div>
    <div class="form-group row">
        <label class="col-lg-2">Owner</label>
        <input type="text" id="catename" name="ownername" class="form-control col-lg-6" placeholder="Perch" required="true" value="<?php  echo $row['owner'];?>">
    </div>
    <div class="form-group row">
        <label class="col-lg-2">Address</label>
        <input type="text" id="catename" name="address" class="form-control col-lg-6" placeholder="Perch" required="true" value="<?php  echo $row['address'];?>">
    </div>
    <div class="form-group row ">
        <label class="col-lg-2">Broker</label>
        <input type="text" id="catename" name="bname" class="form-control col-lg-6" placeholder="Perch" required="true" value="<?php  echo $row['broker'];?>">
        </div>
        <div class="form-group row ">
        <label class="col-lg-2">Price</label>
        <input type="text" id="price" name="price" class="form-control col-lg-6" placeholder="New Price" required="true" value="<?php  echo $row['price'];?>">
        </div>
        <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputCity">City</label>
                      <input type="text" class="form-control" id="city" name="city"  required="true" value="<?php  echo $row['city'];?>">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="province">Province</label>
                      <input type="text" id="inputState" name="province" id="province" class="form-control"  required="true" value="<?php  echo $row['province'];?>">
                       
                    </div>
                    <div class="form-group col-md-2">
                      <label for="inputZip">G.W</label>
                      <input type="text" name="gw" id="gw" class="form-control" required="true" value="<?php  echo $row['gw'];?>" >
                    </div>
                  </div>

    <?php } ?>
        <div class="col-lg-12">
     <!---- <button type="submit" name="submit" class="btn btn-primary m-b-0">Update</button> -->
    </div>
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