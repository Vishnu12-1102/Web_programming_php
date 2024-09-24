<html>
<body>

    <form action="#" method="get">
        length = <input type="number" name="len"><br>
        width = <input type="number" name="wid"><br>
        <input type="submit" name="sub">
    </form>

</body>

</html>


<?php
            if(isset($_REQUEST['sub']))
            {
                $l=$_REQUEST['len'];
                $w=$_REQUEST['wid'];
                echo $l*$w;
            }


?>
