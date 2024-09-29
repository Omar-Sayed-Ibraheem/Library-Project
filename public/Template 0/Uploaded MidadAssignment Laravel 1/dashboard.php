<?php
session_start();
include 'db_connect.php';

if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

$sql = "SELECT * FROM users WHERE email='{$_SESSION['email']}'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $email = $row['email'];
        $password = $row['password'];
        $name = $row['name'];
        $dateofbirth = $row['dateofbirth'];
        $profilepictures = $row['profilepictures'];
        
    }
} else {
    echo "No user found!";
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile</title>
    <link rel="stylesheet" href="assets/styles.css" />
</head>
<body>
    <div class="login">
    <div class="avatar">
        <img src="assets/profilepictures/<?php echo $profilepictures; ?>" />
    </div>
    <h2>Update Profile</h2>
    <form class="login-form" action="" method="post" enctype="multipart/form-data">
        <div class="textbox">
            <input name="email" required type="email" placeholder="Email" value="<?php echo $email; ?>" />
        </div>
        <div class="textbox">
            <input name="password" required type="password" placeholder="Password" value="<?php echo $password; ?>" />
        </div>
        <div class="textbox">
            <input name="name" required type="text" placeholder="Name" value="<?php echo $name; ?>" />
        </div>
        <div class="textbox">
            <input name="dateofbirth" required type="date" placeholder="Date of Birth" value="<?php echo $dateofbirth; ?>" />
        </div>
        <div class="textbox">
            <input type="file" name="profile_picture" accept="image/*" />
        </div>
        <button type="submit" name="update">Update</button>
        <a href="logout.php">Logout</a>
    </form>
</div>

    <?php


if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $dateofbirth = $_POST['dateofbirth'];
    $profile_picture = $_FILES['profile_picture']['name'];

    if ($profile_picture) {
        $target_dir = "assets/profilepictures/";
        $target_file = $target_dir . basename($profile_picture);
        move_uploaded_file($_FILES["profile_picture"]["tmp_name"], $target_file);
    }

    $sql = "UPDATE users SET email='$email', password='$password', name='$name', dateofbirth='$dateofbirth', profilepictures='$profile_picture' WHERE email='{$_SESSION['email']}'";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['email'] = $email;
        echo "<p>Profile Updated Successfully!</p>";
        header("Location: dashboard.php");
    } else {
        echo "Error updating record: " . $conn->error;
    }
    $conn->close();
}
?>

</body>
</html>
