<?php
    //Nguyễn Tuấn Dũng
    $connect = mysqli_connect('localhost','root','','cakelibrary');
    if ($connect){
        mysqli_query($connect , "SET NAMES 'UTF8'");
    }else{
        echo "Kết nối thất bại.";
    }
?>