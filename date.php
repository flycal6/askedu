
<?php
echo date("D/M/Y") . "<br>";
?> 

<br>
<br>


<?php
$h = "-3";// Hour for time zone goes here e.g. +7 or -4, just remove the + or -
$hm = $h * 60; 
$ms = $hm * 60;
$gmdate = gmdate("d/m/Y g:i:s A", time()-($ms)); // the "+" can be switched to a plus if that's what your time zone is.
echo "Your current time now is [-3]:  $gmdate . ";
?> 

<br>
<br>


<?php
$h = "-2";// Hour for time zone goes here e.g. +7 or -4, just remove the + or -
$hm = $h * 60; 
$ms = $hm * 60;
$gmdate = gmdate("d/m/Y g:i:s A", time()-($ms)); // the "+" can be switched to a plus if that's what your time zone is.
echo "Your current time now is [-2]:  $gmdate . ";
?> 

<br>
<br>


<?php
$h = "-1";// Hour for time zone goes here e.g. +7 or -4, just remove the + or -
$hm = $h * 60; 
$ms = $hm * 60;
$gmdate = gmdate("d/m/Y g:i:s A", time()-($ms)); // the "+" can be switched to a plus if that's what your time zone is.
echo "Your current time now is [-1]:  $gmdate . ";
?> 

<br>
<br>
