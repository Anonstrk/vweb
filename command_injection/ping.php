<?php
$ip = $_GET['ip'];
$output = shell_exec("ping -c 1 " . $ip);
echo "<pre>$output</pre>";
?>