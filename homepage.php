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
  <link rel="stylesheet" href="css/style.css"> 
  <link rel="stylesheet" href="css/slider.css"><!-- Optional CSS -->
</head>
<body>
<?php include 'header.php'; ?>
<div class="carousel">
  <div class="carousel-item active">
    <div class="content">
      <h3>Chapter: 4</h3>
      <h2>Batman Year One</h2>
      <p>The story recounts the beginning of Bruce Wayne’s career...</p>
      <button>Start Reading →</button>
    </div>
    <img src="your-image.jpg" alt="Batman Year One">
  </div>
  <!-- Additional carousel items -->
</div>
  <main>
    <h1><?php echo $welcomeMessage; ?></h1>
  </main>
  <script src="scripts/script.js"></script>
  <script src="scripts/slider.js"></script>
</body>
</html>
