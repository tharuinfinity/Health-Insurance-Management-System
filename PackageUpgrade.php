<?php 
include_once 'DB.php';
include_once 'header2.php';

$phid=$_SESSION['phid'];
$enrollPackage=$_GET['package'];

$sql0="SELECT policyID FROM policyholder WHERE PHID='$phid';";
$result0=$connect->query($sql0);

$row=$result0->fetch_assoc();

$currentPackage=$row['policyID'];



if($enrollPackage==$currentPackage){
    $message= "Already Selected";
}
else{
    $sql="UPDATE policyholder SET policyID='$enrollPackage' WHERE PHID='$phid';";
    $result=$connect->query($sql);
    $message= "Successfully Updated ";
}?>

<body class="back">
    <div style="  background-color: rgb(74, 71, 67);
                    display: block;
                    margin: auto;
                    box-sizing: border-box;
                    width:fit-content;
                    padding:30px;
                    margin-top: 50px;
                    margin-bottom: 150PX;
                    color: white;
                    font-family:'Noto Sans', sans-serif;
                    font-size:70px;
                    border-radius: 20px;
                    opacity: 0.8;">
                    <?php

                    echo $message;
                    ?>


    </div>
    
</body>

<?php

mysqli_close($connect);

?>