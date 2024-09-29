<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Information App</title>
  <link rel="stylesheet" href="assets/styles.css">
  <style>
    
    nav ul {
      display: flex;
      list-style: none;
      padding: 0; 
      margin: 0; 
    }

    nav li {
      margin-right: 10px;
    }

    nav li:last-child {
      margin-right: 0;
    }

    nav a button {
      background-color: #4CAF50;
      border: none;
      color: white;
      padding: 10px 15px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      cursor: pointer;
    }

    nav a button:hover {
      background-color: #3e8e41;
    }
  </style>
</head>
<body>
  <header>
    <h1>User Information App</h1>
    <nav>
      <ul>
        <li><a href="signup.php"><button>Sign Up</button></a></li>
        <li><a href="login.php"><button>LogIn</button></a></li>
      </ul>
    </nav>
  </header>

  <main>
    <section>
      <h2>Welcome to User Information App</h2>
      <p>This application allows you to manage your personal information and store it securely.</p>
    </section>
  </main>

  <footer>
    <p>&copy; 2024 ORIMMA Corp.</p>
  </footer>
</body>
</html>
