<?php

function closeConnection($body)
{
ob_end_clean();
ob_start();
echo $body;
$size = ob_get_length();
header("Connection: close\r\n");
header("Content-Encoding: none\r\n");
header("Content-Length: $size");
ob_end_flush();
@ob_flush();
flush();
}
closeConnection('this should be shown');
sleep(10);
echo ' this should not be shown';

?>

