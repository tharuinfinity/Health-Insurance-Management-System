<?php
include_once 'header3.php';
?>
    
    <link rel="stylesheet" href="styles/manager.css">

<body class="back">
    <div class="cusdetails">
    
    
    <?php
   
    include_once 'DB.php';

    $id=$_GET['phid'];
        echo"<center><h1><b>".$id."</b></h1></center>";
         // Fetch customer details from the database
    $sql = "SELECT * FROM complaints WHERE PHID='$id';";
        $result = $connect->query($sql);

  
        while ($row = $result->fetch_assoc()) {
           
            $sub = $row['Subject'];
            $message= $row['Message'];
        
            

            echo "<p class='aaa'> ";
           
            echo "$sub <hr><br>";
            echo "$message <br><br><br>";
 
            ?>
            <td><a href=""><button class="crply" type="button" onclick="">Reply</button></a>
            <a href="ComplainDelete.php?phid=<?php echo $id; ?>"><button class="cdlt" type="button" onclick="">Delete</button></a></td>
            <br><br><hr>
            <?php
            echo "</p>";
        }

        echo "</table>";
   
    
    mysqli_close($connect);
    ?></div>
    <?php
     include_once 'footer.php'
     ?>
</body>
</html>