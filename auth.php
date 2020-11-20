<?php
include_once "/opt/fpp/www/common.php"; //Alows use of FPP Functions

$message ="";
if ($_GET["page_access_token"]){
    $message = "a page access token was provided!";
}

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

<?
if (strlen($message) > 0){
    echo "<div>" . $message . "</div>";
}
?>

<form action="auth.php" method="get">
<table cellspacing="5">


<tr>
	<th style="text-align: left">Page Access Token</th>
<td>
<input type="text" name="page_access_token" />
</td>
</tr>

<tr>

<td> </td>
<td>
<input type="submit">
</td>

</table>
</form>

</body>
</html>