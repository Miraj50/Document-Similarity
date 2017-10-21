<style type="text/css">
    .textdiv1, .textdiv2{
        width: 35%;
        height: 200px;
        border: 2px solid blue;
        float: left;
        margin-left: 50px; 
    }

    textarea{
        font-size: 15px;
        width: 100%;
        height: 100%;
    }

    .twofile, .mulfile{
        /*text-align: center;*/
        width: 49%;
        height: 200px;
        /*border: 1px solid blue;*/
        float: left;
    }
    .twofileupload{
        position: relative;
             
    }
    hr.verticalline{
        width: 0px;
        height: 10px;
    }
    .rawtextupload{
        margin: 10px;
        text-align: center;
        vertical-align: middle;
        margin-top: 80px;   
    }
    .urlupload{
        margin-left: 10px;  
    }
    .urldiv1, .urldiv2{
        width: 35%;
        height: 25px;
        border: 2px solid blue;
        float: left;
        margin-left: 50px; 
    }
    .clearfix{
        clear: both;
    }
</style>

<h1 style="text-align: center;"><u><i>DOCUMENT SIMILARITY ANALYSIS</i></u></h1>

<div>

<div class="twofile">
    <h3><u>Upload Two Files</u></h3>
    <div>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <div>
                Select FILE-1 to upload : 
                <input type="file" name="UploadFileName1" id="UploadFileName1">
            </div>
            
            
            <!-- <input type="submit" name="submit" value="Upload File 1"> -->
       <!--  </form>

        <form action="upload.php" method="post" enctype="multipart/form-data"> -->
            <div>
                Select FILE-2 to upload : 
                <input type="file" name="UploadFileName2" id="UploadFileName2">
            </div>
            <br>
            <input class="twofileupload" type="submit" name="submit" value="Upload">
            
        </form>
    </div>
</div>
<!-- <hr class="verticalline"> -->

<div class="mulfile">
    <h3><u>Upload Multiple Files (Zipped/Tarball)</u></h3>
    <form action="cluster_op.php" method="post" enctype="multipart/form-data">
    Select FILES to upload : 
    <input type="file" name="UploadFiles" id="UploadFiles">
    <input type="submit" name="submit" value="Upload">
    </form>
</div>

<div class="clearfix"></div>

</div>

<br>

<h3><u>Text from URL's</u></h3>

<div>
    <form method="post" action="url.php">
        <div class="urldiv1">
            <textarea name="url1" placeholder="Enter URL(1)..."></textarea>
            <br>
        </div>
        <div class="urldiv2">
            <textarea name="url2" placeholder="Enter URL(2)..."></textarea>
            <br>
        </div>
        <input class="urlupload" type="submit" value="Upload" />  
    </form>
</div>

<br>

<h3><u>Raw Text</u></h3>

<div> <!-- style="border: 1px solid red" -->
    <form method="post" action="textbox.php">
        <div class="textdiv1">
            <!-- <form method="post" action="textbox.php"> -->
                <textarea name="textbox1" placeholder="Enter text..."></textarea>
                <br>
                <!-- <input type="submit" value="Upload" />   -->
            <!-- </form> -->
        </div>
        <div class="textdiv2">
           <!--  <form method="post" action="textbox.php"> -->
                <textarea name="textbox2" placeholder="Enter text..."></textarea>
                <br>
                <!-- <input type="submit" value="Upload" />   -->
            <!-- </form> -->
        </div>
        <input class="rawtextupload" type="submit" value="Upload" />  
    </form>
</div>