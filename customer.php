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
<nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">CarRental</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Customer</a></li>
                <li><a href="carDetails.php">Car</a></li>
                <li><a href="rentalDetails.php">Rental</a></li>
                <li><a href="ownerDetails.php">Owners</a></li>
                <li><a href="updateRates.php">Update Rates</a></li>
            </ul>
        </div>
    </nav>
    <div class="container" style="margin-top:50px">
        <h2>Add new customer</h2>
        <form class="form-horizontal" action="addNewCustomer.php" method="post">
            <div class="form-group">
                <label class="control-label col-sm-2" for="name">Name:</label>
                <div class="col-sm-10">
                    <input type="name" class="form-control" id="name" placeholder="Enter name" name="name">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="name">Phone number:</label>
                <div class="col-sm-10">
                    <input type="phno" class="form-control" id="phno" placeholder="Enter phone number" name="phno">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="name">Customer type:</label>
                <div class="col-sm-10">
                    <select class="form-control" name="ctype">
                        <option>Individual</option>
                        <option>Buisness</option>
                    </select>
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