<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<?php

// https://youtu.be/sm17kNz_kiU?si=UGj1r4BNWWfbi-3F

 $all_keys = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','1','2','3','4','5','6','7','8','9','0','!','@','#','$','%','*','(',')','_','+','=','-',':',';','?','.',',','');

$length = array(8,9,10,11,12,13,14,15); 

// random vabe password nawar jonna 'shuffle' ay function used korti hoy.
shuffle($length);
 
$final_length = $length[2];

echo "Password length is $final_length <br> <br>";

$str ="";

for($i=0; $i< $final_length ;$i++){

 shuffle( $all_keys);
$str.=$all_keys[0]; //$str =$str.$all_keys;ay jaga concat kora hoyasa.
}
 echo "Your password is: $str <br>";



?>
</body>
</html>  