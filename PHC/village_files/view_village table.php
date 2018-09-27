<?php
    include('basic.php');

    $sql = "Select * From village ORDER BY V_CODE";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        echo "<table class = 'table table-striped' >
            <tr>
                <th> Village Code </th>
                <th> Village Pincode</th>
                <th> Village Name </th>
                <th> Village Population</th>
                <th> - </th>
            </tr>
    ";

        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "
                  <tr>
                    <td> $row[V_CODE] </td>
                    <td>". $row['V_PINCODE']. " </td>
                    <td>". $row['V_NAME'].    " </td>
                    <td>". $row['V_POPULATION'].  " </td>
                    <td> <input type='button' value = 'Delete' name = $row[V_ID] onclick='DeleteRow($row[V_ID])' class ='btn btn-danger btn-sm' ></td>
                </tr>
            ";
        }

        echo "</table>";
    } 
    
    else {
        echo "<H1>No Data Stored<H1>";
    }
?>

<html > <head> <script type = "text/javascript"> 
			function DeleteRow(id)
			{ 
				$.ajax( {
						type : "POST",
						data :{row : id},
						url:  'village_files/delete_village.php',
                        error: function ( row ) {
                            alert( "error"  );               // <=== VALUE RETURNED FROM FUNCTION.
                        },
                        success: function(data){
                            document.location.reload(true);
                        }
				});
			}
		</script></head> </html>