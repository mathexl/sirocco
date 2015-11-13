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
<!-- Facebook Conversion Code for Registrations - Tillman Huett-Lassman 1 -->
<script>(function() {
  var _fbq = window._fbq || (window._fbq = []);
  if (!_fbq.loaded) {
    var fbds = document.createElement('script');
    fbds.async = true;
    fbds.src = '//connect.facebook.net/en_US/fbds.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(fbds, s);
    _fbq.loaded = true;
  }
})();
window._fbq = window._fbq || [];
window._fbq.push(['track', '6032803824289', {'value':'0.00','currency':'USD'}]);
</script>
<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6032803824289&amp;cd[value]=0.00&amp;cd[currency]=USD&amp;noscript=1" /></noscript>
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
       
   </div>
