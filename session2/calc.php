
<html>
<head>
<title>calculater</title>
</head>
<body>
<h2>chose the number</h2>
<form method="POST">
<input type="text" name="num1">
<select name="op">
 <option value="+" >+</option> 
 <option value="-" >-</option>
 <option value="*" >*</option>
 <option value="/" >/</option>
</select>
<input type="text" name="num2">
<input type="submit" name="button" value="calc">
</form>



<?php
 if(isset($_POST["num1"]) && isset($_POST["num2"])){
  if(empty($_POST["num1"])){
   echo "<script> alert ('plrase chose the number') </script>";
   unset($_POST["button"]);
  }
  if(empty($_POST["num2"])){
   echo "<script> alert ('plrase chose the number') </script>";
   unset($_POST["button"]);
  }
  $op=$_POST["op"];
  $num1=$_POST["num1"];
  $num2=$_POST["num2"];
  if($op == "/"){
    unset($_POST["button"]);
   }
  }
 

if(isset($_POST["button"]) && !empty($_POST["button"]))
{
 $result=0;
 switch($op) 
 {
  case($op='+'):
   $result=$num1+$num2;
   break;
  case($op='-'):
   $result=$num1-$num2;
   break;
  case($op='*'):
   $result=$num1*$num2;
   break;
  case($op='/'):
   $result=$num1/$num2;
   break;
 }
 echo "<script>alert('$num1 $op $num2=$result')</script>";
}
?>
</body>
</html>