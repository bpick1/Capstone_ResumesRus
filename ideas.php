<?php
session_start(); 

if (isset($_SESSION['authenticated']) && $_SESSION['authenticated'] === true) {
    // User is logged in
    ?>
     <a href="logout.php">Logout</a> 
    <?php
} else {
    // User is not logged in 
    ?>
    <a href="login.php">Login</a>
    <a href="signup.php">Sign Up</a>
    <?php
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Resumes R Us</title>
</head>
<body>

  <?php
    require "dbConnect.php";
  ?>

  <div class="wrapper">

    <div class="sidebar">
      <a href="index.php"><img src="Images/Logo_1.png" alt="Resumes R Us Logo"></a>
      <br>
      <br>
      <br>
      <a href="resume.php">New Resume</a>
      <br>
      <br>
      <a href="#">Thesaurus</a>
      <br>
      <br>
      <a href="#">Ideas for artful jobs</a>
      <br>
      <br>
      <a href="templates.php">Templates</a>
      <br>
      <br>
      <a href="ideas.php">Job Ideas</a>
    </div>

    <div class="header">
      <a href="index.php"><img src="Images/Logo_2.png" alt="Resumes R Us Logo"></a>
      <br>
      <a href="#">Make a Change</a>
      <a href="tips.php">Tips</a>
      <a href="coverLetter.php">Cover Letter</a>
    </div>

    <div class="mainContent">

      <div id="ideasList">
        <h2>Job Ideas</h2>
        <h3>-Something</h3>
        <h3>-A different something</h3>
        <h3>-A slightly different something</h3>
        <h3>-~~~~~~~~~~~~~~</h3>
        <h3>-~~~~~~~~~~~~~~</h3>
        <h3>-~~~~~~~~~~~~~~</h3>
        <h3>-~~~~~~~~~~~~~~</h3>
        <h3>-~~~~~~~~~~~~~~</h3>
        <h3>-~~~~~~~~~~~~~~</h3>
        <h3>-~~~~~~~~~~~~~~</h3>
        <h3>-~~~~~~~~~~~~~~</h3>
        <h3>-~~~~~~~~~~~~~~</h3>
        <h3>-~~~~~~~~~~~~~~</h3>
      </div>

    </div>

  </div>

</body>
</html>
