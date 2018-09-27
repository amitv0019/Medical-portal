<?php
    include('basic.php');

    $sql = "Select * From ashaworker ORDER BY A_EmployeeID";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        echo "<table border>
            <tr>
                <th> Employee ID </th>
                <th> Name </th>
                <th> Gender </th>
                <th> DOB </th>
                <th> AadharNumber</th>
                <th> Mobile </th>
                <th> Secondary Mobile </th>
                <th> - </th>
            </tr>
    ";

        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "
                  <tr>
                    <th> $row[A_EmployeeID] </th>
                    <td>". $row['A_Name'].    " </td>
                    <td>". $row['A_Gender'].  " </td>
                    <td>". $row['A_DOB'].  " </td>
                    <td>". $row['A_AadharNumber']. " </td>
                    <td>". $row['A_Mobile'].  " </td>
                    <td>". $row['A_Secondary_Mobile'].  " </td>
                    <td> <input type='button' value = 'delete' name = $row[A_ID] onclick='DeleteRow($row[A_ID])' ></td>
                </tr>
            ";
        }

        echo "</table>";
    } 
    
    else {
        echo "<H1>No Data Stored<H1>";
    }
?>

<html > <head> 

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type = "text/javascript"> 
			function DeleteRow(id)
			{ 
				$.ajax( {
						type : "POST",
						data :{row : id},
						url:  'ashaworker_files/delete_aw.php',
                        error: function ( row ) {
                            alert( "error"  );               // <=== VALUE RETURNED FROM FUNCTION.
                        },
                        success: function(data){
                            document.location.reload(true);
                        }
				});
			}
		</script></head> </html>