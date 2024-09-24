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


function Palindrome($num1){  
    $nm = $num1;  
    $n2 = 0;  
    while (floor($nm)) {  
        $a = $nm % 10;  
        $n2 = $n2 * 10 + $a;  
        $nm = $nm/10;  
    }  
    if ($n2 == $num1){  
        return 1;  
    }
    else{
        return 0;
    }
}  
 
// $original = 1441; 
if (Palindrome($num1)){  
    echo "Palindrome";  
} 
else {  
echo "Not a Palindrome";  
}

}
?>