<!--PHP Script for Clustering ... calls clustermaster.py which returns list of clusters-->
<!--These are then parsed into an array which is displayed as HTML Panels-->


<html>
<head>
<title>Gruppe - Clusters Found</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
</head>
<body>
<div class="container-fluid">
<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-8">
<h1>Gruppe! </h1>
<br>
  <div class="btn-group">
    <button type="button" class="btn btn-default">Home</button>
    <div class="btn-group">
      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
      Options<span class="caret"></span></button>
      <ul class="dropdown-menu" role="menu">
        <li><a href="#">2 Document Similarity</a></li>
        <li><a href="#">Clustering</a></li>
      </ul>
    </div>
    <button type="button" class="btn btn-default">Back</button>
  </div>
</div>
<div class="col-sm-2"></div>
</div></div>
<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-8">
<br>
<h3>Document Clustering</h3>
<br>
<div class="alert alert-success">
  <strong>Success</strong>... the results are out!
</div>
</div>
<div class="col-sm-2"></div>
</div></div>
<br>
<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-8">
<p>The set of documents uploaded by you have been clustered as follows.</p>
<?php
$op = shell_exec(escapeshellcmd("/usr/bin/python /var/www/test.py"));
$arr = json_decode($op);
//var_dump($arr);
//$leng = count($arr)
$file = fopen("./reports/report.txt", "w");
echo '<div class="panel-group">';
foreach($arr as $key=>$docs){
	echo '<div class="panel panel-default"><div class="panel-heading">Cluster ' . $key . '</div><div class="panel-body">';
  fwrite($file, "Cluster" . $key . "\n");
  foreach($docs as $num=>$item){
    echo $item . '; ';
    fwrite($file, $item . " ");
  }
  fwrite($file, "\n\n");
  echo '</div></div>';
}
echo '</div>';
?>
</div>
<div class="col-sm-2" style="background-color:white"></div>
</div></div>

<div class="row">
  <div class="col-sm-2"></div>
  <div class="col-sm-8">
    <a href="./reports/report.txt" download><button type="button" class="btn btn-primary">Download Report</button></a>
  </div>
<div class="col-sm-2"></div>
</div>
</body>
</html>
