<?php 
print_r($_FILES);
echo "Upload: " . $_FILES["UploadFileName1"]["name"] . "<br>";
echo "Type: " . $_FILES["UploadFileName1"]["type"] . "<br>";
echo "Size: " . ($_FILES["UploadFileName1"]["size"] / 1024) . " kB<br>";
echo "Temp file: " . $_FILES["UploadFileName1"]["tmp_name"] . "<br>";

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["UploadFileName1"]["name"]);
if (move_uploaded_file($_FILES["UploadFileName1"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["UploadFileName1"]["name"]). " has been uploaded.";
} 
else {
    echo "Sorry, there was an error uploading your file.";
}

$output = shell_exec("/usr/bin/python3 /var/www/html/example.py $target_file");
// $ans = json_decode($result);
// echo "<pre>$ans</pre>";
echo '<pre>' . var_dump($output) . '</pre>';
// print_r($output);
echo "<pre>" . $output . "</pre>";

?>