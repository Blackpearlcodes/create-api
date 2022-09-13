<!-------- Check if Palindrome -------->
<?php
if isset($_GET['submit']){
$str = $_GET["str"]

function Palindrome($string){ 
    if (strrev($string) == $string){ 
        $x = "Palindrome"; 
    }
    else{
        $x = "Not Palindrome";
    }
}
echo jason_encode($x);
}
?>


<!----- Arithmatic Operation API ------->
<!---------- a^3 + b*c - a/b ----------->
<?php
if isset($_POST['submit']){
$a = $_POST["a"]
$b = $_POST["b"]
$c = $_POST["c"]

$x = ($a ** 3) + ($b * $c) + ($a / $b);
echo jason_encode($x);
}
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
if isset($_GET['submit']){
$timeXmas = $_GET["timeXmas"]
date_default_timezone_set('Asia/Beirut');

$christmasDay = strtotime('December 25');
$time = time();
$days = ceil(($christmasDay - $time)/60/60/24);

echo jason_encode($days);
}
?>