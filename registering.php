<?php
 $name = $_POST['name'];
$phonenumber = $_POST['phonenumber'];
$code = $_POST['Code'];
$password = $_POST['password']; 

 }
 $name = htmlentities(mysqli_real_escape_string($conn, $_POST['name']));
 $phonenumber = htmlentities(mysqli_real_escape_string($conn, $_POST['phonenumber']));
 $code = htmlentities(mysqli_real_escape_string($conn,$_POST['Code']));
 $password = htmlentities(mysqli_real_escape_string($conn,$_POST['password']));
 
 include (`register.php`);
}

 else{

    $sql = "INSERT INTO users (c_name, phonenumber, Code,c_password) VALUES ('$name', '$phonenumber', '$code', '$password')";
mysqli_query($conn,$sql)
header('location:loger.php');

}else{

} include (`register.php`);

 

 
 
 



?>