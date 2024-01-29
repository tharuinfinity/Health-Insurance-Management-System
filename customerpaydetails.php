<?php
include_once 'header2.php';

            
$phid=$_SESSION['phid'];
?>
<html>
<link rel="stylesheet" href="styles/monthlypay.css">

    <body class="back"><div class="border">
        <center><h1><b>Customer Payment Details > <?php echo $phid ?></b></h1></center>
        <table class="paytable">
            <tr>
                <th>Year</th>
                <th>January</th>
                <th>February</th>
                <th>March</th>
                <th>April</th>
                <th>May</th>
                <th>June</th>
                <th>July</th>
                <th>August</th>
                <th>September</th>
                <th>October</th>
                <th>November</th>
                <th>December</th>
            </tr>
            
            <?php
            include_once 'DB.php';
         
            $sql="SELECT * FROM payment WHERE PHID='$phid';";
            $result=$connect->query($sql);
        
            $row=$result->fetch_assoc();
        
            $month=$row['payDate'];
        

            $year = 2023;
            
            
            echo "<tr>";
            echo "<td>$year</td>";
            
            for ($i = 1; $i <= 12; $i++) {
                if ($i == $month) {
                    echo "<td style='background-color:rgb(6, 163, 48);color:black'>Paid</td>";
                } else {
                    echo "<td></td>";
                }
            }
            
            echo "</tr>";
            ?>
            
        </table>
</div>
    </body>
</html>