<html>
<body>
	<form>
        Guess the number : <input type="number" name="num1"><br>
		<input type="submit" name="sub">

	</form>

</body>
</html> 
 
<?php 

	if(isset($_REQUEST['sub'])){
		$num1=$_REQUEST['num1'];

        $random=rand(1,10);
        if($num1==$random)
        {
            echo "your guess is right.. $random";
        }
        else
        {
            echo "your guess is wrong.. (correct is $random)";
        }


}
?>  
