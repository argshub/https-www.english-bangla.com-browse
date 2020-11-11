<?php
$data = file_get_contents("php://input");
$file = fopen("etob.txt", "a");
fwrite($file, $data . "\n");