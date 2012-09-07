<?php
$result =  str_replace("get_site_url(","elgg_get_site_url(",$_POST["code"]);
$result = str_replace("elgg_elgg_","elgg_",$result);
$result = str_replace("extend_view(","elgg_extend_view(", $result);
$result = str_replace("get_context(","elgg_get_context(", $result);
$result = stripslashes($result);
?>
<html>
<head>
<title>Elgg Code Updater</title>
</head>
<body>
<h5 style="color: red;">PLEASE DO NOT CLOSE OUT THIS WINDOW UNTIL THE CODE WAS TESTED.</H5>
<b>New code:</b>
<textarea style="width: 100%; height: 500px;" readonly>
<?php
echo $result;
?>
</textarea>
<b>Old code:</b>
<textarea style="width: 100%; height: 500px;" readonly>
<?php
echo stripslashes($_POST["code"]);
?>
</textarea>
</body>