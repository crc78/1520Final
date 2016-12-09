<?php
  require "variables.php";
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Contact Me</title>
    <link rel="stylesheet" href="../css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  </head>
  <body>

    <?= $navbar; ?>

    <p id="contactPara">Ask me a question, tell me a cool story, or maybe a funny joke.</p>

    <div class="container contact-form">
      <!-- basic contact form stuff -->
        <form action="submitForm.php" method="post">
          Name:<br>
          <input type="text" name="name" required><br><br><br>
          Email:<br>
          <input type="text" name="email" required><br><br><br>
          Comments:<br>
          <textarea required name="comment"></textarea><br><br><br>
          <center><input id="subButton" type="submit" value="Submit"></center>
        </form>
    </div>

    <?= $profile; ?>
    </div

  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="../js/main.js"></script>
  </body>
 </html>
