<?php

 $con = mysqli_connect("localhost","thesuvjn_webuser","Webuser123", "thesuvjn_surge"); 

	if ($con == False){
		echo "YAY";
	}

  if (!$con)

  {

    die('Could not connect: ' . mysqli_error($con));

  }
  
  /*$con = mysqli_connect("localhost:3306","thesuvjn_basic","password@surge", "thesuvjn_surge"); 



  if (!$con)

  {

    die('Could not connect: ' . mysqli_error($con));

  }*/

?>