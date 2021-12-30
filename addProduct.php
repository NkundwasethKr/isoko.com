<?php
session_start();
include("connect.php");
if ($_SESSION['username']) {
    $uName = $_SESSION['username'];
    $kurayo = mysqli_query($conn, "SELECT * FROM registration where uname = '$uName'");
    $result = mysqli_num_rows($kurayo);
    if ($result == 1) {
        $pname = $_POST['pname'];
        $price = $_POST['price'];
        $details = $_POST['details'];
        $picture = $_FILES['picture']['name'];
        $target = "userPics/".$_FILES['picture']['name'];
        $tmp_name =$_FILES['picture']['tmp_name'];
        if(move_uploaded_file($tmp_name,$target))
        {
            $shyiramo =mysqli_query($conn, "insert into products(pName,price,picture,details,userId1)values('$pname','$price','$picture','$details','$uName')");
            if($shyiramo)
            {
                echo "Product Added";
            }
            else
            {
                echo"Data not Inserted";
            }
        }
    }
}
?>