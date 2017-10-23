<style type="text/css">
    .textdiv1, .textdiv2{
        width: 47%;
        height: 350px;
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
    .rawtextupload{
        margin-left: 47%;
        text-align: center;
        vertical-align: middle;
        margin-top: 25px;   
    }
    .rawtext{
        margin-top: 50px;
        width: 96%;
        height : 500px;
        margin-left: auto;
        margin-right: auto;
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

</style>

<body>
    
    <div class="rawtext">
        <h3 class="insidetwofile"><u>Raw Text</u></h3>

        <form method="post" action="upload.php">
            <div class="textdiv1">
                <!-- <form method="post" action="textbox.php"> -->
                <textarea class="txt1" name="textbox1" placeholder="Enter text..."></textarea>
                  
            </div>
            <div class="textdiv2">
               <!--  <form method="post" action="textbox.php"> -->
                <textarea class="txt1" name="textbox2" placeholder="Enter text..."></textarea>
            </div>
            <input class="rawtextupload" type="submit" name="rawtextbtn" value="Upload" />  
        </form>
    </div>
</body>