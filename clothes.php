<?php
 $Clothescode= $_POST['Clothescode'];
 $scale = $_POST['scale'];
 $color = $_POST['color'];
 $amount = $_POST['amount'];
 $price = $_POST['price'];
 $Jointname = $_POST['Jointname'];
 

 }
 $Clothescode = htmlentities(mysqli_real_escape_string($conn, $_POST['Clothescode']));
 $scale = htmlentities(mysqli_real_escape_string($conn, $_POST['scale']));
 $color = htmlentities(mysqli_real_escape_string($conn,$_POST['color']));
 $amount= htmlentities(mysqli_real_escape_string($conn,$_POST['amount']));
 $price= htmlentities(mysqli_real_escape_string($conn,$_POST['price']))
 $Jointname= htmlentities(mysqli_real_escape_string($conn,$_POST['Jointname']))
 include (`client.php`);
}

 else{

    $sql = "INSERT INTO orderclothes (Clothescode, scale,color,amount,price,Jointname) VALUES ('$Clothescode', ' $scale', '$color','$amount', '$price', '$Jointname')";
mysqli_query($conn,$sql)
header('location:اسم الصفحه.php');

}else{

} include (`client.php`);
