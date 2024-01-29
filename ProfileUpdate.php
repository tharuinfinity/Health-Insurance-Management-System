<?php
    session_start();
    include_once 'DB.php';
    
 
    $phn = $_POST['nPhnNO'];
    $email=$_POST['nemail'];
     $add = $_POST['naddress'];
     $Opass=$_POST['opsw'];
    $Npass=$_POST['npsw'];
    $con_Npass=$_POST['rnpsw'];

    
    $phID=$_SESSION['phid'];

    $password=$_SESSION['pass'];

    if($Opass==$password){
        if($Npass==$con_Npass){
        
            $sql ="UPDATE policyholder SET   phone='$phn',email='$email', address='$add',password='$Npass' WHERE PHID='$phID';";
            $result = $connect->query($sql);
            }
        else{
            echo "Repeated password incorrect";
        }
    } else{
        echo " password incorrect";

    }
        

        if($result){
            echo "updated Successfully";
            header('location:profile.php?updateprofile=success');
             
          }
          else{
            echo "Error";
          }
            
            ?>
            
            <?php
            echo "</tr>";

        
    mysqli_close($connect);
    ?>