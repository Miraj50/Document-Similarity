<style type="text/css">
    .urlupload{
        margin-left: 47%;
        margin-top: 10px; 
    }
    .urldiv1{
        width: 90%;
        height: 30px;
        margin-left: 0px;
        /*border: 2px solid blue;*/
        float: left;
        /*margin-left: 50px;*/
        box-shadow: 5px 5px 5px grey;
    }
    .txt1:focus{
        border: 3px solid #555;
    }
    input[type=url]{
        /*font-size: 15px;*/
        width: 100%;
        height: 100%;
        resize: none;
    }
    .insidetwofile{
        margin-left: 30px;
    }
    
    .twofile{
        margin-top: 30px;
        width: 47%;
        height: 230px;
        /*margin-left: 30px;*/
        margin-left: auto;
        margin-right: auto;
        /*border: 1px solid blue;*/
        /*float: left;*/
        border-bottom-style: solid;
        border-left-style: solid;
        border-top-style: dotted;
        box-shadow: 10px 10px 5px grey;
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
        -webkit-transition-duration: 0.4s;
        transition-duration: 0.4s;
        cursor: pointer;
    }
    input[type=submit]:hover {
        background-color: white;
        color: black;
    }

</style>

<body>

    <div class="twofile">
        <h3  class="insidetwofile"><u>Upload One File and type a URL</u></h3>
        <div  class="insidetwofile">
            <form action="upload.php" method="post" enctype="multipart/form-data">
                <div>
                    Select FILE to upload : 
                    <input type="file" name="UploadFileName1" id="UploadFileName1">
                </div>
                <br>
                <div class="urldiv1">
                    <input type="url" class="txt1" name="url1" placeholder="Enter URL...">
                </div>
                <br><br><br>
                <input class="twofileupload" type="submit" name="fileurlbtn" value="Upload">
                
            </form>
        </div>
    </div>
</body>