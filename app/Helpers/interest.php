<?php
    function interest($p, $t, $r)
    {
    $CI=null;
    $Ci=null;
    $CI=$p*(pow((1+$r/100),$t));
    $Ci=$CI/$t;
    echo "Interest:". $Ci;
   echo "<br>";
    echo "EMI:".$CI;
    }
