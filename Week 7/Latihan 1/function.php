<?php
$conn = mysqli_connect("localhost","root","","carwash");

function query($query){
    global $conn;

    $hasil = mysqli_query($conn,$query);
    $rows = [];

    while($row = mysqli_fetch_assoc($hasil)){
        $rows [] = $row;

    }
    return $rows;
}
?>