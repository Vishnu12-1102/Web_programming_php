<!DOCTYPE html>
<html>
<body>
	<form>
        Enter year : <input type="text" name="yr"><br>
		<input type="submit" name="sub">

	</form>

</body>
</html>
<?php

	if(isset($_REQUEST['sub'])){
		$yr=$_REQUEST['yr'];

		if ($yr % 4 == 0) {
			echo "This year is leap year";
		}
		else{
			echo "This year is not leap year";
		}

}
?>