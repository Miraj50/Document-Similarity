<style type="text/css">
    .insidetwofile{
        margin-left: 30px;
    }
    
    .mulfile{
        margin-top: 30px;
        width: 47%;
        height: 200px;
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
    <div class="mulfile">
        <h3  class="insidetwofile"><u>Upload Multiple Files (Zipped/Tarball)</u></h3>
        <form  class="insidetwofile" action="cluster_op.php" method="post" enctype="multipart/form-data">
        Select FILES to upload : 
        <input type="file" name="UploadFiles" id="UploadFiles">
        <br><br>
        <input type="submit" name="submit" value="Upload">
        </form>
    </div>
    
</body>