<?php
include_once "/opt/fpp/www/common.php"; //Alows use of FPP Functions

?>


<!DOCTYPE html>
<html>
<head>

</head>
<body>
<div class="pluginBody" style="margin-left: 1em;">
	<div class="title">
		<h1>Facebook Likes Fetcher Settings</h1>
		<h4></h4>
	</div>

	<!--p>Press F1 for setup instructions</p-->

<table cellspacing="5">


<tr>
	<th style="text-align: left">SmartApp Client ID</th>
<td>
<?
//function PrintSettingTextSaved($setting, $restart = 1, $reboot = 0, $maxlength = 32, $size = 32, $pluginName = "", $defaultValue = "", $callbackName = "", $changedFunction = "", $inputType = "text", $sData = Array())
	PrintSettingTextSaved("page_access_token", $restart = 0, $reboot = 0, $maxlength = 50, $size = 50, $pluginName = $pluginName, $defaultValue = "");
?>
</td>
</tr>


</table>


</body>
</html>