<html>
    
    
    <?php include_once 'headerManager.php'?>
<body>
<?php
    // Turn off error reporting
    error_reporting(0);
    ?>
    <form class="fbk" method="post">
        <?php
        session_start();
        include_once 'DB.php';

        $price = $_POST['chgprice'];
        $Pid = $_GET['pid'];
        $pNameQuery = "SELECT Pname FROM policy WHERE policyID='$Pid';";
        $r = $connect->query($pNameQuery);

        $row = $r->fetch_assoc();
        $pName = $row['Pname'];
        echo "<h1><b>Policy > Change policy price > $pName</b></h1>";
        ?>
        
        <input class="pricetxt" type="text" name="chgprice" placeholder="Enter New Price"><br><br>
        
        
     <input class="priceup" type="submit" name="feedbacksub" value="Update"><br><br>
        

    </form>

    <?php
    if ($price) {
        $sql = "UPDATE policy SET price='$price' WHERE policyID='$Pid';";
        $result = $connect->query($sql);
    }

    $result = $connect->query($sql);

    if ($result) {
        echo "<div class='success'><center>Updated Successfully !</center></div>";
    } else {
        echo "Error";
    }
    ?>

    <?php
   
    mysqli_close($connect);?>
</body>

</html>