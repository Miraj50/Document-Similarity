<style type="text/css">
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
            <input class="urlupload" type="submit" name="urlsbtn" value="Upload" />  
        </form>
    </div>
</body>