<!DOCTYPE html>
<html>
<head>
	<title>Adding Asha Workere</title>
	<style>
		form {
			width: 500px;
			margin: 0 auto;
		}
	</style>
</head>
<body>
 <center>
  <form method="post" action ="ashaworker_files/add_aw.php">
    <fieldset >
      <legend>Asha Worker</legend>
      <table >

		<tr>
			<td>Name of Asha Worker:</td>
			<td><input type=text name="name" maxlength=100 placeholder="e.g.-Raman Verma" size=40 pattern="[a-zA-Z0-9]+"></td>
		</tr>

		<tr>
			<td>Employee Code:</td>
			<td><input type='number' name="ecode" pattern='/d{4}' placeholder="Employee Code" size=40 ></td>
		</tr>
		
		<tr>
			<td align="left">Aadhar number:</td>
			<td><input type="number" name="a_no" max="999999999999" size=40 placeholder="only numbers" size=40 pattern="[0-9]"></td>
		</tr>
		
		<tr>
			<td>Date of Birth(D.O.B)</td>

			<td><input type=Date name="date" > </td>
		</tr>

		<tr>
			<td align="left">Gender:</td>
			<td> 
					Male			

				<input type="radio" name="sex" value="2" check>
					Female
				
				<input type="radio" name="sex" value="3" check>
					Other
			</td>
		</tr>
		
		<tr>
			<td align="left">Contact Number:</td>
			<td><input type="number" name="c_no" max="9999999999" size=40 placeholder="only numbers" size=40 pattern="[0-9]"></td>
		</tr>

		<tr>
			<td align="left">Secondary Contact Number:</td>
			<td><input type="number" name="sc_no" size=40 placeholder="only numbers" size=40 pattern="/d{10}"></td>
		</tr>
		
		<tr>
			<td>Upload Picture:</td>
			<td>
				<h1 file upload ></h1>
				<form method="post" enctype="mutlipart/form-data">
				<input type=file name="file.jpg" >
			</td>
		</tr>
	   </table>
		<center>
			<input type="Submit" name="submit" value="Submit" check>
			<input type="Reset" name="reset" value="Reset" check>    
		</center>
	</fieldset>
   </form>

   <?php include('ashaworker_files/view_aw_table.php'); ?>
 <center>
</body>
</html>