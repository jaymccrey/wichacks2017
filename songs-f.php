
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/profile.css">
        <title>Profile</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="https://use.fontawesome.com/ea796fcadd.js"></script>
        <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">

    </head>
    
    <style>
        body {
         font-family: 'PT Sans', sans-serif;
    }
    </style>
    <body>
    <div class="container">
                   <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               
                <img src="img/Logowhite.png" style="width:50px;height:50px;padding:7px;">
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                 <ul class="nav navbar-nav">
                 
                    <li>
                        <a href="STREAM.php">Stream</a>
                    </li>
                    <li>
                        <a href="about_us.html">About Us</a>
                    </li>
                    <li>
                        <a href="my_friends.html">My Lit Friends</a>
                    </li>
                    
                </ul>
            </div>

            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <br>
    <br>
    <br>
           <div class="userContainer clearfix">
               <div class="profilePictureContainer">
                   <img class="profilePicture" src="img/valentina.jpg">
               </div>
               <div class="userInfo">
                      <strong>Name:</strong> Valentina
                      <div class="timerCountdown">
                       
                       <div id="clockdiv">
                          <div class="clockElement">
                            <span class="days"></span>
                            <div class="smalltext">Days</div>
                          </div>
                          <div class="clockElement">
                            <span class="hours"></span>
                            <div class="smalltext">Hours</div>
                          </div>
                          <div class="clockElement">
                            <span class="minutes"></span>
                            <div class="smalltext">Minutes</div>
                          </div>
                          <div class="clockElement">
                            <span class="seconds"></span>
                            <div class="smalltext">Seconds</div>
                          </div>
                        </div>
                       <br>
                       <button ID="submitLitSongsButton" type="button" class="redButton" data-toggle="modal" data-target="#myModal" disabled>
                             Add <i class="fa fa-fire" aria-hidden="true"></i> Songs
                       </button>
                   </div>
               </div>
           </div>
            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Submit Songs</h4>
                  </div>
                  
                </div>
              </div>
            </div>
            <hr />
            <div class="playlistContainer">
               <div class="song">
                   
                   </div>
            </div>
<?php
$mylink="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/246720590&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true";

//header("Location:$mylink");
//echo $mylink;
$song1 =$_POST['song1'];
$song2 =$_POST['song2'];
$song3 =$_POST['song3'];

 

?>
<div class="playlistContainer">
     <div class="song" style="padding: 20px; margin-left:100px">
         <?php
             echo"

                <iframe width=\"100%\" height=\"450\" scrolling=\"no\" src=\"$song1\"></iframe>
            ";
         ?>
         
     </div>
     <div class="song" style="padding: 20px">
         <?php
             echo"

                <iframe height=\"450\" scrolling=\"no\"  src=\"$song2\"></iframe>
            ";
         ?>
         
     </div>
     <div class="song" style="padding: 20px">
         <?php
             echo"

                <iframe height=\"450\" scrolling=\"no\" src=\"$song3\"></iframe>
            ";
         ?>
         
     </div>
</div>

     


<!--
  </body>
</html>-->