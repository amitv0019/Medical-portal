<?php
    include('basic.php');

    $sql = "Select * From person ORDER BY P_AadharNumber";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        echo "<table border>
            <tr>
                <th> AadharNumber</th>
                <th> Name </th>
                <th> Gender </th>
                <th> DOB </th>
                <th> Mobile </th>
                <th> Address </th>
                <th> -</th>
            </tr>
    ";

        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "
                  <tr>
                    <td>". $row['P_AadharNumber']. " </td>
                    <td>". $row['P_Name'].    " </td>
                    <td>". $row['P_Gender'].  " </td>
                    <td>". $row['P_DOB'].  " </td>
                    <td>". $row['P_Mobile'].  " </td>
                    <td>". $row['P_Address'].  " </td>
                    <td> <input type='button' value = 'delete' name = $row[P_ID] onclick='DeleteRow($row[P_ID])' ></td>
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
						url:  'person_files/delete_person.php',
                        error: function ( row ) {
                            alert( "error"  );               // <=== VALUE RETURNED FROM FUNCTION.
                        },
                        success: function(data){
                            document.location.reload(true);
                        }
				});
			}
		</script></head> </html>