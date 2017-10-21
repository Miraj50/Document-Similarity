<style type="text/css">
    .textdiv1, .textdiv2{
        width: 47%;
        height: 200px;
        /*border: 2px solid blue;*/
        float: left;
        margin-left: 30px; 
        box-shadow: 10px 10px 5px grey;
    }
    .txt1:focus{
        border: 3px solid #555;
    }
    .insidetwofile{
        margin-left: 30px;
    }
    textarea{
        font-size: 15px;
        width: 100%;
        height: 100%;
    }

    .twofile, .mulfile{
        margin-top: 30px;
        width: 47%;
        height: 200px;
        margin-left: 30px; 
        /*border: 1px solid blue;*/
        float: left;
        border-bottom-style: solid;
        border-left-style: solid;
        border-top-style: dotted;
        box-shadow: 10px 10px 5px grey;
    }
    /*.twofileupload{
        position: relative;
        
    }*/
    hr.verticalline{
        width: 0px;
        height: 10px;
    }
    .rawtextupload{
        margin-left: 47%;
        text-align: center;
        vertical-align: middle;
        margin-top: 25px;   
    }
    .urlupload{
        margin-left: 47%;
        margin-top: 10px; 
    }
    .urldiv1, .urldiv2{
        width: 47%;
        height: 25px;
        margin-left: 30px;
        /*border: 2px solid blue;*/
        float: left;
        /*margin-left: 50px;*/
        box-shadow: 5px 5px 5px grey;
    }
    .urls{
        margin-top: 50px    ;
        width: 96%;
        margin-left: auto;
        margin-right: auto;
        border-bottom-style: solid;
        border-left-style: solid;
        border-top-style: dotted;
        box-shadow: 10px 10px 5px grey;
    }
    .rawtext{
        margin-top: 50px;
        width: 96%;
        height : 350px;
        margin-left: auto;
        margin-right: auto;
        border-bottom-style: solid;
        border-left-style: solid;
        border-top-style: dotted;
        box-shadow: 10px 10px 5px grey;
    }
    .clearfix{
        clear: both;
    }
    input[type=submit] {
        background-color: #008CBA; 
        color: white; 
        border: 2px solid #008CBA;
        padding: 8px 16px;
        text-align: center;
        text-decoration: none;
        /*display: inline-block;*/
        font-size: 16px;
        /*margin: 4px 2px;*/
        -webkit-transition-duration: 0.4s; /* Safari */
        transition-duration: 0.4s;
        cursor: pointer;
    }
    input[type=submit]:hover {
        background-color: white;
        color: black;
    }
   
</style>

<h1 style="text-align: center;"><u><i>DOCUMENT SIMILARITY ANALYSIS</i></u></h1>

<div>

<div class="twofile">
    <h3  class="insidetwofile"><u>Upload Two Files</u></h3>
    <div  class="insidetwofile">
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <div>
                Select FILE-1 to upload : 
                <input type="file" name="UploadFileName1" id="UploadFileName1">
            </div>
            <br>
            <div>
                Select FILE-2 to upload : 
                <input type="file" name="UploadFileName2" id="UploadFileName2">
            </div>
            <input class="twofileupload" type="submit" name="submit" value="Upload">
            
        </form>
    </div>
</div>

<div class="mulfile">
    <h3  class="insidetwofile"><u>Upload Multiple Files (Zipped/Tarball)</u></h3>
    <form  class="insidetwofile" action="cluster_op.php" method="post" enctype="multipart/form-data">
    Select FILES to upload : 
    <input type="file" name="UploadFiles" id="UploadFiles">
    <br><br>
    <input type="submit" name="submit" value="Upload">
    </form>
</div>

<div class="clearfix"></div>

</div>

<br>

<div class="urls">
    <h3 class="insidetwofile"><u>Text from URL's</u></h3>

    <form method="post" action="url.php">
        <div class="urldiv1">
            <textarea class="txt1" name="url1" placeholder="Enter URL(1)..."></textarea>
            <!-- <br> -->
        </div>
        <div class="urldiv2">
            <textarea class="txt1" name="url2" placeholder="Enter URL(2)..."></textarea>
            <!-- <br> -->
        </div><br><br>
        <input class="urlupload" type="submit" value="Upload" />  
    </form>
</div>

<br>

<div class="rawtext">
    <h3 class="insidetwofile"><u>Raw Text</u></h3>

    <form method="post" action="textbox.php">
        <div class="textdiv1">
            <!-- <form method="post" action="textbox.php"> -->
                <textarea class="txt1" name="textbox1" placeholder="Enter text..."></textarea>
                <!-- <br> -->
                <!-- <input type="submit" value="Upload" />   -->
            <!-- </form> -->
        </div>
        <div class="textdiv2">
           <!--  <form method="post" action="textbox.php"> -->
                <textarea class="txt1" name="textbox2" placeholder="Enter text..."></textarea>
                <!-- <br> -->
                <!-- <input type="submit" value="Upload" />   -->
            <!-- </form> -->
        </div>
        <input class="rawtextupload" type="submit" value="Upload" />  
    </form>
</div>