<style type="text/css">
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
        -webkit-transition-duration: 0.4s; /* Safari */
        transition-duration: 0.4s;
        cursor: pointer;
    }
    input[type=submit]:hover {
        background-color: white;
        color: black;
    }
    body{
        /*margin-left: auto;
        margin-right: auto;*/
    }
</style>

<body>

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
                <br>
                <input class="twofileupload" type="submit" name="twofilebtn" value="Upload">
                
            </form>
        </div>
    </div>
</body>