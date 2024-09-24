<html>
<body>
    <form action="#" method="get">
        enter number : <input type="text" name="num"><br>
        <input type="submit" name="sub">
    </form>
</body>
</html>

<?php

    if(isset($_REQUEST['sub'])){
        $n=$_REQUEST['num'];
        if($n%2==0){
        echo('num is even');
        }
        else{
            echo('num is odd');
        }
    }

?>
