<?php
$data = file_get_contents("php://input");
$data = json_decode($data, true);
if(strlen($data['image'])) {
   $imageData = $data['image'];
   $imageSrcData = "";
   while (!$imageSrcData) {
       $imageSrcData = file_get_contents($imageData);
   }
   $data['image'] = base64_encode($imageSrcData);
}
$data = json_encode($data);
$file = fopen("etob.txt", "a");
fwrite($file, $data . "\n");