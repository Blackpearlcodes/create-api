<!-------- Check if Palindrome -------->
<?php

$str = $_GET["str"]
if (strrev($str) == ($str)) {
    $x = "Palindrome";
    }
else{
    $x = "Not a Palindrome";
    }
echo jason_encode($x);
?>


<!----- Arithmatic Operation API ------->
<!---------- a^3 + b*c - a/b ----------->
<?php

$a = $_POST["a"]
$b = $_POST["b"]
$c = $_POST["c"]

$x = ($a ** 3) + ($b * $c) + ($a / $b);
echo jason_encode($x);
?>


<!----------- Check Password ------------>
<?php
if isset($_POST['submit']){
  $password = $_POST['password'];
  
  // Validate password strength
  $uppercase = preg_match('@[A-Z]@', $password);
  $lowercase = preg_match('@[a-z]@', $password);
  $number    = preg_match('@[0-9]@', $password);
  $specialchars = preg_match('@[^\w]@', $password);
  
  if(!$uppercase || !$lowercase || !$number || !$specialchars || strlen($password) < 8) {
    echo 'Not Strong';
  }
  else{
    echo 'Strong';
  } 
}
?>


<!----------- Days till Christmas ------------>
<?php
$timeXmas = $_POST["timeXmas"]
date_default_timezone_set('Asia/Beirut');

$christmasDay = strtotime('December 25');
$time = time();
$days = ceil(($christmasDay - $time)/60/60/24);

echo jason_encode($days);
?>