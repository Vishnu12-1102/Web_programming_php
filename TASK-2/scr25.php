<html>
<body>
	<form>
        Enter number1 : <input type="number" name="num1"><br>
        Enter number2 : <input type="number" name="num2"><br>

		<input type="submit" name="sub">

	</form>

</body>
</html>

<?php 

if(isset($_REQUEST['sub'])){
    $num1=$_REQUEST['num1'];
    $num2=$_REQUEST['num2'];

    
// $x = 10; $y = 5;

$num1 = $num1 + $num2; 
$num2 = $num1 - $num2; 
$num1 = $num1 - $num2; 

echo "After Swapping: num1 = ", 
       $num1, ", " , "num2 = ", $num2;


}
?>