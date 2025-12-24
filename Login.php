<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Transparent Login Form UI</title>
    <link rel="stylesheet" href="Style login.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
  <?php

@include 'config.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve the submitted username and password
  $username = $_POST["username"];
  $password = $_POST["password"];

  // Validate the username and password using database queries
  $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
  $result = $conn->query($sql);

  if ($result->num_rows == 1) {
    // Check if the user is an admin
    $row = $result->fetch_assoc();
    if ($row['is_admin'] == 1) {
      echo "Admin login successful!";
      header("Location: adminpage.php"); // Redirect to admin.php
      exit();
    } else {
      echo "Login successful!";
      header("Location: index.php"); // Redirect to homepage.html
      exit();
    }
  } else {
    echo "Invalid username or password!";
  }

  // Close the database connection
  $conn->close();
}
?>


    <div class="bg-img">
      <div class="content">
        <header>Login Form</header>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
          <div class="field">
            <span class="fa fa-user"></span>
            <input type="text" name="username" required placeholder="Username">
          </div>
          <div class="field space">
            <span class="fa fa-lock"></span>
            <input type="password" name="password" class="pass-key" required placeholder="Password">
            <span class="show">SHOW</span>
          </div>
          <div class="pass">
            <a href="#">Forgot Password?</a>
          </div>
          <div class="field">
            <input type="submit" value="LOGIN">
            <a href="Homepage.html"></a>
          </div>
        </form>
        <div class="signup">Don't have an account?
        <a href="register.php">Signup Now</a>
        </div>
      </div>
    </div>

    <script>
      const pass_field = document.querySelector('.pass-key');
      const showBtn = document.querySelector('.show');
      showBtn.addEventListener('click', function(){
       if(pass_field.type === "password"){
         pass_field.type = "text";
         showBtn.textContent = "HIDE";
         showBtn.style.color = "#3498db";
       }else{
         pass_field.type = "password";
         showBtn.textContent = "SHOW";
         showBtn.style.color = "#222";
       }
      });
    </script>
  </body>
</html>