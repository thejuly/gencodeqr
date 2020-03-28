<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 

"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html 

xmlns="http://www.w3.org/1999/xhtml" xml:lang="ko" lang="ko">
<head>
  <title>Cross-Browser QRCode generator for Javascript</title>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



  <script type="text/javascript" src="jquery.min.js"></script>
  <script type="text/javascript" src="qrcode.js"></script>
  
  <style type="text/css">
	#btn{
	width:100%;
	}
  </style>

</head>
<body>

<?php 
/*
$url = $_GET['url'];
$size = $_GET['size'];

if($url == ""){
	$url = "Data Undefined";
	echo $url."<br>";
}

if($size == ""){
	$size = 100;
	//echo $size."<br>";
}

echo '<script type="text/javascript">';
echo "var size = '$size';"; 
echo '</script>';
*/

?>

<div class="container" style="padding-top:10px">
    <h2>Generate QR Code</h2>
  	<p>Please Enter your data to generate QR Code:</p>
    <div class="col-md-4" style="background-color:#D6EAF8">
	<h3 align="center"> </h3>
      <form  name="form1" action="gencode1.php" method="POST" id="login" class="form-horizontal">
        <div class="form-group">
          <div class="col-sm-12">
           <input type="text" id="url" name="url" class="form-control" required placeholder="http://google.co.th" autocomplete="off"/>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
           <input type="number" name="size" class="form-control" min="50" max="300"required placeholder="50-300" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <button type="submit" class="btn btn-success" id="btn"> Create QR Code </button>
          </div>
        </div>
		
		<div class="form-group">
          <div class="col-sm-12">
			<input type="hidden" name="MM_insert" value="form1">
          </div>
        </div>
      </form>
	  </div>

<form  name="form2" class="form-horizontal">
        <div class="form-group">
        </div>
</form>

<?php 
$size = "300";
if ($_POST["MM_insert"] == "form1" && $_POST["url"] <> "" && $_POST["size"] <> "") {
	$url = $_POST["url"];
	$size = $_POST["size"];	
	
	echo "Your data: ".$url."<br>";
	echo "Your size: ".$size;
	
	echo '<script type="text/javascript">';
	echo "var size = '$size';"; 
	echo '</script>';
}
?>

<input id="text" type="hidden" value=<?php echo $url;?> style="width:80%" /><br />


<div id="qrcode" style="width:100px; height:100px; margin-top:15px;"></div>


<script type="text/javascript">
var qrcode = new QRCode(document.getElementById("qrcode"), {
	width : (size),//300,
	height : (size) //300
});

function makeCode () {		
	var elText = document.getElementById("text");
	
	if (!elText.value) {
		//alert("Input a text");
		

elText.focus();
		return;
	}
	
	qrcode.makeCode(elText.value);
}

makeCode

();

$("#text").
	on("blur", function () {
		makeCode();
	}).
	on

("keydown", function (e) {
		if (e.keyCode == 13) {
			makeCode

();
		}
	});
</script>
</body>