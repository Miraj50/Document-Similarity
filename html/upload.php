<?php 

/**
* The directory where all the uploads will go.
*/
$target_dir = "uploads/";

/**
* When two files are to be uploaded i.e. the button named "twofilebtn" is pressed.
*/

if(isset($_POST['twofilebtn'])){
    $target_file1 = $target_dir . basename($_FILES["UploadFileName1"]["name"]);
    $target_file2 = $target_dir . basename($_FILES["UploadFileName2"]["name"]);
    
    if (move_uploaded_file($_FILES["UploadFileName1"]["tmp_name"], $target_file1) && move_uploaded_file($_FILES["UploadFileName2"]["tmp_name"], $target_file2)) {
            echo "The file ". basename($_FILES["UploadFileName1"]["name"]). " has been uploaded.";
            echo "The file ". basename($_FILES["UploadFileName2"]["name"]). " has been uploaded.";
    } 
    else {
        echo "Sorry, there was an error uploading your file.";
    }
    session_start();
    $_SESSION['url1'] = '';
    $_SESSION['url2'] = '';
    header("location:twodoc_op.php");
}

/**
* When multiple files are to be uploaded i.e. the button named "mulfilebtn" is pressed.
*/

if(isset($_POST['mulfilebtn'])){
    $target_file = $target_dir . basename($_FILES["Uploadmulfiles"]["name"]);
    
    if (move_uploaded_file($_FILES["Uploadmulfiles"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["Uploadmulfiles"]["name"]). " has been uploaded.";
    } 
    else {
        echo "Sorry, there was an error uploading your compressed file.";
    }
    $zip = new ZipArchive();
    if ($zip->open($target_file) === TRUE) {
        $zip->extractTo($target_dir);
        $zip->close();
        echo 'ok';
    } else {
        echo 'failed';
    }
    unlink($target_file);
    // $files = glob($target_dir . '*'); // get all file names
    // foreach($files as $file){ // iterate files
    //     if(is_file($file))
    //         unlink($file); // delete file
    // }
    session_start();
    $_SESSION['url1'] = '';
    $_SESSION['url2'] = '';
    // header("location:cluster_op.php");
}

/**
* When two URL's are to be submitted i.e. the button named "urlsbtn" is pressed.
*/

if(isset($_POST['urlsbtn'])){
    header("location:url.php");
    // echo '<a target="_parent" href="url.php"></a>';
    // include "url.php";
}

if (isset($_POST['rawtextbtn'])) {
    $t1 = $_POST['textbox1'];
    $t2 = $_POST['textbox2'];
    $myfile1 = fopen("uploads/textfile1.txt", "w") or die("Unable to create file");
    fwrite($myfile1, $t1);
    fclose($myfile1);
    $myfile2 = fopen("uploads/textfile2.txt", "w") or die("Unable to create file");
    fwrite($myfile2, $t2);
    fclose($myfile2);
    session_start();
    $_SESSION['url1'] = '';
    $_SESSION['url2'] = '';
    header("location:twodoc_op.php");
}

/**
* When a file and a URL are to be uploaded i.e. the button named "fileurlbtn" is pressed.
*/
if (isset($_POST['fileurlbtn'])){
    $target_file1 = $target_dir . basename($_FILES["UploadFileName1"]["name"]);
    if (move_uploaded_file($_FILES["UploadFileName1"]["tmp_name"], $target_file1)) {
            echo "The file ". basename($_FILES["UploadFileName1"]["name"]). " has been uploaded.";
    } 
    else {
        echo "Sorry, there was an error uploading your file.";
    }
    session_start();
    $url1 = $_POST['url1'];
    $_SESSION['url1'] = $url1;
    $_SESSION['url2'] = '';
    header("location:twodoc_op.php");
}

/**
* When a file and Raw text are to be uploaded i.e. the button named "filetextbtn" is pressed.
*/
if (isset($_POST['filetextbtn'])){
    $target_file1 = $target_dir . basename($_FILES["UploadFileName1"]["name"]);
    if (move_uploaded_file($_FILES["UploadFileName1"]["tmp_name"], $target_file1)) {
            echo "The file ". basename($_FILES["UploadFileName1"]["name"]). " has been uploaded.";
    } 
    else {
        echo "Sorry, there was an error uploading your file.";
    }
    $t1 = $_POST['textbox1'];
    $myfile1 = fopen("uploads/textfile1.txt", "w") or die("Unable to create file");
    fwrite($myfile1, $t1);
    fclose($myfile1);
    session_start();
    $url1 = $_POST['url1'];
    $_SESSION['url1'] = $url1;
    $_SESSION['url2'] = '';
    header("location:twodoc_op.php");
}

/**
* When a URL and Raw text are to be uploaded i.e. the button named "urltextbtn" is pressed.
*/
if (isset($_POST['urltextbtn'])){
    $t1 = $_POST['textbox1'];
    $myfile1 = fopen("uploads/textfile1.txt", "w") or die("Unable to create file");
    fwrite($myfile1, $t1);
    fclose($myfile1);
    session_start();
    $url1 = $_POST['url1'];
    $_SESSION['url1'] = $url1;
    $_SESSION['url2'] = '';
    header("location:twodoc_op.php");
}

?>