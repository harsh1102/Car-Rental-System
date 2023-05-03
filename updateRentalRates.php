<?php
    include('config.php');

    if(isset($_POST['submit'])){
        $cartype = $_POST['cartype'];
        $dr = $_POST['dr'];
        $wr = $_POST['wr'];
        $ccat = $_POST['ccat'];
        echo $cartype, $ccat;

        if (!(empty($_POST['dr']))){
            $sqlquery = "UPDATE CAR_TYPE SET dailyRate='$dr' WHERE Ctype = '$cartype' AND category = '$ccat';";
        }   
        elseif (!(empty($_POST['wr']))){
            $sqlquery = "UPDATE CAR_TYPE SET weeklyRate='$wr' WHERE Ctype='$cartype' AND category='$ccat';";
        }

        if (mysqli_query($conn, $sqlquery)) {
            header('Location: carDetails.php');
        } else {
            echo "Error: " . $sqlquery . "<br>" . mysqli_error($conn);
        }
    }
    mysqli_close($conn);
?>