<html>
<body>
	<form>
        Enter radius : <input type="number" name="num1"><br>
		<input type="submit" name="sub">

	</form>

</body>
</html>

<?php 

if(isset($_REQUEST['sub'])){
    $num1=$_REQUEST['num1'];


function findArea($r) {
    $pi = 3.14;
    $area = $pi * $r * $r;
    return $area;
}


// $radius = 12;

$area = findArea($num1);
echo "Area of Circle: " . $area;

}
?>