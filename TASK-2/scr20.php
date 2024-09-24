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

function Factorial($num1){ 
    $facto = 1; 
    for ($a = 1; $a <= $num1; $a++){ 
    $facto = $facto * $a; 
    } 
    return $facto; 
} 
 
// $number = 10; 
$fact = Factorial($num1); 
echo "Factorial = $fact"; 
}
?>