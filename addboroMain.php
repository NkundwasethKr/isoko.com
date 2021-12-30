<?php
session_start();
?>
<html>

<head>
    <DOCTYPE></DOCTYPE>
    <meta charset="utf-8">
    <meta name="viewport" content="device-width, initial-scale=1.0">
</head>
<link rel="stylesheet" href="twara.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body>
    <div style="overflow:auto">
        <div class="umutwe">
            <header>Hahira hano</header>
        </div>
        <div class="genda">
            <a href="profile.php " class = "ifoto"><?php echo $_SESSION['kazane'];?></a>
        </div>
        <div class="top" id="topMenu">
            <a href="home.php"> <i class="fa fa-fw fa-top"></i>Home</a>
            <a href="home.html" class="main">Main Page</a>
            <a href="profile.html">Profile</a>
            <a href="chat.php"><i class="fa fa-instagram"></i> &nbsp;Chat</a>
            <a href="near.js">Near By</a>
            <a href="logout.php">Logout</a>
            <a href="home.html" class="active">Settings</a>
            <a href="javascript:void(0);" class="icon" onclick=myFunction();> <i class="fa fa-bars"></i></a>


        </div>
        <div class="side">
            <a href="addboroMain.php">Add Product</a>
            <a href="updateProduct.php">Update</a>
            <a href="Delete.php">Delete</a>
        </div>
        <div class="content">
        <?php include("addPro.php"); ?>
        </div>
        <div class="amamaza">
            <div id="agakubo">
                <img src="userPics/JustMe.jpg" width="100" />
                <div class="ijambo">
                    If you want To advertise, This is your right time
                </div>
            </div>
        </div>
    </div>
    <?php include("footer.html"); ?>
    <script>
        function myFunction() {
            var x = document.getElementById("topMenu");
            if (x.className === "top") {
                x.className += "responsive";
            } else {
                x.className = "top";
            }
        }
    </script>
</body>

</html>