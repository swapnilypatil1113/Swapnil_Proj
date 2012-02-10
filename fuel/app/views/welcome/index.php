<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Fuel PHP Framework</title>
	<style type="text/css">

		body { font-family: sans-serif; font-size: 11pt; font-weight: bold; color: #777777; line-height: 20px; margin: 40px; }

	</style>
</head>
<body>
 
<form action="<?=Uri::create('locations/locnnview');?>" name="lead_form" accept-charset="utf-8" method="post" onsubmit="return validateForm()" >
<table align="center" width="80%" cellpadding="5" style="background-color: #eee;">
<tr><td><br>
<table align="center" cellpadding="5">
	<tr>
		<td align="center" >Enter Business Details (chinese food)</td>
		<td align="center" ><input type="text" size="50" name="userip"></td>
	</tr>
</table>
</td></tr>
<tr><td>
<table align="center" cellpadding="5">	
	<tr>
		<td><INPUT TYPE="image" SRC="<?= Asset::find_file('submit.jpg','img')?>"/></td>
	</tr>
</table>
</td></tr></table>	

</body>
</form>
</html>