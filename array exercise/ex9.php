<?php

    $cap=array(
        "india"=>"delhi",
        "norway"=>"oslo",
        "france"=>"paris",
        "portugal"=>"lisbon",
        "sweden"=>"stockholm",
    );

    ksort($cap);
    print_r($cap);
    echo "<br>";
    echo "<br>";
    krsort($cap);
    print_r($cap);
?>