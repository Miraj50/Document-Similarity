<style type="text/css">
    .textdiv1, .textdiv2{
        width: 35%;
        height: 250px;
        border: 2px solid blue;
        float: left;
        margin: 50px; 
    }

    textarea{
        width: 100%;
        height: 100%;
    }

    .twofile, .mulfile{
        width: 50%;
        height: 200px;
        /*border: 2px solid blue;*/
        float: left;
    }

</style>

<h1 style="text-align: center;"><u><i>DOCUMENT SIMILARITY ANALYSIS</i></u></h1>

<div class="twofile">
<h3><u>Upload Two Files</u></h3>

<form action="upload.php" method="post" enctype="multipart/form-data">
    Select FILE-1 to upload : 
    <input type="file" name="UploadFileName1" id="UploadFileName1">
    <input type="submit" name="submit" value="Upload File 1">
</form>

<form action="upload.php" method="post" enctype="multipart/form-data">
    Select FILE-2 to upload : 
    <input type="file" name="UploadFileName2" id="UploadFileName2">
    <input type="submit" name="submit" value="Upload File 2">
</form>
</div>

<div class="mulfile">
    <h3><u>Upload Multiple Files (Zipped/Tarball)</u></h3>
    <form action="upload.php" method="post" enctype="multipart/form-data">
    Select FILES to upload : 
    <input type="file" name="UploadFiles" id="UploadFiles">
    <input type="submit" name="submit" value="Upload">
    </form>
</div>

<br><hr>

<h3><u>Raw Text</u></h3>

<div class="textdiv1">
    <form method="post" action="textbox.php">
        <textarea name="textbox1"></textarea>
        <br>
        <input type="submit" value="Upload" />  
    </form>
</div>
<div class="textdiv2">
    <form method="post" action="textbox.php">
        <textarea name="textbox2"></textarea>
        <br>
        <input type="submit" value="Upload" />  
    </form>
</div>