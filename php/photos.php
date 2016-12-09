<?php
  require "variables.php";
  $photos = array();
  $conn = new mysqli('localhost','root','','photos');
  if ($conn->connect_error){
    die("Connection Failed: " . $conn->connect_error);
  }

  $sql = "SELECT * from photos";
  $result = $conn->query($sql);

  if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
      array_push($photos, $row['url']);
    }
  }

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>My Photography</title>
    <link rel="stylesheet" href="../css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  </head>
  <body>
    <?= $navbar; ?>

    <div class="gallery">
      <div class="thumbnails">

      <?php
        $i = 1;
        foreach($photos as $link){
          echo "<img onmouseover=\"imageSwitch('img" . $i . "')\" id=\"img" . $i . "\" src=\"" . $link . "\" alt=\"\" />";
          $i = $i + 1;
        }
      ?>
      </div>

      <div class="preview">
        <center><img id="preview" src="http://67.media.tumblr.com/f71da9dc4c7353cfd37140b344a4da79/tumblr_odh9htm1NJ1sjrnnyo3_540.jpg" alt="" /><p id="previewDescription">Corners of the space we occupied</p></center>
      </div>
    </div>
    <script src="../js/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>
