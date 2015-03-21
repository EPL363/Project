<?php 
        

$con =mysql_connect("localhost", "root", "");
            mysql_select_db("teedb");
            mysql_query ("set character_set_results='utf8'");

            if (!$con)
                echo "Cannot connect: ".mysql_error();
            else{
                mysql_select_db("root", $con);
                mysql_query ("set character_set_results='utf8'");
            
            }
        $user=htmlspecialchars($_GET["user"]);
        $sql1 = mysql_query("SELECT DISTINCT product.*  FROM `product`,`Users` Where Users.Username='".$user."' and Users.Company=Constructor",$con);
        $row1 = mysql_fetch_array($sql1);
            
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Αναζήτηση Χρήστη</title>
        
        <meta name="description" content="">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="author" content="">
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no">

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
            
                $i=1;
                while($row1) {
        ?>
        <tr id="row<?php echo $i?>" >
            <td id="c1" class="c1"><?php echo $row1["SavingDate"]?></td>
            <td id="c2"  class="c2"><?php echo $row1["Chemical_Name"]?></td>
            <td id="c3"  class="c3"><?php echo $row1["Constructor"]?></td>
                    <script>
                      tr = $('.display').find('tr');

                        tr.bind('click', function(event) {
                            date=$(this).find("td.c1").html();
                            name=$(this).find("td.c2").html();
                            company=$(this).find("td.c3").html();
                            window.location="apotelesmata/Apotelesmata2.php?date="+date+"&name="+name+"&company="+company;

                        });
                    </script>
        </tr>
        <?php 
               $i=$i+1; 
            $row1 = mysql_fetch_array($sql1);    
               
            }
              
        ?>
   </tbody>
</table>  
    </body>
</html>
