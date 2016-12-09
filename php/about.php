<?php
  require "variables.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>About Me</title>
    <link rel="stylesheet" href="../css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  </head>
  <body>

    <?= $navbar; ?>

    <div class="row my-container">
      <div id="aboutParas">
        <p>&emsp;I was born and raised in Grove City, Pennsylvania. Going through school, I was always interested in science, music, and art. I'm 6 ft tall and always get asked if I played sports but nope, I wasn't interested. I was one of those kids who lived for theater and both marching and concert band.</p>

        <p>&emsp;Funny enough, I had no clue about programming coming into college. Unless you consider learning HTML back when I played Neopets as a kid religously. My highschool had ZERO computer classes and I lacked initiative to teach it to myself. But I always wanted to do something in the STEM field and had a deep interest in computers so I decided that's what I want to do with my life. I took a pretty big leap of faith but it ended up being the best decision of my life. I love computer engineering and in some ways, I can't wait to graduate, get out in the real world, and continue learning anything I can about the field.</p>

        <p>&emsp;As for current interests, I knit a lot. I miss my cats and my dog a lot. I watch too much Game Grumps. I read when I have the time, shout out to Dave Eggers my favorite author. And to show I don't just sit around all day, I am an avid but amateur bike rider. Riding around through Pittsburgh's different neighborhoods is great, let me tell you.</p>

      </div>

      <?= $profile; ?>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  </body>
</html>
