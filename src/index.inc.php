<?php

include("connection.php");

?>

<!DOCTYPE html>
<html>
<head>
    <title>"Secret friend"</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="all"/>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="all"/>

    <link href="css/style.css" rel="stylesheet" media="all"/>
</head>

<body>
<div>
    <div class="container-fluid" id="main">
        <div class="row">
            <h1 class="col-xs-12 col-sm-8 col-sm-offset-2">Secret Friend </h1>
        </div>
        <div class="row" id="addFriend">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                <form class="form-horizontal" method="POST" target="_self" action="add.inc.php">
                    <div class="form-group has-feedback" c>
                        <label class="control-label">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="name or nickname"
                               maxlength="96">
                        </br>
                    </div>
                    <div class="form-group has-feedback">
                        <label class="control-label">E-mail</label>
                        <input type="text" name="email" class="form-control" placeholder="email">
                        </br>
                    </div>
                    <div class="form-group has-feedback">
                        <label class="control-label">Phone</label>
                        <input type="text" name="phone" class="form-control" placeholder="phone">
                        </br>
                    </div>
                    <button type="submit" id="add" class="btn btn-group">Add more friends</button>
                </form>
                <button class="btn btn-group"><a href="/list.inc.php" rel="alternate"/>Upload</a></button>
            </div>
        </div>
    </div>
</div>
</body>


