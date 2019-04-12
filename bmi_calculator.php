<?php

$height=0;  
$weight=0;  



if ($_POST['height']!=strval(floatval($_POST['height'])))   
{  
//Print error message and hyperlink.  
    print "Height is invalid<br />";  
    print "<a href='calculator.html'>try again</A>";  
//Execution of this script is terminated at this point.  
    exit;  
}  

//Read user value to variable.  
$height=$_POST['height'];  

//Check that value is in right range.  
if ($height<0 || $height>2.5)  
{  
    print "Height must be value between 0 and 2.5<br />";  
    print "<a href='calculator.html'>try again</A>";  
    exit;  
}  

//Weight is in kilogramms, so it must be an integer (no floating point).  
if ($_POST['weight']!=strval(intval($_POST['weight'])))   
{  
    print "Weight is invalid<br />";  
    print "<a href='calculator.html'>try again</A>";  
    exit;  
}  

//Read user value to variable.  
$weight=$_POST['weight'];  

//Check that value is in right range.  
if ($weight<0 || $weight>500)  
{  
    print "Weight must be value between 0 and 500<br />";  
    print "<a href='calculator.html'>try again</A>";  
    exit;  
}  

$bmi=$weight / ($height * $height);  

//Print result.  
print("Body mass index is $bmi");  : ?>