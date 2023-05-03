<?php
    include('config.php');

    if(isset($_POST['submit'])){
        $cname = $_POST['name'];
        $phno = $_POST['phno'];
        $type = $_POST['ctype'];

        $sqlquery = "INSERT INTO CUSTOMER (name, phoneNo, cType) VALUES ('$cname','$phno','$type')";

        echo $sqlquery;

        if (mysqli_query($conn, $sqlquery)) {
            echo "New record created successfully";
            header('Location: index.php');
        } else {
            echo "Error: " . $sqlquery . "<br>" . mysqli_error($conn);
        }
    }
    mysqli_close($conn);
?>