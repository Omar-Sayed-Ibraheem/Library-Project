<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login ORIMMA</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,600,0,0"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/styles.css" />
</head>
<body>
    <div class="login">
      <div class="avatar">
        <img src="assets/Images/ORIMMA.jpg" />
      </div>
      <h2>Login</h2>
      <h3>Please Enter Your credentials</h3>

      <form class="login-form" method="POST">
        <div class="textbox">
          <input name="email" required type="email" placeholder="email" />
          <span class="material-symbols-outlined"> account_circle </span>
        </div>
        <div class="textbox">
          <input name="password" required type="password" placeholder="Password" />
          <span class="material-symbols-outlined"> lock </span>
        </div>
        <button type="reset" value="Reset">Reset</button>
        <button type="submit">LOGIN</button>
        <a href="signup.php">Sign Up Instead</a>
      </form>
    </div>
    
    <?php
include 'db_connect.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        session_start();
        $_SESSION['email'] = $email;
        echo "<p>Login Successfully!</p>";
        header("Location: dashboard.php");
    } else {
        echo "<p>Invalid username or password!</p>";
    }

    $conn->close();
}
?>

  </body>
</html>
