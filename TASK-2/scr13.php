<html>
<body>

	<form action="#" method="get">
		Enter celsius : <input type="text" name="cel"><br>
		
		<input type="submit" name="sub">

	</form>

</body>
</html>

<?php
	if(isset($_REQUEST['sub'])){
		$cel=$_REQUEST['cel'];
		
		echo ($cel*(9/5)+32);
}
?>