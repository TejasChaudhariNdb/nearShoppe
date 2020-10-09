  <html>
<?php include("components/head.php"); ?>

    <body>

   <?php include("components/navbar.php")?>

             

<!--   Search Card Goes HEre -->

<style>

.card{
padding: 2px;

}
.container{
padding: 2px;
}
.input{
width: 85% !important;
}

.search_button{
    background-color: #1565c0 ;
 }

 .search_container{
    display: flex;
    justify-content: center;
 }


 .search_icon{
    position: absolute;
    top: 33%;
    right: 2%;

 }

 .mic_icon{
    position: absolute;
    top: 33%;
 }
 
.search_box{
    padding: 10px;
    border-radius: 20%;
    color: white;
    top: 16%;
}

body{
    background-color: #fafafa ;
}

.col{
    padding: 11px !important;
}

@media only screen and (min-width: 993px){
nav a.sidenav-trigger {
 
    display:block;
}

}

.brand-logo{
    left: 40%;
}
    </style>


<br>
<div class="container">
<div class="card">
<form action="search.php" method="get">
    <div class="input_container container">

    <input placeholder="Search Products"  class="input" name="query"/>

<span class="search_box search_icon green  waves-effect waves-light"><i class="material-icons ">search</i></span>
</div>
</form>
</div>

<!-- Category Goes Here -->
<br>
<div class="card">
<div class="row">

    <div class="col">
<i class="material-icons">shopping_cart</i>
<br>
Shop
    </div>

    <div class="col">
<i class="material-icons">cake</i>
<br>
Cake
    </div>

    <div class="col">
<i class="material-icons">business</i>
<br>
office
    </div>

    <div class="col">
<i class="material-icons">build</i>
<br>
Build
    </div>

    <div class="col">
<i class="material-icons">directions_bike</i>
<br>
Bike
    </div>

    <div class="col">
<i class="material-icons">drive_eta</i>
<br>
Car
    </div>




    <div class="col">
        <i class="material-icons">shopping_cart</i>
        <br>
        Shop
            </div>
        
            <div class="col">
        <i class="material-icons">cake</i>
        <br>
        Cake
            </div>
        
            <div class="col">
        <i class="material-icons">business</i>
        <br>
        Office
            </div>
        
            <div class="col">
        <i class="material-icons">build</i>
        <br>
        Build
            </div>
        
            <div class="col">
        <i class="material-icons">directions_bike</i>
        <br>
        Bike
            </div>
        
            <div class="col">
        <i class="material-icons">drive_eta</i>
        <br>
        Car
            </div>
        
            <div class="col">
                <i class="material-icons">cake</i>
                <br>
                Cake
                    </div>

                    <div class="col">
                        <i class="material-icons">cake</i>
                        <br>
                        Cake
                            </div>

                            <div class="col">
                                <i class="material-icons">directions_bike</i>
                                <br>
                                Bike
                                    </div>          

                                  
    </div>



</div>
             <script>
 
 $('.sidenav').show();

 
 $(document).ready(function(){
    $('.sidenav').sidenav();
  });
                 </script>


    <!-- Aaaj Tevv -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
  </html>
        