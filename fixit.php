<?php
include("sendmail.php");
if ($_POST["cussubmit"] != "") {
    $ssfor = $_POST['cusfor'];
    $ssname = $_POST['cusname'];
    $semail = $_POST['cusemail'];
    $ssroom = $_POST['cusroom'];
    $ssdes = $_POST['cusdes'];
    $ssdate = $_POST['cusdate'];

    $content = "<table border='0' width='600' cellspacing='2' cellpadding='2'>";
    $content .= "<tr><td colspan='2' style='font-size:24px; font-weight:bold;'>Maintenance Form</td></tr>";
    $content .= "<tr><td colspan='2'>&nbsp;</td></tr>";
    $content .= "<tr><td>Date :</td><td>" . $ssdate . "</td></tr>";
    $content .= "<tr><td>For :</td><td>" . $ssfor . "</td></tr>";
    $content .= "<tr><td>Room / Apt. : </td><td>" . $ssroom . "</td></tr>";
    $content .= "<tr><td>Name :</td><td>" . $ssname . "</td></tr>";
    $content .= "<tr><td>Email Id : </td><td>" . $semail . "</td></tr>";
    $content .= "<tr><td>Description of Issue : </td><td>" . $ssdes . "</td></tr>";
    $content .= "<tr><td colspan='2'>&nbsp;</td></tr>";
    $content .= "<tr><td colspan='2'>-----------------------------------------------------------------------------------------</td></tr>";
    $content .= "<tr><td colspan='2'>&nbsp;</td></tr>";
    $content .= "<tr><td colspan='2'>Note : </td></tr>";
    $content .= "<tr><td colspan='2'>&nbsp;</td></tr>";
    $content .= "<tr><td colspan='2'>&nbsp;</td></tr>";
    $content .= "<tr><td colspan='2'>Purchase Required :  YES  -  NO</td></tr>";
    $content .= "<tr><td colspan='2'>Assigned By : </td></tr>";
    $content .= "<tr><td colspan='2'>Assigned To : </td></tr>";
    $content .= "<tr><td colspan='2'>&nbsp;</td></tr>";
    $content .= "<tr><td colspan='2'>-----------------------------------------------------------------------------------------</td></tr>";
    $content .= "<tr><td colspan='2'>&nbsp;</td></tr>";
    $content .= "<tr><td colspan='2'>Completed by : </td></tr>";
    $content .= "<tr><td colspan='2'>Completed Date .: </td></tr>";
    $content .= "<tr><td colspan='2'>&nbsp;</td></tr>";
    $content .= "<tr><td colspan='2'>Signature : </td></tr>";
    $content .= "<tr><td colspan='2'>&nbsp;</td></tr>";
    $content .= "<tr><td colspan='2'>-----------------------------------------------------------------------------------------</td></tr>";
    $content .= "<tr><td colspan='2'>&nbsp;</td></tr>";
    $content .= "<tr><td colspan='2'>Comment of " . $ssname . " :</td></tr>";
    $content .= "<tr><td colspan='2'>&nbsp;</td></tr>";
    $content .= "</table>";

    // $adminemail = "maintenance@ask.edu.kw, askfixit@hpeprint.com";
    $adminemail = "thomasb@ask.edu.kw";
    $fromemail = "$semail";
    $subject = "ASK Maintenance request";
    SendHTMLMail($adminemail, $subject, $content, $fromemail);

    $content = "<table border='0' width='600'>";
    $content .= "<tr><td>Dear " . $ssname . ",<br /><p></td></tr>";
    $content .= "<tr><td colspan='2'>&nbsp;</td></tr>";
    $content .= "<tr><td colspan='2'>Your application for Maintenance as below is received we will work on it and keep you updated. In case an emergency please contact Albino on his Mobile 99829598<br /><br/></td></tr>";

    $content .= "<tr><td colspan='2'>Incase your job is not completed or if you are not updated in next 2 working days kindly send an email to housingcoordinator@ask.edu.kw<br /></td></tr>";
    $content .= "<tr><td colspan='2'>&nbsp;</td></tr>";
    $content .= "<tr><td colspan='2'>Maintenance Department<br /> American School of Kuwait</td></tr>";
    $content .= "<tr><td>&nbsp;</td></tr>";
    $content .= "<tr><td>Form submited on Date: " . $ssdate . "</td></tr>";
    $content .= "<tr><td>&nbsp;</td></tr>";
    $content .= "<tr><td>For :  " . $ssfor . "</td></tr>";
    $content .= "<tr><td>Room / Apt. :   " . $ssroom . "</td></tr>";
    $content .= "<tr><td>Name :   " . $ssname . "</td></tr>";
    $content .= "<tr><td>Email Id :  " . $semail . "</td></tr>";
    $content .= "<tr><td>Description of Issue :   " . $ssdes . "</td></tr>";
    $content .= "<tr><td>&nbsp;</td></tr>";
    $content .= "<tr><td>-----------------------------------------------------------------------------------------</td></tr>";
    $content .= "<tr><td>Thanks</td></tr>";
    $content .= "</table>";

    $adminemail = "$semail";
    $fromemail = "maintenance@ask.edu.kw";
    $subject = "ASK Maintenance request";
    SendHTMLMail($adminemail, $subject, $content, $fromemail);
    echo "<script>alert('Successfully submitted.  You should receive an email verification within 30 minutes.');</script>";


}
if ($_POST["cussubmitr"] != "") {
    $ssfor = $_POST['cusfor'];
    $ssname = $_POST['cusname'];
    $semail = $_POST['cusemail'];
    $ssroom = $_POST['cusroom'];
    $ssdes = $_POST['cusdes'];
    $ssdate = $_POST['cusdate'];

    $content = "<table border='0' width='600' cellspacing='2' cellpadding='2'>";
    $content .= "<tr><td colspan='2' style='font-size:24px; font-weight:bold;'>Maintenance Form</td></tr>";
    $content .= "<tr><td colspan='2'>&nbsp;</td></tr>";
    $content .= "<tr><td>Date :</td><td>" . $ssdate . "</td></tr>";
    $content .= "<tr><td>For :</td><td>" . $ssfor . "</td></tr>";
    $content .= "<tr><td>Room / Apt. : </td><td>" . $ssroom . "</td></tr>";
    $content .= "<tr><td>Name :</td><td>" . $ssname . "</td></tr>";
    $content .= "<tr><td>Email Id : </td><td>" . $semail . "</td></tr>";
    $content .= "<tr><td>Description of Issue : </td><td>" . $ssdes . "</td></tr>";
    $content .= "<tr><td colspan='2'>&nbsp;</td></tr>";
    $content .= "<tr><td colspan='2'>-----------------------------------------------------------------------------------------</td></tr>";
    $content .= "<tr><td colspan='2'>&nbsp;</td></tr>";
    $content .= "<tr><td colspan='2'>Note : </td></tr>";
    $content .= "<tr><td colspan='2'>&nbsp;</td></tr>";
    $content .= "<tr><td colspan='2'>&nbsp;</td></tr>";
    $content .= "<tr><td colspan='2'>Purchase Required :  YES  -  NO</td></tr>";
    $content .= "<tr><td colspan='2'>Assigned By : </td></tr>";
    $content .= "<tr><td colspan='2'>Assigned To : </td></tr>";
    $content .= "<tr><td colspan='2'>&nbsp;</td></tr>";
    $content .= "<tr><td colspan='2'>-----------------------------------------------------------------------------------------</td></tr>";
    $content .= "<tr><td colspan='2'>&nbsp;</td></tr>";
    $content .= "<tr><td colspan='2'>Completed by : </td></tr>";
    $content .= "<tr><td colspan='2'>Completed Date .: </td></tr>";
    $content .= "<tr><td colspan='2'>&nbsp;</td></tr>";
    $content .= "<tr><td colspan='2'>Signature : </td></tr>";
    $content .= "<tr><td colspan='2'>&nbsp;</td></tr>";
    $content .= "<tr><td colspan='2'>-----------------------------------------------------------------------------------------</td></tr>";
    $content .= "<tr><td colspan='2'>&nbsp;</td></tr>";
    $content .= "<tr><td colspan='2'>Comment of " . $ssname . " :</td></tr>";
    $content .= "<tr><td colspan='2'>&nbsp;</td></tr>";
    $content .= "</table>";

    // $adminemail = "maintenance@ask.edu.kw, askfixit@hpeprint.com";
    $adminemail = "thomasb@ask.edu.kw";
    $fromemail = "$semail";
    $subject = "ASK Maintenance request";
    SendHTMLMail($adminemail, $subject, $content, $fromemail);

    $content = "<table border='0' width='600'>";
    $content .= "<tr><td>Dear " . $ssname . ",<br /><p></td></tr>";
    $content .= "<tr><td colspan='2'>&nbsp;</td></tr>";
    $content .= "<tr><td colspan='2'>Your application for Maintenance as below is received we will work on it and keep you updated.<br /></td></tr>";
    $content .= "<tr><td colspan='2'>Incase your job is not completed or if you are not updated in next 2 working days kindly send an email to housingcoordinator@ask.edu.kw<br /></td></tr>";
    $content .= "<tr><td colspan='2'>&nbsp;</td></tr>";
    $content .= "<tr><td colspan='2'>Maintenance Department<br /> American School of Kuwait</td></tr>";
    $content .= "<tr><td>&nbsp;</td></tr>";
    $content .= "<tr><td>Form submited on Date: " . $ssdate . "</td></tr>";
    $content .= "<tr><td>&nbsp;</td></tr>";
    $content .= "<tr><td>For :  " . $ssfor . "</td></tr>";
    $content .= "<tr><td>Room / Apt. :   " . $ssroom . "</td></tr>";
    $content .= "<tr><td>Name :   " . $ssname . "</td></tr>";
    $content .= "<tr><td>Email Id :  " . $semail . "</td></tr>";
    $content .= "<tr><td>Description of Issue :   " . $ssdes . "</td></tr>";
    $content .= "<tr><td>&nbsp;</td></tr>";
    $content .= "<tr><td>-----------------------------------------------------------------------------------------</td></tr>";
    $content .= "<tr><td>Thanks</td></tr>";
    $content .= "</table>";

    $adminemail = "$semail";
    $fromemail = "maintainance@ask.edu.kw";
    $subject = "ASK Maintenance request";
    SendHTMLMail($adminemail, $subject, $content, $fromemail);

    header("location:" . $pagename);
    exit;

}
?>
<!DOCTYPE html>
<html>
<head>
    <title>American School of Kuwait Maintenance Form.</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="American School of Kuwait">
    <meta name="viewport" content="width=device-width">

    <!--[if IE 7]>
    <link rel="stylesheet" href="font-awesome/css/font-awesome-ie7.min.css">
    <![endif]-->

    <link rel="icon" href="img/favicon.ico">
    <link rel="stylesheet" href="css/style_v1.3.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

    <!-- <link href="css/form/fixit-style.css" type="text/css" rel="stylesheet"/> -->

    <link href='//fonts.googleapis.com/css?family=Sintony:400,700' rel='stylesheet' type='text/css'>

    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <script src="js/vendor/jquery-1.10.1.min.js"></script>

    <script language="javascript" type="text/javascript">
        var specimanSignature = 0;
        function isblank(s) {
            for (var i = 0; i < s.length; i++) {
                var c = s.charAt(i);
                if ((c != ' ') && (c != '\n') && (c != '\t')) return false;
            }
            return true;
        }
        function isValidEmail(e) {
            var alnum = "a-zA-Z0-9";
            exp = "^[^@\\s]+@([" + alnum + "+\\-]+\\.)+[" + alnum + "][" + alnum + "][" + alnum + "]?$";
            emailregexp = new RegExp(exp);

            result = e.match(emailregexp);
            if (result != null) {
                return true;
            }
            else {
                return false;
            }
        }

        function isValidNumber(numval) {
            if (numval == "") {
                return false;
            }
            var myRegExp = new RegExp("^[/+|/-]?[0-9]*[/.]?[0-9]*$");
            return myRegExp.test(numval);
        }

        function Validate() {
            if (isblank(document.getElementById("cusname").value)) {
                alert("Please Enter Your Name!");
                document.getElementById("cusname").focus();
                return false;
            }
            else if (isblank(document.getElementById("cusroom").value)) {
                alert("Please Enter Room / Apt.!");
                document.getElementById("cusroom").focus();
                return false;
            }
            else if (!isValidEmail(document.getElementById("cusemail").value)) {
                alert("Please Enter Valid Email ID!");
                document.getElementById("cusemail").focus();
                return false;
            }
            else {
                return true;
            }
        }
        function newSpeciman() {
            specimanSignature = Math.ceil(Math.random() * 100000);
            document.getElementById('BotBootInputImage').innerHTML = specimanSignature;
        }
    </script>


    <style>
        input, textarea {
            display: inline-block;
            font-size: 1em;
            line-height: normal;
        }

        label {
            display: inline-block;
            font-weight: 700;
        }

        form, h1, hr {
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }
    </style>

    <?php
    $h = "-3";// Hour for time zone goes here e.g. +7 or -4, just remove the + or -
    $hm = $h * 60;
    $ms = $hm * 60;
    $dt = gmdate("d/m/Y g:i:s A", time() - ($ms)); // the "+" can be switched to a plus if that's what your time zone is.
    ?>
