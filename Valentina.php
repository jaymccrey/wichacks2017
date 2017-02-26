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
               
                <img src="img/Logowhite.png" style="width:50px;height:50px;padding:7px;" />
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
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
                   <img class="profilePicture" src="img/valentina.jpg" />
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
                  <div class="modal-body">
                       <div class="submitPlaylistContainer">
                               <button class="redButton" type="button">SoundCloud</button>
                               
                                <form action="update-songs.php" method="Post">
                                  <div class="srcSong">
                                      LIT <i class="fa fa-music" aria-hidden="true"></i> #1: <input type="text" name="song1" ID="song1" value="soundcloud code" class="songLinkTextBox">
                                  </div>
                                  <div class="srcSong">
                                      LIT <i class="fa fa-music" aria-hidden="true"></i> #2: <input type="text" name="song2" ID="song2" value="soundcloud code" class="songLinkTextBox">
                                  </div>
                                  <div class="srcSong">
                                      LIT <i class="fa fa-music" aria-hidden="true"></i> #3 : <input type="text" name="song3" ID="song3" value="soundcloud code" class="songLinkTextBox">
                                  </div>
                                  	<div class='button'>
                                 <input type='hidden' name='person' value='Valentina' />
								 <input type='submit' name='submit' value='My Button' />
								
							      </div>
                                 
                               </form>
                               
                              
                       </div>
                  </div>
                </div>
              </div>
            </div>
            <hr />
           
       </div>
       <div class="playlistContainer" >
             
               <div class="song" style="padding: 20px; margin-left:100px">
          <?php
    
   //Connect to the database
    $host = "127.0.0.1";
    $user = "root";                     //Your Cloud 9 username
    $pass = "";                                  //Remember, there is NO password by default!
    $db = "c9";                                  //Your database name you want to connect to
    $port = 3306;                                //The port #. It is always 3306
  ?>
  
       
  	
							
							
							<?php
						    $connection = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());
				
						    $query = "select src from songs where UserId in(select UserId from users where FirstName='Valentina');";
						    $result = mysqli_query($connection, $query);
						
						    while ($row = mysqli_fetch_assoc($result)) {
						    	
						    	$src =  $row['src'];
						    
						    	
						   	
						        echo "
						          <div class=\"song\" style=\"padding: 20px\">
						        <iframe width=\"100%\" height=\"450\" scrolling=\"no\" src=\"$src\"></iframe>
						        </div>
						      
						       ";
						       
						    }
						
						?>
		
			
			

       
  
      </div>
       
       
       <script>
       function getTimeRemaining(endtime) {
              var t = Date.parse(endtime) - Date.parse(new Date());
              var seconds = Math.floor((t / 1000) % 60);
              var minutes = Math.floor((t / 1000 / 60) % 60);
              var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
              var days = Math.floor(t / (1000 * 60 * 60 * 24));
              return {
                'total': t,
                'days': days,
                'hours': hours,
                'minutes': minutes,
                'seconds': seconds
              };
            }
            
            function initializeClock(id, endtime) {
              var clock = document.getElementById(id);
              var daysSpan = clock.querySelector('.days');
              var hoursSpan = clock.querySelector('.hours');
              var minutesSpan = clock.querySelector('.minutes');
              var secondsSpan = clock.querySelector('.seconds');
            
              function updateClock() {
                var t = getTimeRemaining(endtime);
            
                daysSpan.innerHTML = t.days;
                hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
                minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
                secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);
            
                if (t.total <= 0) {
                  clearInterval(timeinterval);
                  document.getElementById("submitLitSongsButton").disabled = false; 
                }
              }
            
              updateClock();
              var timeinterval = setInterval(updateClock, 1000);
            }
            
            var deadline = new Date(Date.parse(new Date()) + 15 * 10 * 6 * 6 * 3);
            initializeClock('clockdiv', deadline);
       </script>
    </body>
</html>