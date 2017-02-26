
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LitTunes</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/blog-post.css" rel="stylesheet">
    
      <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">

</head>

<style>
.playlistContainer {
    display: block;
    width: 100%;
    text-align: center;
    padding-top: 30px;
}

.song {
    display: inline-block;
}

 body {
         font-family: 'PT Sans', sans-serif;
 }
 
 a {
     color: #BF1306;
 }
 
 hr {
   border-top: 2px solid black;
 }
 
 .nameHeader {
     font-size: 17px;
 }
 
 .commentName {
    font-size: 14px;
 }
 
 .well {
    margin-top: 40px;
    background-color: #F27405;
    color: white;
 }
 
 .btn-primary {
    background-color: #730202;
    border-color: #730202;
 }
 
</style>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- nav bar -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                  <img src="img/Logowhite.png" style="width:50px;height:50px;padding: 7px;">
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

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-12">

                <!-- Blog Post -->

                <!-- Title -->
                <h1> <a href="#">Valentina Peric's</a> Stream</h1>

           
               <hr />
               
                   <?php
    
   //Connect to the database
    $host = "127.0.0.1";
    $user = "root";                     //Your Cloud 9 username
    $pass = "";                                  //Remember, there is NO password by default!
    $db = "c9";                                  //Your database name you want to connect to
    $port = 3306;                                //The port #. It is always 3306
  ?>
  
  <h2>Check Out What Your Friends Have Been Up to in the SoundsCloud</h2>
  
  <form action="Yan-Test/personal_profile.php" method="post">
  	<table align="left">
  		
  		<tr>
				<td ><span align='right'>Friends:</span></td>
				<td>
								<select id='friends' name='friends' >
							
							<?php
						    $connection = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());
				
						    $query = "select UserId, FirstName from users;";
						    $result = mysqli_query($connection, $query);
						
						    while ($row = mysqli_fetch_assoc($result)) {
						    	
						    	$userId =  $row['UserId'];
						    
						    	
						   		$firstName = $row['FirstName'];
						        echo "<option>".$firstName." </option>
						      
						       ";
						       
						    }
						
						?>
			  echo "</select>
			  </td>
			  </tr>
			  <input type='hidden' name='person' value="$friends" />
			
			  	</table>
			  	
			  
		  
  		<div class='button'>
								 <input type='submit' name='submit' value='Submit' />
								
							</div>
 	
  	
  </form>

                <hr />
                 <!-- **Post Content*** -->
                <!-- Date/Time -->
                <p class="nameHeader">
                  <a href="#">Jayme McCreary's</a> LIT tunes of the week
                </p>
                <p class="datePosted">
                    <span class="glyphicon glyphicon-time"></span>
                    Posted on February 25, 2013 at 1:21 PM
                </p>
                <!-- 3 songs-->
                <div class="playlistContainer">
                     <div class="song">
                         <iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/291940837&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
                     </div>
                      <div class="song">
                       <iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/195528882&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
                     </div>
                      <div class="song">
                       <iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/307666366&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
                     </div>
                 </div>
         

                <!-- Comments Form -->
                <div class="well">
                    <h4>Leave a Comment:</h4>
                    <form role="form">
                        <div class="form-group">
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

                <!-- Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="img/lauren.jpg" style="width:64px;height:64px;" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading"> <a class="commentName" href="#">Lauren Mulvehill </a>
                            <small>August 25, 2014 at 9:30 PM</small>
                        </h4>
                        Such good music!
                    </div>
                </div>

                  <hr>

                <!-- **Post Content*** -->
                <!-- Date/Time -->
                <p class="nameHeader">
                   <a href="#">Lauren Mulvehill's</a> LIT tunes of the week
                </p>
                <p class="datePosted">
                    <span class="glyphicon glyphicon-time"></span>
                     Posted on August 24, 2013 at 9:00 PM
                </p>
                
                
                <!-- 3 songs-->
                <div class="playlistContainer">
                     <div class="song">
                          <iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/281829647&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
                     </div>
                      <div class="song">
                         <iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/60173536&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
                     </div>
                      <div class="song">
                        <iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/254136506&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
                     </div>
                 </div>
            

                <!-- Comments Form -->
                <div class="well">
                    <h4>Leave a Comment:</h4>
                    <form role="form">
                        <div class="form-group">
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

                <!-- Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="img/jayme.jpg" style="width:64px;height:64px;" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading"> <a class="commentName" href="#">Jayme McCreary</a>
                            <small>August 25, 2014 at 9:30 PM</small>
                        </h4>
                        Great tunes!
                    </div>
                </div>

                  <hr>
                  
                  
                <!-- **Post Content*** -->
                <!-- Date/Time -->
                
                <p class="nameHeader">
                   <a href="#">Yangyan Dong's</a> LIT tunes of the week
                </p>
                <p class="datePosted">
                    <span class="glyphicon glyphicon-time"></span>
                    Posted on February 24, 2013 at 10:21 PM
                </p>
                <!-- 3 songs-->
                <div class="playlistContainer">
                     <div class="song">
                          <iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/301478633&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
                     </div>
                      <div class="song">
                         <iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/285293921&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
                     </div>
                      <div class="song">
                       <iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/285503750&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
                     </div>
                 </div>
              
                <!-- Comments Form -->
                <div class="well">
                    <h4>Leave a Comment:</h4>
                    <form role="form">
                        <div class="form-group">
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

                <!-- Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="img/lauren.jpg" style="width:64px;height:64px;" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading"> <a href="#" class="commentName">Lauren Mulvehill </a>
                            <small>August 25, 2014 at 9:30 PM</small>
                        </h4>
                        Awesome!!
                    </div>
                </div>
                <!-- Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="img/jayme.jpg" style="width:64px;height:64px;" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading"> <a class="commentName" href="#">Jayme McCreary</a>
                            <small>August 25, 2014 at 9:30 PM</small>
                        </h4>
                        I love Ed Sheerans new song. 
                    </div>
                </div>


                  <hr>



            </div>



        </div>
        <!-- /.row -->


    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
