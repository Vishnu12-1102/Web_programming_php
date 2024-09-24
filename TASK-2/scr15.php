<html>
<body>
    <form action="#" method="get">
        enter number1 : <input type="text" name="nm1"><br>
        enter number2 : <input type="text" name="nm2"><br>
        enter number3 : <input type="text" name="nm3"><br>

        <input type="submit" name="sub">
    </form>
</body>
</html>


<?php

    if(isset($_REQUEST['sub'])){
        $nm1=$_REQUEST['nm1'];
        $nm2=$_REQUEST['nm2'];
        $nm3=$_REQUEST['nm3'];

        if($nm1>$nm2 && $nm1>$nm3)
        {
            echo "largest number is : $nm1";
        }
        elseif($nm2>$nm3 && $nm2>$nm3)
        {
            echo "largest number is : $nm2";
        }
        else{
            echo "largest number is : $nm3";
        }
    }

?>
