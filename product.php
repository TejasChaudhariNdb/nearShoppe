<html>
<?php include("components/head.php");
include("include/connect.php");

$shop_id = $_GET['shop_id'];

// teas

$shop_sql = "select * from shops where shop_id = ".$shop_id;


$result = mysqli_query($con, $shop_sql);


while($row = mysqli_fetch_assoc($result)){


    $shop_id = $row['shop_id'];
    $shop_name = $row['shop_name'];
    $shop_address = $row['shop_address'];
    $shop_city = $row['city'];
    $shop_rate = $row['rate'];

}



?>

    <body>

   <?php include("components/navbar.php")?>

             

<!--   Search Card Goes HEre -->




<style>

.carousel{

height:40%;

}


.shop_name{
    text-align:left;
}
.city{
    color:#414e5a;
    font-size:20px;
}
.address{
    color:#414e5a;
    font-size:17px;
    margin-top:20px;
}
.shop_details{
    /* top: 35%; */
    /* position: absolute; */
}

.whatsapp{
    width: 25px;

}

.contact{
    display: flex;
    justify-content: space-around;
}

.contact > div{
    border: black solid 1px;
    padding: 14px;
    border-radius: 28%;
}
.contact > div :hover{
    background: gray;

}


.widht_100{
    width:100%;
}
  
  .check{

      color:orange;
  }

  .rating{
    display: flex;
    justify-content: center;-
  }
  .rating > i{
      padding-right:20px;
      font-size:25px;
  }
    </style>

<div class="container">

<div class="carousel">
    <a class="carousel-item" href="#one!"><img src="https://img.etimg.com/thumb/width-640,height-480,imgsize-789754,resizemode-1,msid-73320353/small-biz/sme-sector/the-kirana-is-a-technology-shop-too/kirana-bccl.jpg"></a>
    <a class="carousel-item" href="#two!"><img src="https://images.newindianexpress.com/uploads/user/imagelibrary/2020/3/25/w1200X800/Lockdown_marginallyz.jpg"></a>
    <a class="carousel-item" href="#three!"><img src="https://images.moneycontrol.com/static-mcnews/2020/10/Baba-Ka-Dhaba-Zomato-770x433.jpg?impolicy=website&width=770&height=431"></a>
    <a class="carousel-item" href="#four!"><img src="https://images.livemint.com/img/2020/05/01/600x338/PTI13-04-2020_000051B_1588354728439_1588354749822.jpg"></a>
  </div>

  <div class="shop_details">

  <h3 class="shop_name"><?php echo $shop_name ?></h3>
<p class="city"><?php echo $shop_city ?></p>                              

<div class="contact">
<div>
<i class="material-icons">phone</i>
</div>
<div>
<i class="material-icons">share</i>
</div>
<div>
<i class="material-icons">map</i>
</div>

<div>
<img class="whatsapp " src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/WhatsApp.svg/766px-WhatsApp.svg.png" alt="whatsapp "/>
</div>
</div>
<p class="address"><?php echo $shop_address ?></p>   

<br>
<button class="btn   green darken-2 widht_100 waves-effect waves-light">Best Deal</button>

<br>
<br>
<br>

<p class="city">Rate This</p>
<div class="rating">

<?php

for($i=0;$i<$shop_rate;$i++){

    echo '<i class="material-icons check">star</i>';
}

?>

</div>
<br><br><br>

</div>




</div>

<script>
 
 $('.sidenav').show();

 
 $(document).ready(function(){
    $('.sidenav').sidenav();
  });


  $(document).ready(function(){
    $('.carousel').carousel();
  });
                 </script>


    <!-- Aaaj Tevv -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
  </html>
        