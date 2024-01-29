<html>

    <link rel="stylesheet" href="styles/manager.css">
    <title>Safety-First Insurance</title>

    <?php
     include_once 'header.php'
     ?>
<body>
    
    <div class="cusdetails">

    <?php
    session_start();
    include_once 'DB.php';

    $CID=$_GET['cid'];
        echo"<center><h1><b>".$_SESSION['cpid']."</b></h1></center>";
         // Fetch customer details from the database
    $sql = "SELECT * FROM claim WHERE claimID='$CID';";
        $result = $connect->query($sql);
       
        echo "<table class='table'>";
        echo "<tr> ";
        echo "<th>Bank Name</th>";
        echo "<th>Branch Name</th>";
        echo "<th>Branch Number</th>";
        echo "<th>Account Number</th>"; 
        echo "<th>Account Type</th>";
        echo "</tr>";

        $row = $result->fetch_assoc();
           
            $bname = $row['bank_name'];
            $brname= $row['branch_name'];
            $brno = $row['branch_no'];
            $accno= $row['Account_no'];
            $acctype= $row['acc_type'];

            echo "<tr> ";
            echo "<td>$bname</td>";
            echo "<td>$brname</td>";
            echo "<td>0$brno</td>";
            echo "<td>$accno</td>";
            echo "<td>$acctype</td>";
          ?>
            <td><a href="ABC.php?phid=<?php echo $phid?>"><button class="crply" type="button" onclick="">Pay</button></a>
            </td>
            <br><br><hr>
            <?php
            echo "</p>";
        

        echo "</table>";
   
    
    mysqli_close($connect);
    ?></div>
    <?php
     include_once 'footer.php'
     ?>
</body>
</html>