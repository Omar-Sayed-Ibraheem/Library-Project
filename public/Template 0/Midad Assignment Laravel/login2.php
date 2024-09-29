<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css"> <!-- إذا كان لديك ملف CSS -->
</head>
<body>
    <h2>Login</h2>
    <form action="login.php" method="post">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br>
        <input type="submit" value="Login">
        <input type="reset" value="Reset">
    </form>

    <?php
    // معالجة بيانات تسجيل الدخول
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // احصل على بيانات تسجيل الدخول المدخلة
        $username = $_POST['username'];
        $password = $_POST['password'];

        // توصيل إلى قاعدة البيانات - يجب على المستخدم تغييرها وفقًا لبيئته
        $servername = "localhost";
        $dbusername = "username";
        $dbpassword = "password";
        $dbname = "myDB";

        // إنشاء الاتصال
        $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
        // التحقق من الاتصال
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // استعد البيانات للاستخدام في الاستعلام
        $username = mysqli_real_escape_string($conn, $username);
        $password = mysqli_real_escape_string($conn, $password);

        // استعلام SQL للتحقق من بيانات تسجيل الدخول
        $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // تسجيل الدخول ناجح
            session_start();
            $_SESSION['username'] = $username;
            header("Location: dashboard.php"); // إعادة التوجيه إلى صفحة لوحة المعلومات
        } else {
            // بيانات تسجيل الدخول غير صحيحة
            echo "<p>Invalid username or password!</p>";
        }

        $conn->close();
    }
    ?>
</body>
</html>
