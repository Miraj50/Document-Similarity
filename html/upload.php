<?php 
// print_r($_FILES);
// echo "Upload: " . $_FILES["UploadFileName1"]["name"] . "<br>";
// echo "Type: " . $_FILES["UploadFileName1"]["type"] . "<br>";
// echo "Size: " . ($_FILES["UploadFileName1"]["size"] / 1024) . " kB<br>";S
// echo "Temp file: " . $_FILES["UploadFileName1"]["tmp_name"] . "<br>";

$target_dir = "uploads/";

if(isset($_POST['twofilebtn'])){
    $target_file1 = $target_dir . basename($_FILES["UploadFileName1"]["name"]);
    $target_file2 = $target_dir . basename($_FILES["UploadFileName2"]["name"]);
    
    if (move_uploaded_file($_FILES["UploadFileName1"]["tmp_name"], $target_file1) && move_uploaded_file($_FILES["UploadFileName2"]["tmp_name"], $target_file2)) {
            echo "The file ". basename( $_FILES["UploadFileName1"]["name"]). " has been uploaded.";
            echo "The file ". basename( $_FILES["UploadFileName2"]["name"]). " has been uploaded.";
    } 
    else {
        echo "Sorry, there was an error uploading your file.";
    }
    header("location:twodoc_op.php");
}

if(isset($_POST['mulfilebtn'])){
    $target_file = $target_dir . basename($_FILES["Uploadmulfiles"]["name"]);
    
    if (move_uploaded_file($_FILES["Uploadmulfiles"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["Uploadmulfiles"]["name"]). " has been uploaded.";
    } 
    else {
        echo "Sorry, there was an error uploading your compressed file.";
    }
    header("location:cluster_op.php");
}

if(isset($_POST['urlsbtn'])){
    header("location:url.php");
}

if (isset($_POST['rawtextbtn'])) {
    $t1 = $_POST['textbox1'];
    $t2 = $_POST['textbox2'];
    // echo $t1 , $t2;
    $myfile1 = fopen("uploads/textfile1.txt", "w") or die("Unable to create file");
    fwrite($myfile1, $t1);
    fclose($myfile1);
    $myfile2 = fopen("uploads/textfile2.txt", "w") or die("Unable to create file");
    fwrite($myfile2, $t2);
    fclose($myfile2);
    header("location:twodoc_op.php");
}
// $output = shell_exec("/usr/bin/python3 /var/www/html/example.py $target_file");
// // $ans = json_decode($result);
// // echo "<pre>$ans</pre>";
// echo '<pre>' . var_dump($output) . '</pre>';
// // print_r($output);
// echo "<pre>" . $output . "</pre>";

?>