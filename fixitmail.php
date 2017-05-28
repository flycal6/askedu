<?php
$name = $_POST['name'];
$email = $_POST['email'];
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$message = $_POST['issue'];
$place = $_POST['maintOptions'];
$time = $_POST['time'];
$room = $_POST['room'];
//$maintenance = "maintenance@ask.edu.kw";
$maintenance = "thomasb@ask.edu.kw";

$formcontent = "<html>
                <p><b>From:</b> $name</p>
                <p><b>Building:</b> $place</p>
                <p><b>Room #:</b> $room</p>
                <p><b>Maintenance Issue:</b> $message</p>
                <p><b>Preferred Time:</b> $time</p>
                </html>";

$formcontent2 = "<html>
                <p><b>From:</b> $name</p>
                <p><b>Building:</b> $place</p>
                <p><b>Room #:</b> $room</p>
                <p><b>Maintenance Issue:</b> $message</p>
                <p><b>Preferred Time:</b> $time</p>
                <hr>
                <br />
                <br />
                <p>In case of an emergency, please contact Albino @ <a href='tel:99829598'>9982 9598</a>  (mobile)</p>
                <p>If you have not been updated within 2 working days, please send an email to <a href='mailto:rashed@ask.edu.kw'>Rashed Abdul Ghafoor</p>
                </html>";


$recipient = "thomasb@ask.edu.kw"; // TODO change this to maintenance@ask.edu.kw, add hpeprint also
$recipient2 = $email;

$subject = "ASK Maintenance Request";

$mailheader = "From: $email \r\n";
$mailheader .= 'MIME-Version: 1.0' . "\r\n";
$mailheader .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$mailheader2 = "From: $maintenance \r\n";
$mailheader2 .= 'MIME-Version: 1.0' . "\r\n";
$mailheader2 .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

mail($recipient, $subject, $formcontent, $mailheader) or die("Something didn't work, and your request was not
submitted.  Please send an email to thomasb@ask.edu.kw to let me know.");
mail($recipient2, $subject, $formcontent2, $mailheader2) or die("Something didn't work, and your request probably was not
submitted.  Please send an email to brian@moneykatz.com to let me know.");
echo '<html>
    <head>    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

   <!-- The line below redirects from the generated page after the number of seconds specified, and to the url listed -->
    <meta http-equiv="refresh"  content="10;url=http://www.ask.edu.kw/"  />

    <title>Request Confirmation</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

    <link rel="icon" href="img/falcon-icon.png">

        <style type="text/css">

            /*.message {
                background-color: #f0f0f2;

            }*/
            /* Sticky footer styles
            -------------------------------------------------- */
            html {
                position: relative;
                min-height: 100%;
            }
            body {
              /* Margin bottom by footer height */
              margin-bottom: 60px;
            }
            .footer {
              position: absolute;
              bottom: 0;
              width: 100%;
              /* Set the fixed height of the footer here */
              height: 60px;
              background-color: #f5f5f5;
            }
            a {
            text-decoration: none;
            }
            .redirection {
                position: absolute;
                bottom: 100px;
            }

        </style>
    </head>
    <body>
        <div class="container-fluid">
            <div style="background-color:#323E4D" class="row">
                <!-- <div class="bg-primary"> -->
                <img src="http://www.ask.edu.kw/img/logo.png" class="img-responsive">
            </div>
        </div>
    <div class="container">
    <div class="page-header"><h1>You have submitted the following request: </h1></div><br />';
echo "<p class='lead'><strong>From:</strong> $name</p>";
echo "<p class='lead'><strong>Building:</strong> $place </p>";
echo "<p class='lead'><strong>Room #:</strong> $room </p>";
echo "<p class='lead'><strong>Maintenance Issue:</strong>  $message </p>";
echo "<p class='lead'><strong>Preferred Time:</strong> $time</p></br />";
echo '<hr>
          <p>In case of an emergency, please contact Albino @ <a href="tel:99829598">9982 9598</a>  (mobile)</p>
          <p>If you have not been updated within 2 working days, please send an email to <a href="mailto:rashed@ask.edu.kw">Rashed Abdul Ghafoor</p>
          <h3 class="text-muted redirection">Redirecting in 10 seconds...</h3>
          </div>
          <footer class="footer">
            <div class="container">
                <p class="text-muted " style="padding-top: 15px">&copy; 2015 Brian Thomas &nbsp;&nbsp;
                    </span><a href="https://www.moneykatz.com/contact.html">Need a Website?</a> <span style="float: right">
                        <a href="mailto:thomasb@ask.edu.kw"> Suggestions</a></span></p>
            </div>
          </footer></body></html>';