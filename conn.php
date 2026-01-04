<?php
$username="root";
$password="";
$server="localhost";
$database="admission_db";

$conn= mysqli_connect($server, $username, $password, $database);

if($conn){
    ?>
    <script>
        // alert('connection is successfully');
    </script>
    <?php
}
else{
    ?>
    <script>
        alert('connection is not sucessfully')
    </script>
    <?php
}
?>