
<?php

$Sconn = new mysqli("localhost", "root", "", "customers");

// التحقق من الاتصال بقاعدة البيانات
if ($Sconn->connect_error) {
    die("Connection failed: " . $Sconn->connect_error);
}

// استعلام لاسترداد البيانات من الجدول orderclothes
$sql = "SELECT * FROM orderclothes";
$result = $Sconn->query($sql);

if (!$result) {
    die('Error: ' . $Sconn->error);
}

// عرض البيانات
echo "<ul>";
while ($row = $result->fetch_assoc()) {
    echo "<li>" . $row['Clothescode'] . "</li>";
}
echo "</ul>";

// التحقق من استلام بيانات من النموذج
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // استلام البيانات من النموذج
    $Clothescode= $_POST['Clothescode'];
    $scale = $_POST['scale'];
    $color = $_POST['color'];
    $amount = $_POST['amount'];
    $price = $_POST['price'];
    $Jointname = $_POST['Jointname'];
    
    // إدراج البيانات في قاعدة البيانات
    $sql_insert= "INSERT INTO orderclothes (Clothescode, scale, color, amount, price, Jointname) VALUES ('$Clothescode', '$scale', '$color', '$amount', '$price', '$Jointname')";

    if ($Sconn->query($sql_insert) === TRUE) {
        echo "تم إضافة المستخدم بنجاح!";
    } else {
        echo "حدث خطأ أثناء إضافة المستخدم: " . $Sconn->error;
    }
}

// إغلاق اتصال قاعدة البيانات
$Sconn->close();

?>

<!DOCTYPE HTML>
<html>
<head>
    <title>تفصيل اون لاين</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=devic-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>
<body>
    <h1>تفصيل اون لاين - طلب الطلبات</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="Clothescode">كود الملابس:</label>
        <input type="number" id="Clothescode" name="Clothescode" required><br><br>
       
        <label for="scale">المقاس:</label>
        <input type="text" id="scale" name="scale" required><br><br>
        
        <label for="color">اللون:</label>
        <input type="text" id="color" name="color" required><br><br>
        
        <label for="amount">كمية:</label>
        <input type="number" id="amount" name="amount" required><br><br>
        
        <label for="price">السعر:</label>
        <input type="number" id="price" name="price" required><br><br>
        
        <label for="Jointname">اسم المفصل:</label>
        <input type="text" id="Jointname" name="Jointname" required><br><br>
        
        <input type="submit" value="أرسل الطلب">
    </form>

    <!-- Menu -->
    <nav id="menu">
        <ul class="links">
            <li><a href="login.php">الصفحه الرئيسيه</a></li>
            <li><a href="register.php">تسجيل الدخول</a></li>
            <li><a href="long aut.php">تسجيل خروج</a></li>
        </ul>
        <ul class="actions stacked">
        
        </ul>
    </nav>

    <!-- Main -->
    <div id="main" class="alt">
        <!-- One -->
        <section id="one">
            <div class="inner">
                <header class="major">
                </header>
                <!-- Content -->
            </div>
            </div>
            <hr class="major" />
            <!-- Lists -->
            <h4>Icons</h4>
            <ul class="icons">
                <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
                <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
                <li><a href="#" class="icon brands fa-github"><span class="label">Github</span></a