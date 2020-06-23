<?php


$server = 'localhost';
$user = 'root';
$password = 'root';
$db = 'coronadb';

$con = mysqli_connect($server, $user, $password, $db);

if($con){
    ?>
    <script>
    alert("Connection successful")
    </script>
    <?php
    
}
?>