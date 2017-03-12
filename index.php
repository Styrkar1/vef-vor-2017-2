
<?php
$url = "http://apis.is/currency/m5";
$ch = curl_init();
// Disable SSL verification
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
// Will return the response, if false it print the response
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL,$url);
$result=curl_exec($ch);
curl_close($ch);


var_dump(json_decode($result, true));
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>;;OO</title>
</head>
<body>
<form action="save_json.php" method="post" id="picsform" enctype='application/json'>
  img name:<input type="text" name='pics[3][name]' id="imgname"><br>
  img path:<input type="text" name='pics[3][imgpath]' id="imgpath"><br>
  <button id="picsform" type="submit" value="Submit">Submit</button><br>
</form>
</ul>
</body>

</html>
