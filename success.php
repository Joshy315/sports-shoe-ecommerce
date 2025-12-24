<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Payment Successful</title>

   <!-- custom css file link -->
   <link rel="stylesheet" href="style.css">

   <style>
      body {
         display: flex;
         align-items: center;
         justify-content: center;
         height: 100vh;
         background-color: #f2f2f2;
         font-family: Arial, sans-serif;
      }

      .container {
         text-align: center;
         background-color: #fff;
         padding: 40px;
         border-radius: 5px;
         box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      }

      .heading {
         font-size: 24px;
         margin-bottom: 20px;
      }

      p {
         margin-bottom: 10px;
      }

      .homepage-btn {
         display: inline-block;
         padding: 10px 20px;
         background-color: #3498db;
         color: #fff;
         text-decoration: none;
         border-radius: 5px;
         transition: background-color 0.3s ease;
      }

      .homepage-btn:hover {
         background-color: #2980b9;
      }
   </style>

</head>
<body>
   <div class="container">
      <h1 class="heading">Payment Successful!</h1>
      <p>Thank you for your purchase. Your payment has been successfully processed.</p>
      <p>An email confirmation with the order details will be sent to your registered email address.</p>

      <a href="index.php" class="homepage-btn">Go to Homepage</a>
   </div>
</body>
</html>