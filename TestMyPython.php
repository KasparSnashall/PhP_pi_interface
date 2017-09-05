<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php
$q = strval($_GET['q']);


$stringcommand = "sudo python test.py ";
$stringsum = "{$stringcommand}{$q}";

$command = escapeshellcmd($stringsum);
$output = shell_exec($command);
echo $output;

?>

</body>
</html>