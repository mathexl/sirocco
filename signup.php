<?php

$first_name = $_POST['firstname'];
$last_name = $_POST['lastname'];
$email = $_POST['email'];


$to  = 'membership@siroccoapp.com'; //

// subject
$subject = 'Signed Up!';

// message
$message = '
<html>
<head>
  <title>Email Sign Up</title>
</head>
<body>
  <p>First Name: ' . $first_name . '</p>
  <p>Last Name: ' . $last_name . '</p>
  <p>Email: ' . $email . '</p>
</body>
</html>
';

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers .= 'To: Sirocco <membership@siroccoapp.com>' . "\r\n";
$headers .= 'From: Sirocco Server <membership@siroccoapp.com>' . "\r\n";

// Mail it
mail($to, $subject, $message, $headers);
?>
<head>
    <link type="text/css" rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
   <div class="header">
    <a href="index.html"><img src="images/white_on_black.png" class="logo"></a>
    <div class="header_menu_left">
        <a href="index.html#signup">SIGN UP FOR THE CLUB</a>

    </div>

   </div>



   <div class="block1">
       <h1><br><span class="spanit">Thank You</span><br>for your interest in Sirocco<br>
       </h1>
       <h2> Our membership team will reach out to your shortly</h2>
   </div>
