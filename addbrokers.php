<?php require_once('check_login.php'); ?>
<?php include('head.php'); ?>
<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
<?php include('connect.php');


if (isset($_POST['submit'])) {
  $bname = $_POST['bname'];
  $address = $_POST['address'];
  $hometel = $_POST['hometel'];
  $mobile = $_POST['mobile'];
  $nic = $_POST['nic'];
  $nbusiness = $_POST['nbusiness'];
 

  

  $query = mysqli_query($conn, "insert into  tbl_broker (bname,address,home,mobile,nic,business) value('$bname','$address','$hometel','$mobile','$nic','$nbusiness')");
  if ($query) {
  

    //echo "<script>alert popup()('Data Successfully Added.');</script>";
    echo "<script>window.location.href ='manage-brokers.php'</script>";
  } else {
    //echo "<script>alert('Something Went Wrong. Please try again.');</script>";
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
                  <h4>Brokers Registration</h4>


                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="page-header-breadcrumb">
                <ul class="breadcrumb-title">
                  <li class="breadcrumb-item">
                    <a href=""> <i class="feather icon-home"></i> </a>
                  </li>
                  <li class="breadcrumb-item"><a>Brokers</a>
                  </li>
                  <li class="breadcrumb-item"><a href="addcategory">Brokers Registration</a>
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

                
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="bname">Broker Name</label>
                      <input type="text" name="bname" class="form-control" id="bname" placeholder="Broker Name" required="true">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="Address">Address</label>
                      <input type="text" class="form-control" name="address" id="address" placeholder="Address" required="true">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputAddress">Home Telephone</label>
                    <input type="number" class="form-control" name="hometel" id="hometel" placeholder="0811111111" required="true">
                  </div>
                  <div class="form-group">
                    <label for="mobile">Mobile</label>
                    <input type="number" class="form-control" name="mobile" id="mobile" placeholder="071111111">
                  </div>
                  <div class="form-group">
                    <label for="inputAddress2">NIC</label>
                    <input type="text" class="form-control" name="nic" id="nic" placeholder="892533417V">
                  </div>
                  <div class="form-group">
                    <label for="inputAddress2">No of Business</label>
                    <input type="text" class="form-control" name="nbusiness" id="nbusiness" placeholder="10">
                  </div>
            
                 
                  
        
                    <button type="submit" id="submit1" name="submit" class="btn btn-primary" onclick="popup()">Submit</button>
                

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

<!------- Jquery Scripts -------->

<script type="text/javascript" src="files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="files/bower_components/popper.js/js/popper.min.js"></script>
<script type="text/javascript" src="files/bower_components/bootstrap/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<!--------- Alert Box Starts --------->
<script>
  $('#submit1').click(function popup() {
    var bname = $('#bname').val();
    var address = $('#address').val();
    var hometel = $('#hometel').val();
    var mobile = $('#mobile').val();
    var nic = $('#nic').val();
    var nbusiness = $('#nbusiness').val();
   

    if (bname == '' || address == '' || hometel == '' || mobile == '') {
      swal({
        title: "Please Fill The fields!",
        text: "Some filds are blank!",
        icon: "warning",
        button: "Try Again!",
      });
    } else {
      swal({
        title: "Good job!",
        text: "You clicked the button!",
        icon: "success",
        button: "Ok",
      });
    }
  });
</script>
<!--------- Alert Box End --------->





<?php include("footer.php"); ?>