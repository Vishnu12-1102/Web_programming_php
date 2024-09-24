<html>
<body>

	<form action="#" method="get">
		Enter string1 : <input type="text" name="str1"><br>
		Enter string2 : <input type="text" name=" str2"><br>
		<input type="submit" name="sub">

	</form>

</body>
</html>

<?php
	if(isset($_REQUEST['sub'])){
		$str1=$_REQUEST['str1'];
		$str2=$_REQUEST['str2'];
		echo $str1.$str2;
}
?>