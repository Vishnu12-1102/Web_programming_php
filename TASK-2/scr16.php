<!DOCTYPE html>
<html>
<body>
		<form>
        Enter string : <input type="text" name="str1"><br>
		<input type="submit" name="sub">

		</form>
</body>
</html>

<?php

	if(isset($_REQUEST['sub'])){
		$str1=$_REQUEST['str1'];


$str1=strtolower($str1);
$vowelcount=0;

for($a=0;$a<strlen($str1);$a++){
	if (in_array($str1[$a],["a","e","i","o","u"])) {
		$vowelcount++;
	}
}

echo $vowelcount;
}

?>