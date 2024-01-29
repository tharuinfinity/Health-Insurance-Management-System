
<?php 
include_once 'headerManager.php';?>
    <body class="back">
    <div class="cusdetails">
    <center><h1><b>Customers Details</b></h1></center>
    
    <?php
    session_start();
    include_once 'DB.php';

    // Fetch customer details from the database
    $sql = "SELECT * FROM policyholder";
    $result = $connect->query($sql);

    if ($result && $result->num_rows > 0) {

        echo "<table class='table'>";
        echo "<tr> ";
        echo "<th>Policy Number</th>";
        echo "<th>Name</th>";
        echo "<th>Email</th>";
        echo "<th>NIC</th>";
        echo "<th>Phone number</th>";
        echo "<th>Address</th>";
        echo "<th>Date Of Birth</th>";
        echo "<th>Policy Type</th>";
        echo "<th></th>";

        echo "</tr>";

        while ($row = $result->fetch_assoc()) {
            $phid= $row['PHID'];
            $Fname = $row['Fname'];
            $Lname = $row['Lname'];
            $email = $row['email'];
            $NIC = $row['NIC'];
            $phn = $row['phone'];
            $address = $row['address'];
            $dob = $row['DOB'];
            $Policy = $row['policyID'];

            $_SESSION['phid'] = $phid;

            echo "<tr> ";
            echo "<td>$phid</td>";
            echo "<td>$Fname $Lname</td>";
            echo "<td>$email</td>";
            echo "<td>$NIC</td>";
            echo "<td>0$phn</td>";
            echo "<td>$address</td>";
            echo "<td>$dob</td>";
            echo "<td>$Policy</td>";

            
            
            ?>
            <td><a href="ProfileDelete.php"><button class="cdlt" type="button" onclick="">Delete</button></a></td>
            <?php
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "No customers found.";
    }
    
    mysqli_close($connect);
    ?></div>
    <?php
     include_once 'footer.php'
     ?>
</body>
</html>