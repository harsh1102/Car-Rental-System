<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="main.css" type="text/css">
    <script type="text/javascript" src="main.js"></script>

</head>
<body style="height:1500px">
    <?php
        include('config.php');
    ?>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">CarRental</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="index.php">Customer</a></li>
                <li><a href="carDetails.php">Car</a></li>
                <li class="active"><a href="rentalDetails.php">Rental</a></li>
                <li><a href="ownerDetails.php">Owners</a></li>
                <li><a href="updateRates.php">Update Rates</a></li>
            </ul>
        </div>
    </nav>  
    <div class="container" style="margin-top:50px">
        <h2>Add new Rental information</h2>
        <form class="form-horizontal" action="addNewRental.php" method="post">
        <div class="form-group">
                <label class="control-label col-sm-2" for="carname">Car name:</label>
                <div class="col-sm-10">
                    <select class="form-control" name="carname">
                    <?php
                        $sql = "select DISTINCT model from CAR as c inner join RENTAL as r on c.vehicleID=r.carId and r.rentalStatus='ACTIVE'";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                        ?>
                        <option><?php echo $row['model']; ?></option>
                        <?php
                        }
                    }
                    ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="cusid">customer ID:</label>
                <div class="col-sm-10">
                    <input type="cusid" class="form-control" id="cusid" placeholder="Enter customer id" name="cusid">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="renttype">Rental Type:</label>
                <div class="col-sm-10">
                    <select class="form-control" name="renttype">
                        <option>DAILY</option>
                        <option>WEEKLY</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="nodays">No of days:</label>
                <div class="col-sm-10">
                    <select class="form-control" name="nodays">
                        <option>0</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="noweek">No of weeks:</label>
                <div class="col-sm-10">
                    <input type="noweek" class="form-control" id="noweek" placeholder="Enter number of weeks" name="noweek">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="stdate">Start Date:</label>
                <div class="col-sm-10">
                    <input type="stdate" class="form-control" id="stdate" placeholder="Enter Start date" name="stdate">
                </div>
            </div>
            <div class="form-group">        
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default" name="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>

</body>
</html>

</body>