<html>
<body>

    <form action="#" method="get">
        enter number = <input type="number" name="nm"><br>
        <input type="submit" name="sub">
    </form>

</body>

</html>


<?php
            if(isset($_REQUEST['sub']))
            {
                $n=$_REQUEST['nm'];
                $sqrt=sqrt($n);

                echo "sqrt is :",$sqrt;
            }


?>