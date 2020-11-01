<?php

session_start();


include("../include/connect.php");


if(!$_SESSION['phone']){

    header("location:index.php");

}


$phone = $_SESSION['phone'];
$shop_sql = "SELECT * FROM shops where user_phone = '$phone'";
$result = mysqli_query($con, $shop_sql);



if (mysqli_num_rows($result) > 0) {
    // output data of each row
 
    $shop_show = "hide";
    $delete_show = "";
 
    while($row = mysqli_fetch_assoc($result)) {
  
      $shop_name = $row['shop_name'];
      $shop_address = $row['shop_address'];
      $city = $row['city'];
      $phone = $row['phone_no'];
      $shop_image = $row['image_link'];
    }
  
  
  } else {
      
    $shop_show = "";
   
    $delete_show = "hide";
 
  }

?>



<html>



<?php include("../components/head.php"); ?>



<body>

    <?php include("../components/navbar.php")?>



    <!--   Search Card Goes HEre -->

    <style>

img{
  height: 60%;
}

    @media only screen and (min-width: 993px) {
        nav a.sidenav-trigger {

            display: block;
        }

    }

    .brand-logo {
        left: 40%;
    }

    a {
        color: black;
    }
    </style>


    <brs>
    <div class="container">

    <div class="row">
    <div class="col s12">
      <div class="card-panel black">
        <a class="waves-effect waves-light btn pink modal-trigger <?php echo $shop_show;?>" href="#modal1">Add Shop</a>
        <a class="waves-effect waves-light btn red <?php echo $delete_show;?>" href="delete.php">Delete Shop</a>
        <a class="waves-effect waves-light btn right  amber darken-1 modal-trigger"  href="#modal2">Modify Shop</a>
        
         </div>
    </div>
  </div>

            </div>

        </div>



<!-- Shop Details -->
<div class="container">

<div class="row  <?php echo $delete_show;?>">
    <div class="col s12 m10">
      <div class="card">
        <div class="card-image">
          <img src="uploads/<?php echo $shop_image; ?>">
        
        
     




          <span class="card-title ">
          <form action="upload.php" method="post" enctype="multipart/form-data">

    <div class="file-field input-field">
      <div class="btn">
        <span>Change Photo</span>
        <input type="file" name="fileToUpload" id="fileToUpload">
    
      
      </div>
    </div>
    <br>

    <input type="submit" class="btn green" value="Upload Image" name="Upload">

  </form>
          </span>
        </div>
        <div class="card-content">
          <h3><i class="material-icons">shop</i> <?php echo $shop_name; ?></h3>
          <p><i class="material-icons">location_city</i> <?php echo $shop_address; ?></p>
          <p><i class="material-icons">location_city</i> <?php echo $city; ?></p>
          <p><i class="material-icons">local_phone</i> <?php echo $phone; ?></p>
        </div>
      </div>
    </div>
  </div>
          
          </div>



<!-- End -->



<!-- Modal -->


  <!-- Modal Structure -->
  <div id="modal1" class="modal  modal-fixed-footer">
  <form action="add_shop.php" method="post" class="col s12">
     
    <div class="modal-content">
      <h4>Add Shop</h4>

      
      
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Shop Name" id="shop_name" type="text" class="validate" name="shop_name">
          <label for="shop_name">Shop Name</label>
        </div>
        <div class="input-field col s6">
          <input id="city" type="text" placeholder="City" class="validate" name="city">
    
        </div>
      </div>
      
      
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Phone Number" id="phone_no" type="number" class="validate" name="phone">
   
        </div>
        <div class="input-field col s6">
       
    <select name="cat">
      <option value="" disabled selected>Choose your option</option>
      <option value="1">Option 1</option>
      <option value="2">Option 2</option>
      <option value="3">Option 3</option>
    </select>
    <label>Category</label>

        </div>
      </div>

      
      <div class="row">
        <div class="input-field col s12">
          <input id="address" type="text" class="validate" name="address" required>
          <label for="address">Address</label>
        </div>
      </div>

      


    </div>
    <div class="modal-footer">
      <button type="submit" class="modal-close waves-effect waves-light btn green">Agree</button>
    </div>

    </form>

  </div>

<!-- End -->


<!-- Modify Shop -->


<!-- Modal -->


  <!-- Modal Structure -->
  <div id="modal2" class="modal ">
  <form action="modify.php" method="post" class="col s12">
     
    <div class="modal-content">
      <h4>Modify Shop</h4>

    
      
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Shop Name" id="shop_name" type="text" class="validate" name="shop_name" value="<?php echo $shop_name; ?>">
          <label for="shop_name">Shop Name</label>
        </div>
        <div class="input-field col s6">
          <input id="city" type="text" placeholder="City" class="validate" name="city" value="<?php echo $city; ?>">
    
        </div>
      </div>
      
      
      <div class="row">
        <div class="input-field col s12">
          <input placeholder="Phone Number" id="phone_no" type="number" class="validate" name="phone" value="<?php echo $phone; ?>">
   
        </div>

      
      <div class="row">
        <div class="input-field col s12">
          <input id="address" type="text" class="validate" name="address" value="<?php echo $shop_address; ?>" required>
          <label for="address">Address</label>
        </div>
      </div>

      


    </div>
    <div class="modal-footer">
      <button type="submit" class="modal-close waves-effect waves-light btn green">Agree</button>
    </div>

    </form>

  </div>

<!-- End -->


<!-- Modify Shop End -->


        <script>
       
  $(document).ready(function(){
    $('.modal').modal();
  });
      
        $(document).ready(function() {
            $('.sidenav').sidenav();
        });

        $(document).ready(function(){
    $('select').formSelect();
  });
        

        </script>


        <!-- Aaaj Tevv -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>