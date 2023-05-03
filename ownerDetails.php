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
                <li><a href="rentalDetails.php">Rental</a></li>
                <li class="active"><a href="ownerDetails.php">Owners</a></li>
                <li><a href="updateRates.php">Update Rates</a></li>
            </ul>
        </div>
    </nav> 
    <div class="container" style="margin-top:50px">
        <div style="display:flex; align-items:center;">
            <h2 style="margin-right:75%;">Owners</h2>
        </div>
        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
        <table id="myTable">
                    <tr class="header">
                        <th style="width:16%;">ID</th>
                        <th style="width:16%;">Name</th>
                        <th style="width:16%;">Bank Name</th>
                        <th style="width:16%;">Company Name</th>
                        <th style="width:16%;">Owner Type</th>
                        <th style="width:16%;">Phone Number</th>
                    </tr>
                    <?php
                        $sql = "select DISTINCT o.ownerId, o.name, b.phoneNo, Bankname,Companyname,oType from owner as o inner join bank as b inner join INDIVIDUAL as i inner join RENTAL_COMPANY ";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                        ?>
                        <tr>
                            <td><?php echo $row["ownerId"]; ?></td>
                            <td><?php echo $row["name"]; ?></td>
                            <td><?php echo $row["Bankname"]; ?></td>
                            <td><?php echo $row["Companyname"]; ?></td>
                            <td><?php echo $row["oType"]; ?></td>
                            <td><?php echo $row["phoneNo"]; ?></td>
                        </tr>
            <?php
            }
        }
        ?>
         </table>
    </div>

</body>
</html>

</body>