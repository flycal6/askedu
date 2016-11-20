<?php
include("sendmail.php");
if($_POST["cussubmit"]!="")
{
	$ssfor=$_POST['cusfor'];
	$ssname=$_POST['cusname'];
	$semail=$_POST['cusemail'];
	$ssroom=$_POST['cusroom'];
	$ssdes=$_POST['cusdes'];
	$ssdate=$_POST['cusdate'];
	
	$content = "<table border='0' width='600' cellspacing='2' cellpadding='2'>";
	$content.="<tr><td colspan='2' style='font-size:24px; font-weight:bold;'>Maintenance Form</td></tr>";
	$content.="<tr><td colspan='2'>&nbsp;</td></tr>";
	$content.="<tr><td>Date :</td><td>".$ssdate."</td></tr>";
	$content.="<tr><td>For :</td><td>".$ssfor."</td></tr>";
	$content.="<tr><td>Room / Apt. : </td><td>".$ssroom."</td></tr>";
	$content.="<tr><td>Name :</td><td>".$ssname."</td></tr>";
	$content.="<tr><td>Email Id : </td><td>".$semail."</td></tr>";
	$content.="<tr><td>Description of Issue : </td><td>".$ssdes."</td></tr>";
	$content.="<tr><td colspan='2'>&nbsp;</td></tr>";
	$content.="<tr><td colspan='2'>-----------------------------------------------------------------------------------------</td></tr>";
	$content.="<tr><td colspan='2'>&nbsp;</td></tr>";
	$content.="<tr><td colspan='2'>Note : </td></tr>";
	$content.="<tr><td colspan='2'>&nbsp;</td></tr>";
	$content.="<tr><td colspan='2'>&nbsp;</td></tr>";
	$content.="<tr><td colspan='2'>Purchase Required :  YES  -  NO</td></tr>";
	$content.="<tr><td colspan='2'>Assigned By : </td></tr>";
	$content.="<tr><td colspan='2'>Assigned To : </td></tr>";
	$content.="<tr><td colspan='2'>&nbsp;</td></tr>";
	$content.="<tr><td colspan='2'>-----------------------------------------------------------------------------------------</td></tr>";
	$content.="<tr><td colspan='2'>&nbsp;</td></tr>";
	$content.="<tr><td colspan='2'>Completed by : </td></tr>";
	$content.="<tr><td colspan='2'>Completed Date .: </td></tr>";
	$content.="<tr><td colspan='2'>&nbsp;</td></tr>";
	$content.="<tr><td colspan='2'>Signature : </td></tr>";
	$content.="<tr><td colspan='2'>&nbsp;</td></tr>";
	$content.="<tr><td colspan='2'>-----------------------------------------------------------------------------------------</td></tr>";
	$content.="<tr><td colspan='2'>&nbsp;</td></tr>";
	$content.="<tr><td colspan='2'>Comment of ".$ssname." :</td></tr>";
	$content.="<tr><td colspan='2'>&nbsp;</td></tr>";
	$content.="</table>";
	
	$adminemail = "maintenance@ask.edu.kw, askfixit@hpeprint.com";
	$fromemail = "$semail";
	$subject = "ASK Maintenance request";
	SendHTMLMail($adminemail,$subject,$content,$fromemail);
	
	$content = "<table border='0' width='600'>";
	$content.="<tr><td>Dear ".$ssname.",<br /><p></td></tr>";
	$content.="<tr><td colspan='2'>&nbsp;</td></tr>";
   	$content.="<tr><td colspan='2'>Your application for Maintenance as below is 	received we will work on it and keep you updated. In case an emergency please contact Albino on his Mobile 99829598<br /><br/></td></tr>";

  	$content.="<tr><td colspan='2'>Incase your job is not completed or if you are not 		updated in next 2 working days kindly send an email to housingcoordinator@ask.edu.kw<br 		/></td></tr>";
	$content.="<tr><td colspan='2'>&nbsp;</td></tr>";
	$content.="<tr><td colspan='2'>Maintenance Department<br /> American School of 		Kuwait</td></tr>";
	$content.="<tr><td>&nbsp;</td></tr>";
	$content.="<tr><td>Form submited on Date: ".$ssdate."</td></tr>";
	$content.="<tr><td>&nbsp;</td></tr>";
	$content.="<tr><td>For :  ".$ssfor."</td></tr>";
	$content.="<tr><td>Room / Apt. :   ".$ssroom."</td></tr>";
	$content.="<tr><td>Name :   ".$ssname."</td></tr>";
	$content.="<tr><td>Email Id :  ".$semail."</td></tr>";
	$content.="<tr><td>Description of Issue :   ".$ssdes."</td></tr>";
	$content.="<tr><td>&nbsp;</td></tr>";
	$content.="<tr><td>-----------------------------------------------------------------------------------------</td></tr>";
	$content.="<tr><td>Thanks</td></tr>";
	$content.="</table>";
	
	$adminemail = "$semail";
	$fromemail = "maintenance@ask.edu.kw";
	$subject = "ASK Maintenance request";
	SendHTMLMail($adminemail,$subject,$content,$fromemail);
	echo"<script>alert('Successfully submitted');</script>";
	
	
}
if($_POST["cussubmitr"]!="")
{
	$ssfor=$_POST['cusfor'];
	$ssname=$_POST['cusname'];
	$semail=$_POST['cusemail'];
	$ssroom=$_POST['cusroom'];
	$ssdes=$_POST['cusdes'];
	$ssdate=$_POST['cusdate'];
	
	$content = "<table border='0' width='600' cellspacing='2' cellpadding='2'>";
	$content.="<tr><td colspan='2' style='font-size:24px; font-weight:bold;'>Maintenance Form</td></tr>";
	$content.="<tr><td colspan='2'>&nbsp;</td></tr>";
	$content.="<tr><td>Date :</td><td>".$ssdate."</td></tr>";
	$content.="<tr><td>For :</td><td>".$ssfor."</td></tr>";
	$content.="<tr><td>Room / Apt. : </td><td>".$ssroom."</td></tr>";
	$content.="<tr><td>Name :</td><td>".$ssname."</td></tr>";
	$content.="<tr><td>Email Id : </td><td>".$semail."</td></tr>";
	$content.="<tr><td>Description of Issue : </td><td>".$ssdes."</td></tr>";
	$content.="<tr><td colspan='2'>&nbsp;</td></tr>";
	$content.="<tr><td colspan='2'>-----------------------------------------------------------------------------------------</td></tr>";
	$content.="<tr><td colspan='2'>&nbsp;</td></tr>";
	$content.="<tr><td colspan='2'>Note : </td></tr>";
	$content.="<tr><td colspan='2'>&nbsp;</td></tr>";
	$content.="<tr><td colspan='2'>&nbsp;</td></tr>";
	$content.="<tr><td colspan='2'>Purchase Required :  YES  -  NO</td></tr>";
	$content.="<tr><td colspan='2'>Assigned By : </td></tr>";
	$content.="<tr><td colspan='2'>Assigned To : </td></tr>";
	$content.="<tr><td colspan='2'>&nbsp;</td></tr>";
	$content.="<tr><td colspan='2'>-----------------------------------------------------------------------------------------</td></tr>";
	$content.="<tr><td colspan='2'>&nbsp;</td></tr>";
	$content.="<tr><td colspan='2'>Completed by : </td></tr>";
	$content.="<tr><td colspan='2'>Completed Date .: </td></tr>";
	$content.="<tr><td colspan='2'>&nbsp;</td></tr>";
	$content.="<tr><td colspan='2'>Signature : </td></tr>";
	$content.="<tr><td colspan='2'>&nbsp;</td></tr>";
	$content.="<tr><td colspan='2'>-----------------------------------------------------------------------------------------</td></tr>";
	$content.="<tr><td colspan='2'>&nbsp;</td></tr>";
	$content.="<tr><td colspan='2'>Comment of ".$ssname." :</td></tr>";
	$content.="<tr><td colspan='2'>&nbsp;</td></tr>";
	$content.="</table>";
	
	$adminemail = "maintenance@ask.edu.kw, askfixit@hpeprint.com";
	$fromemail = "$semail";
	$subject = "ASK Maintenance request";
	SendHTMLMail($adminemail,$subject,$content,$fromemail);
	
	$content = "<table border='0' width='600'>";
	$content.="<tr><td>Dear ".$ssname.",<br /><p></td></tr>";
	$content.="<tr><td colspan='2'>&nbsp;</td></tr>";
    $content.="<tr><td colspan='2'>Your application for Maintenance as below is received we will work on it and keep you updated.<br /></td></tr>";
  	$content.="<tr><td colspan='2'>Incase your job is not completed or if you are not updated in next 2 working days kindly send an email to housingcoordinator@ask.edu.kw<br /></td></tr>";
	$content.="<tr><td colspan='2'>&nbsp;</td></tr>";
	$content.="<tr><td colspan='2'>Maintenance Department<br /> American School of Kuwait</td></tr>";
	$content.="<tr><td>&nbsp;</td></tr>";
	$content.="<tr><td>Form submited on Date: ".$ssdate."</td></tr>";
	$content.="<tr><td>&nbsp;</td></tr>";
	$content.="<tr><td>For :  ".$ssfor."</td></tr>";
	$content.="<tr><td>Room / Apt. :   ".$ssroom."</td></tr>";
	$content.="<tr><td>Name :   ".$ssname."</td></tr>";
	$content.="<tr><td>Email Id :  ".$semail."</td></tr>";
	$content.="<tr><td>Description of Issue :   ".$ssdes."</td></tr>";
	$content.="<tr><td>&nbsp;</td></tr>";
	$content.="<tr><td>-----------------------------------------------------------------------------------------</td></tr>";
	$content.="<tr><td>Thanks</td></tr>";
	$content.="</table>";
	
	$adminemail = "$semail";
	$fromemail = "maintainance@ask.edu.kw";
	$subject = "ASK Maintenance request";
	SendHTMLMail($adminemail,$subject,$content,$fromemail);
	
	header("location:".$pagename);
	exit;
	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>American School of Kuwait Maintenance Form.</title>
<link href="css/form/fixit-style.css" type="text/css" rel="stylesheet" />


 
 


<script language="javascript" type="text/javascript"> 
var specimanSignature=0;
function isblank(s)
{
    for(var i = 0; i < s.length; i++) {
        var c = s.charAt(i);
        if ((c != ' ') && (c != '\n') && (c != '\t')) return false;
    }
    return true;
}
function isValidEmail(e)
{
	var alnum="a-zA-Z0-9";
	exp="^[^@\\s]+@(["+alnum+"+\\-]+\\.)+["+alnum+"]["+alnum+"]["+alnum+"]?$";
	emailregexp = new RegExp(exp);
 
	result = e.match(emailregexp);
	if (result != null)
	{
		return true;
	}
	else
	{
		return false;
	}
}
 
function isValidNumber(numval)
{
	if (numval==""){return false;}
	var myRegExp = new RegExp("^[/+|/-]?[0-9]*[/.]?[0-9]*$");
	return myRegExp.test(numval);
}
 
function Validate()
{
	if (isblank(document.getElementById("cusname").value))
	{
		alert("Please Enter Your Name!");
		document.getElementById("cusname").focus();
		return false;
	}
	else if (isblank(document.getElementById("cusroom").value))
	{
		alert("Please Enter Room / Apt.!");
		document.getElementById("cusroom").focus();
		return false;
	}
	else if (!isValidEmail(document.getElementById("cusemail").value))
	{
		alert("Please Enter Valid Email ID!");
		document.getElementById("cusemail").focus();
		return false;
	}
	else
	{
		return true;
	}
}
function newSpeciman()
{
	specimanSignature = Math.ceil(Math.random() * 100000);
	document.getElementById('BotBootInputImage').innerHTML = specimanSignature;
}
</script>



<style type="text/css">
<!--
.style1 {color: #FF0000}
.style4 {font-size: 72px}
-->
</style>

<?php
$h = "-3";// Hour for time zone goes here e.g. +7 or -4, just remove the + or -
$hm = $h * 60; 
$ms = $hm * 60;
$dt = gmdate("d/m/Y g:i:s A", time()-($ms)); // the "+" can be switched to a plus if that's what your time zone is.
?> 
</head>

<body>
<div>

	<table border="0" cellspacing="0" cellpadding="0" width="100%">
  <tr>
    <td align="center" colspan="2" style="font-size:18px; padding-bottom:20px; padding-top:20px; color:#B40101;"><span class="style4">M</span>aintenance Form</td>
    </tr>
	  <tr>
		<td align="center" class="bgimage" style="font-size:36px; color:#FFFFFF;">American School of Kuwait</td>
	  </tr>
	</table>
	
<div align="center">	
<form action="fixit.php" method="post" name="contactus" id="contactus" onsubmit="return Validate()" class="niceform">
<table border="0" cellspacing="0" cellpadding="0">
	<tr><td align="right" style="padding-right:10px; padding-top:20px;">Date :</td><?php $dt = gmdate("d/m/Y g:i:s A", time()-($ms)); ?>
	<td  style="padding-top:20px;"> <input type="text" name="cusdate" id="cusdate" value="<?php echo $dt;?>" readonly="yes"/></td></tr>	
  <tr>
    <td align="right" style="padding-right:10px; padding-top:20px;">For : </td>
    <td style="padding-top:20px;"><input type="radio" name="cusfor" value="School" /><label class="check_label">School</label>	&nbsp; &nbsp; &nbsp;  
		<input type="radio" name="cusfor" value="Dunes" /><label class="check_label">Dunes</label></td>
  </tr>
  <tr>
    <td align="right" style="padding-top:15px; padding-bottom:15px; padding-right:10px;">Name : </td>
    <td  style="padding-top:15px; padding-bottom:15px;"><input type="text" name="cusname" id="cusname" size="54" /><span class="style1">*</span></td>
  </tr>
  <tr>
    <td  align="right" style="padding-right:10px; padding-bottom:15px;">Room / Apt. : </td>
    <td style="padding-bottom:15px;"><input type="text" name="cusroom" id="cusroom" size="54" /><span class="style1">*</span></td>
  </tr>
  <tr>
    <td align="right" style="padding-right:10px;">Description of Issue : </td>
    <td><textarea name="cusdes" id="cusdes" rows="3" cols="42"></textarea></td>
  </tr>
  <tr>
    <td  align="right" style="padding-right:10px; padding-top:15px;">Email ID : </td>
    <td style="padding-right:10px; padding-top:15px;"><input type="text" name="cusemail" id="cusemail" size="54" /><span class="style1">*</span></td>
  </tr>
  <tr>
    <td colspan="2"  style="padding-top:20px;" align="center"><input type="submit" style=" background-color:#B40101; color:#FFFFFF; width:100px; height:35px; border:0px; font-weight:bold;" name="cussubmit" value="Submit" /></td>
	</tr>
  <tr>
    <td colspan="2"  style="padding-top:50px; padding-left:90px;">
	Notes:<br />
1) Check your email for updates on the job.<br />
2) Jobs will be assigned and fielded with in 2 working days.<br />
3) In case of emergency write URGENT in the "Description of Issue".<br />
4) For complaints or suggestions please email Housing Coordinator at housingcoordinator@ask.edu.kw<br />	</td>
	</tr>
</table>
</form>
</div>




</div>

</body>
</html>