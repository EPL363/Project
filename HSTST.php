<html>

<?php
        $chemicalName = check_input($_POST["chemical-Name"], "Enter your name");
        $chemicalCAS = check_input($_POST["chemical-CAS"]);
        $chemicalEINECS = check_input($_POST["chemical-EINECS"]);
        $chemicalIUPAC = check_input($_POST["chemical-IUPAC"]);
        $chemicalOtherName =check_input( $_POST["chemical-otherName"]);
        $chemicalWeight =check_input($_POST["chemical-weight"]);
        $chemicalCLP = check_input($_POST["chemical-CLP"]);
        $chemicalEnarmonismeni = check_input($_POST["chemical-enarmonismeni"]);
        ?>

        

        <?php
        function check_input($data, $problem='')
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            if ($problem && strlen($data) == 0)
            {
                die($problem);
            }
            return $data;
        }
?>
<script>
    window.history.back();

    </script>
</body>
</html>