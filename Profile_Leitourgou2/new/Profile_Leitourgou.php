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
   
?>
<?php
    $sql = "SELECT * FROM `product` ";
    $sql .="inner Join `Company`";
    $sql .="On product.Constructor = Company.Company_Name ";
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
            <th>Ημερομηνία Καταχώρησης</th>
            <th>Χειμικό Προιόν</th>
            <th>Προμηθευτής</th>
                    
        </tr>
    </thead>
    <tfoot>
    </tfoot>
    <tbody>
        <?php
            if ($result->num_rows > 0) {
            // output data of each row
                $i=1;
                while($row = $result->fetch_assoc()) {
        ?>
        <tr id="row<?php echo $i?>" >
            <td id="c1" class="c1"><?php echo $row["SavingDate"]?></td>
            <td id="c2"  class="c2"><?php echo $row["Chemical_Name"]?></td>
            <td id="c3"  class="c3"><?php echo $row["Constructor"]?></td>
                    <script>
                      tr = $('.display').find('tr');

                        tr.bind('click', function(event) {
                            date=$(this).find("td.c1").html();
                            name=$(this).find("td.c2").html();
                            company=$(this).find("td.c3").html();
                            window.location="Project/../apotelesmata/Apotelesmata2.php?date="+date+"&name="+name+"&company="+company;

                        });
                    </script>
        </tr>
        <?php 
               $i=$i+1; 
               }
            } 
            else {
                echo "0 results";
            }
            $conn->close();     
        ?>
   </tbody>
</table>       
</body>
</html>