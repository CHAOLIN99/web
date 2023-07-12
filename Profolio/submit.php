<!DOCTYPE html>
<html>
<head>
  <link rel="icon" type="image/png" href="favicon.png">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
</head>
<body>
  <h1>Thank you for contacting us!</h1>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = isset($_POST["name"]) ? $_POST["name"] : "";
    $email = isset($_POST["email"]) ? $_POST["email"] : "";
    $msg = isset($_POST["message"]) ? $_POST["message"] : "";

    echo "<p>Welcome $name</p>";
    echo "<p>Your email address is: $email</p>";
    echo "<p>Your message is: $msg</p>";
  }
  ?>
</body>
</html>