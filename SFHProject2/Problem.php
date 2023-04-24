<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>


    <link rel="stylesheet" type="text/css" href="style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

</head>
<body>


<div id="topBanner">

    <img id="leftNavBtn" src="https://raw.githubusercontent.com/Zulinov/skillsProjects/main/hamburger.png" height="60px" class="leftSide">


    <h2 class="whiteText middleText spaceInTopBanner">Halifax Canoe and Kayak </h2>

    <img src="https://raw.githubusercontent.com/Zulinov/skillsProjects/main/paddle-white.png" height="60px" class="topRight" >

</div>

<br><p></p><br><p></p>
<a href="logout.php" class="rightSide paddingRightOnly">Logout</a>
<br>

<div>

Welcome <?php echo $_GET["firstName"]; ?><br>

    // If role =”admin” -> link to: new-account.php and isnt-working.php
    // else If role =”manager” -> link to: lost-password.php and isnt-working.php
    //else If role =”ceo” -> link to: need-help.php and isnt-working.php

</div>
</body>
</html>