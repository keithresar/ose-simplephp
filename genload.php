<?php

$EXEC_TIME_SECS=4;

echo "Generating load....<br>\n";

$start_ts = time();
while (time()-$start_ts<$EXEC_TIME_SECS)  true;

echo "Generating load....complete after ".(time()-$start_ts)." seconds.<br>\n";


?>
