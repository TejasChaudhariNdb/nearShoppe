[33mcommit d35bc39c35c9b5492da3d6fc8a8febed0009748e[m[33m ([m[1;36mHEAD -> [m[1;32mmain[m[33m, [m[1;31morigin/main[m[33m)[m
Author: TejasChaudhariNdb <tejaschaudhari038@gmail.com>
Date:   Tue Oct 20 00:10:20 2020 +0530

    tejas ba a

[1mdiff --git a/footer.php b/footer.php[m
[1mnew file mode 100644[m
[1mindex 0000000..14cc1fa[m
[1m--- /dev/null[m
[1m+++ b/footer.php[m
[36m@@ -0,0 +1,25 @@[m
[32m+[m[32m <footer class="page-footer">[m
[32m+[m[32m          <div class="container">[m
[32m+[m[32m            <div class="row">[m
[32m+[m[32m              <div class="col l6 s12">[m
[32m+[m[32m                <h5 class="white-text">Footer Content</h5>[m
[32m+[m[32m                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>[m
[32m+[m[32m              </div>[m
[32m+[m[32m              <div class="col l4 offset-l2 s12">[m
[32m+[m[32m                <h5 class="white-text">Links</h5>[m
[32m+[m[32m                <ul>[m
[32m+[m[32m                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>[m
[32m+[m[32m                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>[m
[32m+[m[32m                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>[m
[32m+[m[32m                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>[m
[32m+[m[32m                </ul>[m
[32m+[m[32m              </div>[m
[32m+[m[32m            </div>[m
[32m+[m[32m          </div>[m
[32m+[m[32m          <div class="footer-copyright">[m
[32m+[m[32m            <div class="container">[m
[32m+[m[32m            © 2014 Copyright Text[m
[32m+[m[32m            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>[m
[32m+[m[32m            </div>[m
[32m+[m[32m          </div>[m
[32m+[m[32m        </footer>[m
\ No newline at end of file[m
[1mdiff --git a/product.php b/product.php[m
[1mindex f979c04..49efc35 100644[m
[1m--- a/product.php[m
[1m+++ b/product.php[m
[36m@@ -1,5 +1,31 @@[m
 <html>[m
[31m-<?php include("components/head.php"); ?>[m
[32m+[m[32m<?php include("components/head.php");[m
[32m+[m[32minclude("include/connect.php");[m
[32m+[m
[32m+[m[32m$shop_id = $_GET['shop_id'];[m
[32m+[m
[32m+[m
[32m+[m
[32m+[m[32m$shop_sql = "select * from shops where shop_id = ".$shop_id;[m
[32m+[m
[32m+[m
[32m+[m[32m$result = mysqli_query($con, $shop_sql);[m
[32m+[m
[32m+[m
[32m+[m[32mwhile($row = mysqli_fetch_assoc($result)){[m
[32m+[m
[32m+[m
[32m+[m[32m    $shop_id = $row['shop_id'];[m
[32m+[m[32m    $shop_name = $row['shop_name'];[m
[32m+[m[32m    $shop_address = $row['shop_address'];[m
[32m+[m[32m    $shop_city = $row['city'];[m
[32m+[m[32m    $shop_rate = $row['rate'];[m
[32m+[m
[32m+[m[32m}[m
[32m+[m
[32m+[m
[32m+[m
[32m+[m[32m?>[m
 [m
     <body>[m
 [m
[36m@@ -14,8 +40,68 @@[m
 [m
 <style>[m
 [m
[31m-[m
[31m-[m
[32m+[m[32m.carousel{[m
[32m+[m
[32m+[m[32mheight:40%;[m
[32m+[m
[32m+[m[32m}[m
[32m+[m
[32m+[m
[32m+[m[32m.shop_name{[m
[32m+[m[32m    text-align:left;[m
[32m+[m[32m}[m
[32m+[m[32m.city{[m
[32m+[m[32m    color:#414e5a;[m
[32m+[m[32m    font-size:20px;[m
[32m+[m[32m}[m
[32m+[m[32m.address{[m
[32m+[m[32m    color:#414e5a;[m
[32m+[m[32m    font-size:17px;[m
[32m+[m[32m    margin-top:20px;[m
[32m+[m[32m}[m
[32m+[m[32m.shop_details{[m
[32m+[m[32m    /* top: 35%; */[m
[32m+[m[32m    /* position: absolute; */[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.whatsapp{[m
[32m+[m[32m    width: 25px;[m
[32m+[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.contact{[m
[32m+[m[32m    display: flex;[m
[32m+[m[32m    justify-content: space-around;[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m.contact > div{[m
[32m+[m[32m    border: black solid 1px;[m
[32m+[m[32m    padding: 14px;[m
[32m+[m[32m    border-radius: 28%;[m
[32m+[m[32m}[m
[32m+[m[32m.contact > div :hover{[m
[32m+[m[32m    background: gray;[m
[32m+[m
[32m+[m[32m}[m
[32m+[m
[32m+[m
[32m+[m[32m.widht_100{[m
[32m+[m[32m    width:100%;[m
[32m+[m[32m}[m
[32m+[m[41m  [m
[32m+[m[32m  .check{[m
[32m+[m
[32m+[m[32m      color:orange;[m
[32m+[m[32m  }[m
[32m+[m
[32m+[m[32m  .rating{[m
[32m+[m[32m    display: flex;[m
[32m+[m[32m    justify-content: center;-[m
[32m+[m[32m  }[m
[32m+[m[32m  .rating > i{[m
[32m+[m[32m      padding-right:20px;[m
[32m+[m[32m      font-size:25px;[m
[32m+[m[32m  }[m
     </style>[m
 [m
 <div class="container">[m
[36m@@ -27,7 +113,52 @@[m
     <a class="carousel-item" href="#four!"><img src="https://images.livemint.com/img/2020/05/01/600x338/PTI13-04-2020_000051B_1588354728439_1588354749822.jpg"></a>[m
   </div>[m
 [m
[31m-                                  [m
[32m+[m[32m  <div class="shop_details">[m
[32m+[m
[32m+[m[32m  <h3 class="shop_name"><?php echo $shop_name ?></h3>[m
[32m+[m[32m<p class="city"><?php echo $shop_city ?></p>[m[41m                              [m
[32m+[m
[32m+[m[32m<div class="contact">[m
[32m+[m[32m<div>[m
[32m+[m[32m<i class="material-icons">phone</i>[m
[32m+[m[32m</div>[m
[32m+[m[32m<div>[m
[32m+[m[32m<i class="material-icons">share</i>[m
[32m+[m[32m</div>[m
[32m+[m[32m<div>[m
[32m+[m[32m<i class="material-icons">map</i>[m
[32m+[m[32m</div>[m
[32m+[m
[32m+[m[32m<div>[m
[32m+[m[32m<img class="whatsapp " src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/WhatsApp.svg/766px-WhatsApp.svg.png" alt="whatsapp "/>[m
[32m+[m[32m</div>[m
[32m+[m[32m</div>[m
[32m+[m[32m<p class="address"><?php echo $shop_address ?></p>[m[41m   [m
[32m+[m
[32m+[m[32m<br>[m
[32m+[m[32m<button class="btn   green darken-2 widht_100 waves-effect waves-light">Best Deal</button>[m
[32m+[m
[32m+[m[32m<br>[m
[32m+[m[32m<br>[m
[32m+[m[32m<br>[m
[32m+[m
[32m+[m[32m<p class="city">Rate This</p>[m
[32m+[m[32m<div class="rating">[m
[32m+[m
[32m+[m[32m<?php[m
[32m+[m
[32m+[m[32mfor($i=0;$i<$shop_rate;$i++){[m
[32m+[m
[32m+[m[32m    echo '<i class="material-icons check">star</i>';[m
[32m+[m[32m}[m
[32m+[m
[32m+[m[32m?>[m
[32m+[m
[32m+[m[32m</div>[m
[32m+[m[32m<br><br><br>[m
[32m+[m
[32m+[m[32m</div>[m
[32m+[m
 [m
 [m
 [m
[1mdiff --git a/search.php b/search.php[m
[1mindex 8fb5a99..26be257 100644[m
[1m--- a/search.php[m
[1m+++ b/search.php[m
[36m@@ -50,6 +50,7 @@[m [mecho "<div class='container'><div class='card red'><p class='no white-text '>No[m
 [m
 while($row = mysqli_fetch_assoc($result)){[m
 [m
[32m+[m[32m    $shop_id = $row['shop_id'];[m
     $shop_name = $row['shop_name'];[m
     $shop_address = $row['shop_address'];[m
     $shop_city = $row['city'];[m
[36m@@ -58,7 +59,9 @@[m [mwhile($row = mysqli_fetch_assoc($result)){[m
 ?>[m
 [m
     <div class="col s12 m6">[m
[31m-      <div class="card z-depth-2 ">[m
[32m+[m[32m    <a href="product.php?shop_id=<?php echo $shop_id?>">[m
[32m+[m
[32m+[m[32m    <div class="card z-depth-2 ">[m
         <div class="card-content white-text">[m
           <span class="card-title"><?php echo $shop_name ?></span>[m
      [m
[36m@@ -73,13 +76,16 @@[m [mwhile($row = mysqli_fetch_assoc($result)){[m
          [m
         </div>[m
       </div>[m
[31m-    </div>[m
[32m+[m[32m      </a>[m
 [m
[32m+[m[32m    </div>[m
 [m
 [m
 <?php[m
 [m
 }[m
[32m+[m
[32m+[m
 }[m
 ?>[m
   </div>[m
