
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="./styles/ViewContactstyle.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
        
    <title>Contacts</title>
</head>
<body>
<?php
include 'header.php'
?>
    <div class="container">
        <div class="row block1">
            <div class="col-xs-8 col-xs-offset-2 block2">
                <div class="row">
                    <h3>Contacts</h3>
                </div>
            <div class="row">
                    <div class="form-group">
                           <input type="text" 
                                placeholder="Search"
                                id="search"
                                class="form-control"   
                                onkeyup="search()">
                    </div>
                    
                    <div class="block" style="margin:20px"></div>
            </div>
            <div class="row">
                    <div class="wrapper">
                        
                    </div>
            </div>
            <div class="row">
                <a href="AddContact.php">
                    <span class="fa fa-plus" style="float:right;font-size:20px;color:black"></span>
                </a>
            </div>
            </div>
        </div>
    </div>
</body>
<script src="viewcontactscript.js"></script>
</html>