</head>

<body>
<header id="top-header">
    <div class="container header-container box-padding-both">
        <div class="row">
            <div class="span12">
                <div class="logo pull-left">
                    <a href="index.html"><img src="img/logo.png" alt="Anchorra Logo"/></a>
                </div><!-- /logo -->

                <!-- Navigation Area -->
                <a class="nav-toggle pull-right"><i class="icon-align-justify"></i></a>

                <nav id="mobile-navigation" class="clear"></nav>

                <nav id="navigation" class="pull-right">
                    <ul>
                        <li><a href="#">Discover ASK <i class="icon-chevron-down"></i></a>
                            <ul>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="docs/school-profile.pdf" target="_blank">School Profile</a></li>
                                <li><a href="superintendent.html">Governance</a></li>
                                <li><a href="director-of-technology.html">Directors</a></li>
                                <li><a href="employment.html">Employment</a></li>
                            </ul>
                        </li>

                        <li><a href="#">Programs <i class="icon-chevron-down"></i></a>
                            <ul>
                                <li><a href="high-school.html">High School </a>
                                    <ul>
                                        <li><a href="docs/hs-course-booklet-17-18.pdf" target="_blank">Course Selection
                                            Booklet</a></li>
                                        <li><a href="docs/hs%20handbook.pdf" target="_blank">HS Handbook</a></li>
                                    </ul>
                                </li>
                                <li><a href="middle-school.html">Middle School </a>
                                    <ul>
                                        <li><a href="docs/ms%20course%20booklet.pdf" target="_blank">Course Selection
                                            Booklet</a></li>
                                        <li><a href="docs/ms%20handbook.pdf" target="_blank">MS Handbook</a></li>
                                    </ul>
                                </li>
                                <li><a href="elementary-school.html">Elementary School </a>
                                    <ul>
                                        <li><a href="docs/es%20handbook.pdf" target="_blank">ES Handbook</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li><a href="admissions.html">Admissions</a></li>

                        <li><a href="http://mail.google.com/a/ask.edu.kw">ASK Mail</a></li>

                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </nav>
            </div><!-- /span12 -->
        </div><!-- /row -->
    </div><!-- /container -->
