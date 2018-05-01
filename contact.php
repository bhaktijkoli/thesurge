<!DOCTYPE html>
<html lang="en">

<head>
  <title>Notemybook</title>

  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <meta name="description" content="">

  <!-- Google Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic' rel='stylesheet'>

  <!-- Css -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/magnific-popup.css" />
  <link rel="stylesheet" href="css/font-icons.css" />
  <link rel="stylesheet" href="css/rev-slider.css" />
  <link rel="stylesheet" href="css/sliders.css">
  <link rel="stylesheet" href="css/YTPlayer.css">
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/responsive.css" />
  <link rel="stylesheet" href="css/spacings.css" />
  <link rel="stylesheet" href="css/animate.css" />

  <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="57x57" href="favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicons/favicon-16x16.png">
    <link rel="manifest" href="favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

</head>

<body>
 
  <style>
    h2 {
      text-align: center;
      position: absolute;
      top: calc(50%);
      left: 0;
      width: 100%;
      display: inline-block;
      font-size: 20px;
    }
  </style>
  
<?php
if( $_POST ) {
  $con = mysqli_connect("localhost","thesuvjn_webuser","Webuser123", "thesuvjn_surge");

  if (!$con)
  {
    die('Could not connect: ' . mysqli_error($con));
  }

  // mysqli_select_db($con, "thesuvjn_surge");

  $name = $_POST['name'];
  $mail = $_POST['mail'];
  $subject = $_POST['subject'];
  $comment = $_POST['comment'];

  $name = mysqli_real_escape_string($con, $name);
  $mail = mysqli_real_escape_string($con, $mail);
  $subject = mysqli_real_escape_string($con, $subject);
  $comment = mysqli_real_escape_string($con, $comment);

  $query = "INSERT INTO `Contact`(`Name`, `Email`, `Subject`, `Message`) VALUES ('$name','$mail','$subject','$comment')";

  if(mysqli_query($con, $query)){

  echo "<h2>Query submitted sucessfully</h2>";
  }else{
  echo "error";
  }

  mysqli_close($con);
}
?>

</body>
  
</html>