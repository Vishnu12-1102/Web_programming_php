<html>
<body>
	<form>
        Enter number : <input type="number" name="num1"><br>
		<input type="submit" name="sub">

	</form>

</body>
</html>

<?php


if(isset($_REQUEST['sub'])){
    $num1=$_REQUEST['num1'];

function check_prime($num1)
{
   if ($num1 == 1)
   return 0;
   for ($a = 2; $a <= $num1/2; $a++)
   {
      if ($num1 % $a == 0)
      return 0;
   }
   return 1;
}

$val = check_prime($num1);
if ($val == 1)
   echo "It is a prime number";
else
   echo "It is a non-prime number";
}
?>

