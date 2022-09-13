<!-------- Check if Palindrome -------->
<?php

$str = $_GET["str"]
if (strrev($str) == $str){
    $x = "Palindrome";
}
else{
    $x = "Not a Palindrome";
}

echo jason_encode($x);

?>
