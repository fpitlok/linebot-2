<?php

$update_response = file_get_contents("php://input");
$update = json_decode($update_response, true);

$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
fwrite($myfile, $update["queryResult"]["action"]);
fclose($myfile);

?>