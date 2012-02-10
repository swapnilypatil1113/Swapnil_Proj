<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Fuel PHP Framework</title>
	<style type="text/css">

		body { background-color: #ffffff; font-family: Georgia; font-size: 10pt; color: #777777; line-height: 20px; margin: 40px; }

	</style>
</head>
<body>
<table align="center" width="700" cellpadding="5">
	<tr>
		<td><?php //echo $username;
    error_reporting(NULL);
	foreach($username[results] as $key1=>$component){
	foreach($component as $key2=>$component1){
	    if($key2 == "name"){
	    	$businessnm = $component1;
	    }
	    if($key2 == "vicinity"){
	    	$businessaddr = $component1;
	    }
	}
	
echo "<table style=\"background-color: #ababab;\"><tr><td>";
echo "<table width=\"500\">";
echo "<tr><td>".$businessnm."</td>";
echo "</tr></table>";
echo "</td></tr>";
echo "<tr><td>";
echo "<table width=\"500\" style=\"background-color: #ffffff;\">";
echo "<tr><td>".$businessaddr."</td>";
echo "</tr></table>";
echo "</td></tr>";
echo "</table>";
echo "<br><br>";
}	
     		
		?></td>
	</tr>

</table>
	
</body>
</html>