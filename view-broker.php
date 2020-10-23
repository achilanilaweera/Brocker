<?php require_once('check_login.php');?>
<?php include('head.php');?>
<?php include('header.php');?>
<?php include('sidebar.php');?>
<?php include('connect.php');
if(isset($_POST['submit']))
    {
        $bname=$_POST['bname'];
        $address=$_POST['address'];
        $hometel=$_POST['hometel'];
        $mobile=$_POST['mobile'];
        $nic=$_POST['nic'];
        $nbusiness=$_POST['nbusiness'];
   




    $eid=$_GET['editid'];
    
        $query=mysqli_query($conn, "update tbl_broker  set address='$address', home='$hometel', mobile=' $mobile' , nic=' $nic', business=' $nbusiness'");
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
<h4>Broker Category</h4>


</div>
</div>
</div>
<div class="col-lg-4">
<div class="page-header-breadcrumb">
<ul class="breadcrumb-title">
<li class="breadcrumb-item">
<a href=""> <i class="feather icon-home"></i> </a>
</li>
<li class="breadcrumb-item"><a>Manage Broker</a>
</li>
<li class="breadcrumb-item"><a href="view-broker.php">edit-Broker</a>
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
                                    $ret=mysqli_query($conn,"select * from  tbl_broker where id='$cid'");
                                    $cnt=1;
                                    while ($row=mysqli_fetch_array($ret)) {

                                    ?>
    <div class="form-group row">
        <label class="col-lg-2">Broker Name</label>
        
        <input type="text" id="bname" name="bname" class="form-control col-lg-6" placeholder="Broker Name" required="true" value="<?php  echo $row['bname'];?>">
        <br>
    </div>
    <div class="form-group row">
        <label class="col-lg-2">Address</label>
        <input type="text" id="address" name="address" class="form-control col-lg-6" placeholder="Address" required="true" value="<?php  echo $row['address'];?>">
    </div>
    <div class="form-group row">
        <label class="col-lg-2">Telephone Number</label>
        <input type="text" id="hometel" name="hometel" class="form-control col-lg-6" placeholder="Home Telephone Number" required="true" value="<?php  echo $row['home'];?>">
    </div>
    <div class="form-group row">
        <label class="col-lg-2">Mobile Number</label>
        <input type="text" id="mobile" name="mobile" class="form-control col-lg-6" placeholder="Mobile" required="true" value="<?php  echo $row['mobile'];?>">
    </div>
    <div class="form-group row ">
        <label class="col-lg-2">NIC</label>
        <input type="text" id="nic" name="nic" class="form-control col-lg-6" placeholder="999999999V" required="true" value="<?php  echo $row['nic'];?>">
        </div>
        <div class="form-group row ">
        <label class="col-lg-2">No of Business</label>
        <input type="text" id="nbusiness" name="nbusiness" class="form-control col-lg-6" placeholder="No of Business" required="true" value="<?php  echo $row['business'];?>">
        </div>
        

    <?php } ?>
        <div class="col-lg-12">
      <button type="submit" name="submit" class="btn btn-primary m-b-0">Update</button>
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