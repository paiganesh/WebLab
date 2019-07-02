<?php
//String Matching
$states = "Mississippi Alabama Texas Massachusetts Kansas";
$pattern_list = array("/[a-zA-Z]*xas\b/", "/\bk[a-z]*s\b/i", "/\bM[a-z]*s\b/", "/[a-zA-Z]*a\b/");

$i=0;
foreach ($pattern_list as $pattern) 
{
    if (preg_match($pattern, $states, $match)) 
        $statesList[$i] = $match[0];  
    $i++;
}	

print_r($statesList);
?>