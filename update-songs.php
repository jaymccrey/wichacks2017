 <?php
 
 
    
   //Connect to the database
    $host = "127.0.0.1";
    $user = "root";                     //Your Cloud 9 username
    $pass = "";                                  //Remember, there is NO password by default!
    $db = "c9";                                  //Your database name you want to connect to
    $port = 3306;                                //The port #. It is always 3306
    
    $song1 =$_POST['song1'];
    $song2 =$_POST['song2'];
    $song3 =$_POST['song3'];
    $person = $_POST['person'];
    
  ?>
  
       
  	
							<?php
						    $connection = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());
						    
						    if($person == 'Valentina'){
						        $SoundId1 = '1';
						        $SoundId2 = '2';
						        $SoundId3 = '3';
						        
						    }
						    else  if($person == 'Yangyan'){
						        $SoundId1 = '4';
						        $SoundId2 = '5';
						        $SoundId3 = '6';
						        
						    }
						    else if($person == 'Lauren')
						    {
						        $SoundId1 = '7';
						        $SoundId2 = '8';
						        $SoundId3 = '9';
						        
						    }
						    
						    else{
						        
						        $SoundId1 = '10';
						        $SoundId2 = '11';
						        $SoundId3 = '12';
						        
						    }
				           
						    $query = "update songs set src = \"$song1\" where SongId = \"$SoundId1\";";
						    $result = mysqli_query($connection, $query);
						    $query = "update songs set src = \"$song2\" where SongId = \"$SoundId2\";";
						    $result = mysqli_query($connection, $query);
						    $query = "update songs set src = \"$song3\" where SongId = \"$SoundId3\";";
						    $result = mysqli_query($connection, $query);

						
						   
						    //rerun V.php
						    header("Location:https://lit-tunes-yangyandd.c9users.io/$person.php");
						
						?>
		
			
			
							
					