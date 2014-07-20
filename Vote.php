<?php
$vote = $_POST["votes"];

$con=mysqli_connect("sql4.freesqldatabase.com:3306","sql434134","bY2%tL9%","sql434134");
if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
else{
    $result = mysqli_query($con,"SELECT FROM '$votename' WHERE selection = $");
    
}
?>