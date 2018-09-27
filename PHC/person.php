<!DOCTYPE html>
<html>
<head>
	<title>Adding people</title>
	<style>
		form {
			width: 500px;
			margin: 0 auto;
		}
	</style>
</head>
<body>
 <center>
  <form method="post" action = "person_files/add_person.php">
    <fieldset >
      <legend>People</legend>
      <table >

		<tr>
			<td>Name:</td>
			<td><input type=text name="name" maxlength=100 placeholder="e.g.-Raman Verma" size=40 pattern="[a-zA-Z]+" required ></td>
		</tr>
		
		<tr>
			<td align="left">Aadhar number:</td>
			<td><input type="number" name="a_no" max="999999999999"  size=40 placeholder="only numbers" size=40 pattern="\d{4}" required></td>
		</tr>
		
		<tr>
			<td align="left">Gender:</td>
			<td> 
				<input type="radio" name="sex" value="1" check>
					Male			

				<input type="radio" name="sex" value="2" check>
					Female
				
				<input type="radio" name="sex" value="3" check>
					Other
			</td>
		</tr>
		
		<tr>
			<td>Date of Birth(D.O.B)</td>

			<td><input type=Date name="date" required> </td>
		</tr>
		
		<tr>
			<td align="left">Village CODE:</td>
			<td><input type="number" name="v_code" max="99999999999" size=40 placeholder="Unique Village Code" size=40 pattern="[0-9]" required></td>
		</tr>
		
		<tr>
			<td>Address:</td>
			<td><input type=text name="address" maxlength=100 placeholder="e.g.-Lane-5,House no. 4,Nehru Coluny." size=40 required></td>
		</tr>
		
		<tr>
			<td align="left">Contact Number:</td>
			<td><input type="number" name="c_no" max="9999999999" size=40 placeholder="only numbers" size=40 pattern="[0-9]" required></td>
		</tr>
		
	   </table>
		<center>
			<input type="Submit" name="submit" value="Submit" check>
			<input type="Reset" name="reset" value="Reset" check>    
		</center>
	</fieldset>
   </form>

   <?php include('person_files/view_person_table.php'); ?>
 <center>
</body>
</html>