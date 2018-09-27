<?php
	include('basic.php'); 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Village</title>
	<style>
		form {
			width: 500px;
			margin: 0 auto;
		}
	</style>
		
    <? php include "imports.php" ; ?>
</head>
<body>
 <center>
  <form method="post" action='village_files/add_village.php'>
    <fieldset >
      <legend>Village</legend>
      <table >

		<tr>
			<td>Name of Village:</td>
			<td><input type=text name="name" maxlength=100 placeholder="e.g.-Raman Verma" size=40 pattern="[a-zA-Z0-9]+"></td>
		</tr>

		<tr>
			<td align="left">Village Code:</td>
			<td><input type="number" name="v_code" pattern="/d{11}" size=40 placeholder="only numbers" size=40 ></td>
		</tr>
		
		<tr>
			<td align="left">Village Pincode:</td>
			<td><input type="number" name="v_pincode" max="999999" size=40 placeholder="only numbers" size=40 pattern="[0-9]"></td>
		</tr>

		<tr>
			<td>Name of District:</td>
			<td><input type=text name="d_name" maxlength=100 placeholder="e.g.-Raman Verma" size=40 pattern="[a-zA-Z0-9]+"></td>
		</tr>
		
		<tr>
			<td>Name of State:</td>
			<td><input type=text name="s_name" maxlength=100 placeholder="e.g.-Raman Verma" size=40 pattern="[a-zA-Z0-9]+"></td>
		</tr>
		
		<tr>
			<td align="left">Total Population:</td>
			<td><input type="number" name="p_no" max="99999999999" size=40 placeholder="only numbers" size=40 pattern="[0-9]"></td>
		</tr>
		
	   </table>
		<center>
			<input type="Submit" name="submit" value="Submit" check>
			<input type="Reset" name="reset" value="Reset" check>    
		</center>
	</fieldset>

	<?php include( 'village_files/view_village table.php'); ?> 
   </form>

 <center>
</body>
</html>