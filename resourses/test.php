<!DOCTYPE html>
<html>
<head></head>

<body>
<div id="container"></div>
<button type="button" id="add" onclick="addOption()">Add a statement</button>

<?php

$que = mysql_query("SELECT name FROM Statements") or die(mysql_error());

$script = "<script>function addOption(){";
$script .= "var container = document.getElementById('container');";
$script .= "var select = document.createElement('select');";
while($data = mysql_fetch_array($que)){
$script .= "var option = document.createElement('option');";
  $script .= "option.innerHTML = '$data[0]';";
  $script .= "select.appendChild(option);";
}
$script .= "container.appendChild(select);";
$script .= "}</script>";
echo $script;
?>



</body>

</html>
