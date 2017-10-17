<html>
<head>
<title>Gruppe - Similarities Found</title>
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
        <li><a href="#">Tablet</a></li>
        <li><a href="#">Smartphone</a></li>
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
<h3>Two Document Similarity</h3>
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
<?php
$op = shell_exec(escapeshellcmd("/usr/bin/python /var/www/test.py"));
$arr = json_decode($op);
//var_dump($arr);
$file = fopen("./reports/report_twodoc.txt", "w");
fwrite($file, "Blocks of similar text: \n\n");
echo '<div class="table-responsive"><table class="table">';
echo '<thead><tr><th>' . $arr[1] . '</th><th>' . $arr[2] . '</th></tr></thead><tbody>';
if ($arr[0] == 0) {
  $part = "In Paragraph/Section: ";
}
elseif ($arr[0] == 1) {
  $part = "On Line: "
}
foreach(array_slice($arr, 3) as $key=>$para){
	$one = explode('^', $para[1]);
	$two = explode('^', $para[3]);
	echo '<tr><td><div class="panel panel-default">';
	fwrite($file, $key . ".\n");
  echo '<div class="panel-heading">' . $part . $para[0] . '</div><div class="panel-body">' . $one[0] . '<mark>' . $one[1] . '</mark>' . $one[2] . '</div>'; 
  fwrite($file, $part . $para[0] ."\n". $para[1] . "\n\n");
  echo '</div></td><td><div class="panel panel-default">';
	echo '<div class="panel-heading">' . $part . $para[2] . '</div><div class="panel-body">' . $two[0] . '<mark>' . $two[1] . '</mark>' . $two[2] . '</div>';
	fwrite($file, $part . $para[2] ."\n". $para[3] . "\n\n\n");
  echo '</div></td></tr>';
}
echo '</tbody></table></div>';
?>
</div>
<div class="col-sm-2" style="background-color:white"></div>
</div></div>
<div class="row">
  <div class="col-sm-2"></div>
  <div class="col-sm-8">
    <a href="./reports/report_twodoc.txt" download><button type="button" class="btn btn-primary">Download Report</button></a>
  </div>
<div class="col-sm-2"></div>
</div>
</body>
</html>
