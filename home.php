<?php
session_start();
?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
    <!--<link rel="stylesheet" href="includes/ikirato/ikiratocyamenu1.css">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="w3-top">
        <div class="genda">
            <a href="addboro.php "><?php echo $_SESSION['kazane'];?></a>
        </div>
        <div class="home" id="myTopnav">
            <a href="home.html" class="homeReal"><i class="fa fa-fw fa-home"></i>Home</a>
            <a href="house.html">House</a>
            <a href="electronics.html">Electronics</a>
            <a href="furnitures.html">Furnitures</a>
            <a href="colothes.html">Clothes</a>
            <a href="shoes.html">Shoes</a>
            <a href="beauty.html">Beauty</a>
            <a href="logout.php">Logout</a>
            <input type="type" name="searchProduct" placeholder="Search Product...">
            <button type="submit"><i class="fa fa-fw fa-search"></i></button> &nbsp;
            <a href="javascript:void(0);" class="icon" onclick="myFunction();">
                <i class="fa fa-bars"></i>
            </a>
        </div>
    </div>

    <div class="tandu">
    </div>
    <div class="w3-content" style="max-width:1100px;margin-top:80px;margin-bottom:80px">
    <?php include ("selectPro.php");?>
    </div>
    <div class="advert">
    </div>
    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "home") {
                x.className += " responsive";
            } else {
                x.className = "home";
            }
        }
    </script>
</body>

</html>