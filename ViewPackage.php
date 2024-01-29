
    <?php
    include_once 'headerManager.php'?>

    <body class="back">
    <div class="claimdetails">
    <center><h1><b>Policy</b></h1></center>

    <?php
    session_start();
    include_once 'DB.php';

    // Fetch customer details from the database
    $sql = "SELECT * FROM policy";
    $result = $connect->query($sql);

    if ($result && $result->num_rows > 0) {
        echo "<table class='table'>";
        echo "<tr> ";
        echo "<th>Policy ID</th>";
        echo "<th>Name</th>";
        echo "<th>Price</th>";
       
        echo "<th></th>";

        echo "</tr>";

        while ($row = $result->fetch_assoc()) {
            $pid= $row['policyID'];
            $name = $row['Pname'];
            $price = $row['price'];
        

           

            echo "<tr> ";
            echo "<td>$pid</td>";
            echo "<td>$name</td>";
            echo "<td>$price</td>";
        ?>
            <td><a href="updatepackage.php?pid=<?php echo $pid; ?>"><button class="crply" type="button" >Change</button></a></td>
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
    include_once 'footer.php'?>
</body>
</html>