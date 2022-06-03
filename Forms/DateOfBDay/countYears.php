<?php
    $currentYear = (int)intval( date("Y"));
    if(isset($_GET["year"])){
        $old = $currentYear - intval($_GET["year"]);
        echo "You have " . $old . " years old";
    }
?>