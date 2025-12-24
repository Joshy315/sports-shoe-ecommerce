<?php
@include 'config.php';

// Check if the registration form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $phone = $_POST["phone"];
    $birthdate = $_POST["birthdate"];
    $gender = $_POST["gender"];
    $street1 = $_POST["street1"];
    $street2 = $_POST["street2"];
    $country = $_POST["country"];
    $city = $_POST["city"];
    $region = $_POST["region"];
    $postal_code = $_POST["postal_code"];

    // Prepare and bind the SQL statement
    $stmt = $conn->prepare("INSERT INTO users (fullname, email, username, password, phone, birthdate, gender, street1, street2, country, city, region, postal_code)
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssssssss", $fullname, $email, $username, $password, $phone, $birthdate, $gender, $street1, $street2, $country, $city, $region, $postal_code);

    // Execute the statement
    if ($stmt->execute()) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Registration Form in HTML CSS</title>
    
    <link rel="stylesheet" href="Style register.css" />
  </head>
  <body>
    <section class="container">
      <header>Registration Form</header>
      <form action="#" class="form" method="POST">
        <div class="input-box">
          <label>Full Name</label>
          <input type="text" name="fullname" placeholder="Enter full name" required />
        </div>

        <div class="input-box">
          <label>Email Address</label>
          <input type="email" name="email" placeholder="Enter email address" required />
        </div>

        <div class="input-box">
          <label>Username</label>
          <input type="username" name="username" placeholder="Enter username" required />
        </div>

        <div class="input-box">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter password" required />
        </div>

        <div class="column">
          <div class="input-box">
            <label>Phone Number</label>
            <input type="tel" name="phone" placeholder="Enter phone number" required />
          </div>
          <div class="input-box">
            <label>Birth Date</label>
            <input type="date" name="birthdate" placeholder="Enter birth date" required />
          </div>
        </div>
        <div class="gender-box">
          <h3>Gender</h3>
          <div class="gender-option">
            <div class="gender">
              <input type="radio" id="check-male" name="gender" value="male" checked />
              <label for="check-male">Male</label>
            </div>
            <div class="gender">
              <input type="radio" id="check-female" name="gender" value="female" />
              <label for="check-female">Female</label>
            </div>
            <div class="gender">
              <input type="radio" id="check-other" name="gender" value="prefer-not-to-say" />
              <label for="check-other">Prefer Not to Say</label>
            </div>
          </div>
        </div>
        <div class="input-box address">
          <label>Address</label>
          <input type="text" name="street1" placeholder="Enter street address" required />
          <input type="text" name="street2" placeholder="Enter street address line 2" required />
          <div class="column">
            <div class="select-box">
              <select name="country">
                <option hidden>Country</option>
                <option value="Malaysia">Malaysia</option>
              </select>
            </div>
            <input type="text" name="city" placeholder="Enter your city" required />
          </div>
          <div class="column">
            <input type="text" name="region" placeholder="Enter your region" required />
            <input type="number" name="postal_code" placeholder="Enter postal code" required />
          </div>
        </div>
        <button type="submit">Submit</button>
      </form>
    </section>
  </body>
</html>