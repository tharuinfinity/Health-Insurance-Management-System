<?php
include_once 'header3.php';

$CID=$_GET['cid'];       

?>
<html>
<link rel="stylesheet" href="styles/monthlypay.css">

    <body class="back"><div class="border">
        <center><h1><b>Customer Payment Details ></b></h1></center>
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
         
            $sql0="SELECT * FROM claim WHERE claimID='$CID';";
            $result0=$connect->query($sql0);

            $row0=$result0->fetch_assoc();
        
            $phid=$row0['PHID'];

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
        <br>
        <center><a href="claimDelete.php?cid=<?php echo $CID?>"><button class="cfc">Delete</button></a>
        <a href="ClaimBank.php?cid=<?php echo $CID?>"><button class="cfc">Accept</button></a></center>
</div>
    </body>
</html>