Hello. 

<?php

echo "Welcome to the best application in the world.\n";
echo "<br>All running on openshift\n";

echo "<hr>\n";

echo "Serving from pod <b>".getenv('HOSTNAME')."</b>.\n";

echo "<hr>\n";

?>

<a href="dbtest.php">dbtest</a> · <a href="genload.php">genload</a>

