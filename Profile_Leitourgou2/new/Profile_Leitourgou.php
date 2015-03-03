<?php 

    $db = 'teedb';
    $username = 'root';
    $password = '';

    // Create connection
    $conn = new mysqli('localhost', $username, $password, $db);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    echo "Connected successfully";
?>
<?php
    $sql = "SELECT Company_Name,Lequl_State,Address,PostCode,City,Telephone,Fax,Email,Info,Type,Person,Commersial_Name,Other_Name,CEO,Country FROM Company";
$result = $conn->query($sql);

?>


<html>
    <head>
        <link href="../media/css/jquery.dataTables.css" rel="stylesheet">
        <script src="../media/js/jquery.js"></script>
        <script src="../media/js/jquery.dataTables.js"></script>
        <style>
            tfoot input {
                    width: 100%;
                    padding: 3px;
                    box-sizing: border-box;
                }
        </style>
        <script>
            $(document).ready(function() {
    var t = $('#example').DataTable();
    var counter = 1;
 
    $('#addRow').on( 'click', function () {
        t.row.add( [
            counter +'.1',
            counter +'.2',
            counter +'.3',
            counter +'.4',
            counter +'.5'
        ] ).draw();
 
        counter++;
    } );
 
    // Automatically add a first row of data
    $('#addRow').click();
} );
        </script>
    </head>
<body>
 
    <table id="example" class="display" cellspacing="0" width="100%">
    <thead>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Extn.</th>
                    <th>Start date</th>
                    <th>Salary</th>
                </tr>
            </thead>
            
            <tfoot>
                
            </tfoot>
            
            <tbody>
                 <?php
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                ?>
                <tr>
                    <td><?php echo $row["Company_Name"]?></td>
                    <td><?php echo $row["Lequl_State"]?></td>
                    <td><?php echo $row["Address"]?></td>
                    <td><?php echo $row["PostCode"]?></td>
                    <td><?php echo $row["City"]?></td>
                    <td><?php echo $row["Telephone"]?></td>
                </tr>
                 <?php   
                      }
                } else {
                    echo "0 results";
                }
                 $conn->close();     


                ?>
            </tbody>
</table>
   

       
</div>  
</body>
</html>