<?php
include_once 'headerManager.php'?>
<body class="back">
    
    <div class="cusdetails">
    <center><h1><b>Customers Complains & Feedback</b></h1></center>
    
    <?php
    session_start();
    include_once 'DB.php';

    // Fetch customer details from the database
    $sql = "SELECT * FROM complaints ";
    $result = $connect->query($sql);

    if ($result && $result->num_rows > 0) {

        echo "<table class='table'>";
        echo "<tr> ";
        echo "<th>Name</th>";
        echo "<th>ID</th>";
        echo "<th>Email</th>";
        echo "<th>Subject</th>";
       
        
        echo "<th></th>";

        echo "</tr>";

        while ($row = $result->fetch_assoc()) {
            $name= $row['Cname'];
            $ID = $row['PHID'];
            $email= $row['C_mail'];
            $sub = $row['Subject'];

            echo "<tr> ";
            echo "<td>$name</td>";
            echo "<td>$ID</td>";
            echo "<td>$email</td>";
            echo "<td>$sub</td>";

            ?>
            <td><a href="ComplainRead.php?phid=<?php echo $ID; ?>"><button class="cdlt" type="button" onclick="">check</button></a></td>
            <?php
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "No Data found.";
    }
    
    mysqli_close($connect);
    ?></div>
    <?php
     include_once 'footer.php'
     ?>
</body>
</html>