</header><!-- /top-header -->

<section id="wrapper">
    <div class="container">
        <div class="row">
            <div id="content" class="span12 box-padding-both">

                <h1>Maintenance Request</h1>
                <hr />

                <form action="fixit.php" method="post" name="contactus" id="contactus" onsubmit="return Validate()">


                    <label for="date">Date: </label>
                    <?php $dt = gmdate("d/m/Y g:i:s A", time() - ($ms)); ?>
                    <input class="input-block-level" type="text" name="cusdate" id="cusdate" value="<?php echo $dt; ?>" readonly="yes"/><br />

                    <!-- <label class="control-label" for="cusfor">For: </label> -->
                    <div>
                        <label class="radio">School Maintenance
                            <input type="radio" name="cusfor" value="School"/>
                        </label><br />
                        <label class="radio">Dunes Maintenance
                            <input type="radio" name="cusfor" value="Dunes"/>
                        </label>
                    </div>


                    <label class="control-label" for="cusname">Name: </label><br />
                    <input class="input-block-level" type="text" name="cusname" id="cusname" placeholder="First and Last Name" required /><br />

                    <label class="control-label">Room/Apt: </label><br />
                    <input class="input-block-level" type="text" name="cusroom" id="cusroom" placeholder="Example: F24 or G118" required/><br />

                    <label class="control-label">Description of Issue: </label><br />
                    <textarea class="input-block-level" name="cusdes" id="cusdes" rows="3"></textarea><br />

                    <label class="control-label">Email: </label><br />
                    <input class="input-block-level" type="text" name="cusemail" id="cusemail" placeholder="Example: iheartabhay@ask.edu.kw" required/><br />

                    <button type="submit" class="btn btn-info" name="cussubmit" value="Submit">Submit Maintenance Request</button>

                </form>

                <p class="lead">
                    Notes:
                </p>
                <ol>
                    <li>Check your email for updates on the job.<br/></li>
                    <li>Jobs will be assigned and fielded with in 2 working days.</li>
                    <li>In case of emergency write URGENT in the "Description of Issue".</li>
                    <li>For complaints or suggestions please email <a href="mailto:housingcoordinator@ask.edu.kw">Nick Stroh</a></li>
                </ol>
            </div>
        </div>
    </div>
</section>

<footer id="main-footer">

    <div class="container inner-footer box-padding-both">
        <div class="row">
            <!--<div class="span3">-->

            <h5>About us</h5>

            <p>The American School of Kuwait was founded in 1964. It is a privately owned, independent coeducational day school which offers a general academic curriculum for students of all nationalities.</p>

        </div>
        <!-- /row -->
    </div>
    <!-- /container -->

</footer>

<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>
