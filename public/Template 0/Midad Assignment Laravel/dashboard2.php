<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="styles.css"> <!-- إذا كان لديك ملف CSS -->
</head>
<body>
    <?php
    // بدء الجلسة للتحقق من تسجيل الدخول
    session_start();
    // التحقق من وجود اسم مستخدم في الجلسة
    if (!isset($_SESSION['username'])) {
        // إعادة التوجيه إلى صفحة تسجيل الدخول إذا لم يتم تسجيل الدخول
        header("Location: login.php");
        exit();
    }
    // احصل على اسم المستخدم من الجلسة
    $username = $_SESSION['username'];

    // اتصال بقاعدة البيانات - يجب على المستخدم تغييرها وفقًا لبيئته
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

    // استعلام SQL لاسترداد معلومات المستخدم
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // عرض معلومات المستخدم
        while($row = $result->fetch_assoc()) {
            echo "<h2>Welcome, " . $row['full_name'] . "!</h2>";
            echo "<p>Your age: " . $row['age'] . "</p>";
            echo "<img src='uploads/" . $username . ".jpg' alt='Profile Picture'>";
        }
    } else {
        echo "<p>No user found!</p>";
    }

    $conn->close();
    ?>

    <h2>Update Profile</h2>
    <form action="update_profile.php" method="post">
        <label for="full_name">Full Name:</label><br>
        <input type="text" id="full_name" name="full_name" required><br>
        <label for="age">Age:</label><br>
        <input type="number" id="age" name="age" required><br>
        <label for="profile_picture">Profile Picture:</label><br>
        <input type="file" id="profile_picture" name="profile_picture"><br>
        <input type="submit" value="Update">
        <input type="reset" value="Reset">
    </form>

    <a href="logout.php">Logout</a>
</body>
</html>
