<?php require_once('check_login.php'); ?>
<?php include('head.php'); ?>
<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
<?php include('connect.php');


if (isset($_POST['submit'])) {
  $catname = $_POST['catename'];
  $perchname = $_POST['perchname'];
  $ownername = $_POST['ownername'];
  $address = $_POST['address'];
  $address2 = $_POST['address2'];
  $bname = $_POST['bname'];
  $city = $_POST['city'];
  $province = $_POST['province'];
  $gw = $_POST['gw'];
  $price = $_POST['price'];
  $purpose = $_POST['purpose'];
  $img=$_POST['image'];

  extract($_POST);
   
  if($img['image']['name']!=''){
      $file_name = $img['image']['name'];
      $file_type = $img['image']['type'];
      $file_size = $img['image']['size'];
      $file_tem_loc = $img['image']['tmp_name'];
      $file_store = "uploadImage/Profile/".$file_name;

      if (move_uploaded_file($file_tem_loc, $file_store)) {
        echo "file uploaded successfully";
      }
  }
  else{
    $file_name=$_POST['old_image'];
  } 
      $folder = "uploadImage/Profile/";

      if (is_dir($folder)) 
      {
         if ($open = opendir($folder))

          while (($img=readdir($open)) !=false) {
              
              if($img=='.'|| $img=="..") continue;

              echo '<img src="uploadImage/Profile/'.$img.'" width="150" height="150">';
          }

          closedir($open);
        } 

  $query = mysqli_query($conn, "insert into tblcategory (land_cat,perch,owner,address,address2,broker,city,province,gw,price,purpose,imagename) value('$catname','$perchname','$ownername','$address','$address2','$bname','$city','$province','$gw','$price',' $purpose',' $img')");
  if ($query) {
  

    //echo "<script>alert popup()('Data Successfully Added.');</script>";
    echo "<script>window.location.href ='manage-category.php'</script>";
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

                
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="catename">Land</label>
                      <input type="text" name="catename" class="form-control" id="catename" placeholder="Land Name" required="true">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputPassword4">Perch/Hectares</label>
                      <input type="text" class="form-control" name="perchname" id="perchname" placeholder="Perch/Hectares" required="true">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputAddress">Owner</label>
                    <input type="text" class="form-control" name="ownername" id="ownername" placeholder="John Doe" required="true">
                  </div>
                  <div class="form-group">
                    <label for="inputAddress">Address</label>
                    <input type="text" class="form-control" name="address" id="address" placeholder="1234 Main St">
                  </div>
                  <div class="form-group">
                    <label for="inputAddress2">Address 2</label>
                    <input type="text" class="form-control" name="address2" id="address2" placeholder="Apartment, studio, or floor">
                  </div>
                  <div class="form-group">
                    <label for="inputAddress2">Broker Name</label>
                    <input type="text" class="form-control" name="bname" id="bname" placeholder="Apartment, studio, or floor">
                  </div>
            
                 
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputCity">City</label>
                        <input type="text" class="form-control" id="city" name="city">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="province">Province</label>
                        <select id="inputState" name="province" id="province" class="form-control">
                          <option selected>Central Province</option>
                          <option selected>Western Province</option>
                          <option selected>Southern Province</option>
                          <option selected>North Province</option>
                        </select>
                      </div>
                      <div class="form-group col-md-2">
                        <label for="inputZip">G.W</label>
                        <input type="text" name="gw" id="gw" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputAddress2">Price</label>
                      <input type="text" name="price" id="price" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="inputAddress2">Purpose</label>
                      <input type="text" name="purpose" class="form-control" id="purpose" placeholder="Apartment, studio, or floor">
                    </div>
                    <label class="col-sm-2 col-form-label">Image</label>
                     <div class="col-sm-4">

                    <input type="file"  class="form-control" name="image" >
           
                  </div>
                  </br>
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
    var catename = $('#catename').val();
    var perchname = $('#perchname').val();
    var ownername = $('#ownername').val();
    var address = $('#address').val();
    var address2 = $('#address2').val();
    var bname = $('#bname').val();
    var city = $('#city').val();
    var province = $('#province').val();
    var gw = $('#gw').val();
    var price = $('#price').val();
    var purpose = $('#purpose').val();

    if (catename == '' || ownername == '' || address == '' || bname == '') {
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
        button: "Aww yiss!",
      });
    }
  });
</script>
<!--------- Alert Box End --------->





<?php include("footer.php"); ?>