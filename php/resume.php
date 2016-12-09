<?php
  require "variables.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>My Resume</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  </head>
  <body>
    <?= $navbar; ?>
	
<!-- still deciding if I wanna display a document or put my resume into html -->
<div class="container">

  <div class="resume">
    <center>
      <h1>Caitlin Campbell</h1>
	    
      <p>Pittsburgh, PA&nbsp;&bull;&nbsp;crc78@pitt.edu</p>
	    
    </center>
    <span class="resume-heading">SKILLS</span>
    <hr>

    <p><b>Computer Skills:</b> Java, C, JavaScript, Ember.js, HTML, CSS, MIPS, and MATLAB</p>

    <p><b>Relevant Coursework:</b> Computer Architecture, Computer Networks, Web Application Programming, Systems Software, Algorithms, Data Structures, Discrete Math, Differential Equations, Linear Algebra, Probability and Statistics</p>

    <span class="resume-heading">EDUCATION</span>
    <hr>

    <p><b>University of Pittsburgh</b><br>Bachelor of Science in Computer Engineering, Expected Graduation December 2017</p>

    <ul>
      <li>Credits earned by May 2017: 84</li>
      <li>Overall GPA: 3.193</li>
    </ul>

    <br>
    <b>Grove City Area High School</b><br>Graduated June 2013<br>
    <ul>
      <li>High Honors recipient, National Honor Society member, Nation Thespian Society member</li>
      <li>GPA: 94.83</li>
    </ul>

    <span class="resume-heading">WORK EXPERIENCE</span>
    <hr>

    <b>SCA Technologies</b>&emsp;Pittsburgh, PA&emsp;September 2015 - December 2015 & May 2016 - August 2016
    <p>Software Co-op</p>

    <ul>
      <li>Created five web applications for internal use with Ember.js and JavaScript</li>
       <li>Composed and gave presentations to software development team and others on projects</li>
       <li>Worked efficiently and diligently with another intern on projects</li>
    </ul>

    <b>Pittsburgh Steelers Sideline Store</b>&emsp;Grove City, PA&emsp;May 2014 - August 2015

    <p>Sales Associate</p>

    <ul>
      <li>Ran cash register efficiently and accurately</li>
      <li>Provided exceptional customer service</li>
      <li>Maintained store and kept merchandise organized</li>
    </ul>

    <b>The Guthrie Theater</b>&emsp;Grove City, PA&emsp;June 2011 - August 2015
    <p>Counter Person</p>
	  
    <ul>
       <li>Ran cash register and concession counter efficiently and accurately</li>
       <li>Routinely restocked and cleaned concession counter</li>
       <li>Thoroughly cleaned entire theater regularly</li>
    </ul>

    <span class="resume-heading">COCURRICULAR ACTIVITIES</span>
    <hr>

    <b>Club Member</b>&emsp;Pittsburgh, PA&emsp;August 2016 - Present
    <p>Pitt Knits</p>

    <b>Staff Member</b>&emsp;Pittsburgh, PA&emsp;September 2014 - May 2015
    <p>University of Pittsburgh, WPTS 92.1 FM</p>

    <b>Clarinetist</b>&emsp;Pittsburgh, PA&emsp;August 2013 - December 2014
    <p>University of Pittsburgh, Marching Band</p>

  </div>

    <?= $resumeProfile; ?>
  </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>
