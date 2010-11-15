<?php

    include "config.php";

    $out = array();
    exec("GIT_DIR=$RepositoryPath git pull origin master", $out);

    echo "<code>\n";
    echo "$ cd " . $RepositoryPath . "\n";
    echo "$ git pull origin master<br />\n";
    echo "<br />\n";
    foreach($out as $line)
    {
        echo str_replace("\n", "<br />", $line) . "<br />\n";
    }
    echo "</code>\n";

?>
