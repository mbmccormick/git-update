<?php

    $out = array();
    exec("git pull origin master", $out);

    echo "<code>\n";
    echo "$ git pull origin master<br />\n";
    foreach($out as $line)
    {
        echo str_replace("\n", "<br />", $line) . "<br />\n";
    }
    echo "</code>\n";

?>
