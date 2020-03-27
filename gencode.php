<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 

"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html 

xmlns="http://www.w3.org/1999/xhtml" xml:lang="ko" lang="ko">
<head>
<title>Cross-Browser 

QRCode generator for Javascript</title>
<meta http-equiv="Content-Type" content="text/html; 

charset=UTF-8" />
<meta name="viewport" content="width=device-width,initial-scale=1,user-

scalable=no" />
<script type="text/javascript" src="jquery.min.js"></script>
<script 

type="text/javascript" src="qrcode.js"></script>
</head>
<body>

<?php 
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

?>

<input id="text" type="hidden" value=<?php echo $url; ?> style="width:80%" /><br />

<div id="qrcode" style="width:100px; height:100px; margin-top:15px;"></div>


<script type="text/javascript">
var qrcode = new QRCode(document.getElementById("qrcode"), {
	width : (size),//300,
	height : (size) //300
});

function makeCode () {		
	var elText = document.getElementById("text");
	
	if (!elText.value) {
		alert("Input a text");
		

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