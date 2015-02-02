<?php
include("connection.php");
$_mysql = "SELECT * FROM secret_friend.friends_data order by Name";
$result = $mysqli->query($_mysql);
?>


<!DOCTYPE html>
<head>
    <title>"Friend's List"</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="all"/>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="all"/>

    <link href="css/style.css" rel="stylesheet" media="all"/>
</head>
<body>
<div class="container-fluid" id="main">
    <div id="container-chart">
        <h1 class="col-xs-12 col-sm-8 col-sm-offset-2">Friend's List</h1>
    </div>

    <div class="row col-xs-12 col-sm-offset-2">
        <table class="table table-responsive">
            <thead>
            <th>Name</th>
            <th>E-mail</th>
            <th>Phone</th>
            </thead>
            <?php
            while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                $_name = $row['Name'];
                $_email = $row['Email'];
                $_phone = $row['Phone'];
                echo "
                    <tbody>
                          <tr>
                          <td>$_name</td>
                          <td>$_email</td>
                          <td>$_phone</td>
                          </tr>
                    </tbody>";
            }
            ?>
        </table>
    </div>
    <button class="btn btn-group">Create</button>
</div>
</body>
</hmtl>

