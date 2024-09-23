<?php
// Simple PHP Landing Page

// Define a welcome message
$welcomeMessage = "Welcome to Our Manga Reader!";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome Page</title>
  <link rel="stylesheet" href="css/home.css"> <!-- Optional CSS -->
</head>
<body>
<?php include 'header.php'; ?>
  <main>
    <h1><?php echo $welcomeMessage; ?></h1>
  </main>
  <script src="scripts/script.js"></script>
</body>
</html>
