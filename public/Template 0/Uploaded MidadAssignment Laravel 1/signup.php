<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up ORIMMA</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,600,0,0"
    />
    <link rel="stylesheet" href="assets/styles.css" />
  </head>
  <body>
    <div class="login">
      <div class="avatar">
        <img src="assets/Images/ORIMMA.jpg" />
      </div>
      <h2>Sign Up</h2>
      <h3>Please Sign Up with Your credentials</h3>

      <form class="login-form"  method="POST">
        <div class="textbox">
          <input name="email" required type="email" placeholder="User Email" />
          <span class="material-symbols-outlined"> account_circle </span>
        </div>

        <div class="textbox">
          <input name="password" required type="password" placeholder="Password" />
          <span class="material-symbols-outlined"> lock </span>
        </div>

        <div class="textbox">
          <input name="confirm_password" required type="password" placeholder="Confirm Password" />
          <span class="material-symbols-outlined"> lock </span>
        </div>

        <br>

        <div class="textbox">
          <input name="name"
            required
            spellcheck="false"
            type="text"
            placeholder="Type a name"
          />
          <span class="material-symbols-outlined"> id_card </span>
          <label for="textbox">Username</label>
        </div>

        <div class="textbox">
          <input name="dateofbirth"
            required
            spellcheck="false"
            type="date"
            placeholder="Type a date"
          />
          <span class="material-symbols-outlined"> calendar_today </span>
          <label for="textbox">Date Of Birth</label>
        </div>

        <button type="reset" value="Reset">Reset</button>
        <button type="submit">Sign Up</button>
        <a href="login.php">Login Instead!</a>
      </form>
    </div>
    
   <?php
include 'db_connect.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $name = $_POST['name'];
    $dateofbirth = $_POST['dateofbirth'];

    if (empty($email) || empty($password) || empty($confirm_password) || empty($name) || empty($dateofbirth)) {
        echo "<p>Please fill all fields!</p>";
    } elseif ($password !== $confirm_password) {
        echo "<p>Passwords do not match!</p>";
    } else {
        $email = mysqli_real_escape_string($conn, $email);
        $password = mysqli_real_escape_string($conn, $password);
        $name = mysqli_real_escape_string($conn, $name);
        $dateofbirth = mysqli_real_escape_string($conn, $dateofbirth);

        $sql = "INSERT INTO users (email, password, name, dateofbirth) VALUES ('$email', '$password', '$name', '$dateofbirth')";

        if ($conn->query($sql) === TRUE) {
            echo "<p>Registration successful!</p>";
            header("Location: login.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
}
?>
  </body>
</html>