<?php
    include('config.php');

    if(isset($_POST['submit'])){
        $carname = $_POST['carname'];
        $cusid = $_POST['cusid'];
        $renttype = $_POST['renttype'];
        $nodays = $_POST['nodays'];
        $noweek = $_POST['noweek'];
        $stdate = $_POST['stdate'];
        $data1 = array();

        if ($renttype == 'DAILY'){
            $days = $nodays;
            $datetime = new DateTime($stdate);
            $datetime->add(new DateInterval('P' . $days . 'D'));
            $end_date = $datetime->format('Y-m-d');
            $sqlquery1 = "SELECT dailyRate from car_type inner join car on car.vehicleID=car_type.vehicleID where model='$carname';";
            $result1 = mysqli_query($conn, $sqlquery1);

            while ($row = mysqli_fetch_row($result1)) {
                $data1[] = $row[0];
            }

            $rate = $data1[0]*$days;
            $noweek = 0;
        }
        elseif ($renttype == 'WEEKLY') {
            $days = $noweek * 7;
            $datetime = new DateTime($stdate);
            $datetime->add(new DateInterval('P' . $days . 'D'));
            $end_date = $datetime->format('Y-m-d');
            $sqlquery1 = "SELECT weeklyRate from car_type inner join car on car.vehicleID=car_type.vehicleID where model='$carname';";
            $result1 = mysqli_query($conn, $sqlquery1);

            while ($row = mysqli_fetch_row($result1)) {
                $data1[] = $row[0];
            }

            $rate = $data1[0]*$noweek;
            $nodays = 0;
        }

        $sqlquery = "SELECT vehicleID from car where model='$carname'";
        $result = mysqli_query($conn, $sqlquery);

        // Store the results in an array
        $data = array();
        while ($row = mysqli_fetch_row($result)) {
            $data[] = $row[0];
        }

        $car_id = $data[0];
    

        $sqlquery2 = "INSERT INTO RENTAL(carId,customerId,rentalStatus,rentalType,noOfDays,noOfWeeks,startDate,returnDate,amountDue) VALUES($car_id,$cusid,'ACTIVE','$renttype',$nodays,$noweek,'$stdate','$end_date',$rate);";
        if (mysqli_query($conn, $sqlquery2)) {
                header('Location: renatDetails.php');
        }
        else {
            echo "Error: " . $sqlquery . "<br>" . mysqli_error($conn);
        }
    }
    mysqli_close($conn);
?>