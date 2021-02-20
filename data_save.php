<?php
    include('conn.php');
    $sql = "insert into car_sale (car , price , model) value ('$_POST[car]',$_POST[price],'$_POST[body]')";
    $exeq = mysqli_query($conn , $sql);
    if($exeq) {
        echo "<meta http-equiv='refresh' content='1; url=querydatabase.php'>";
    }
    else {
        echo "insert error! : ".mysqli_error($conn);
    }

?>