<!DOCTYPE html>
<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="./styles/AddContactstyle.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
    <title>Edit Contact</title>
</head>
<?php
    include './scripts/common.php';
    $id=$_GET["id"];
    $query="select * from users where id='$id'";
    $result=mysqli_query($con,$query)or die(mysqli_error($con));
    $data=mysqli_fetch_assoc($result);
    ?>
<body>
<?php
    include 'header.php'
    ?>
    <div class="container">
        <div class="row block1">
                
            <div class="col-md-5 col-xs-10 col-md-offset-3 col-xs-offset-1 block2">
                <div class="row">
                    <h3> 
                        <a href="index.php">
                            <span class="fa fa-arrow-left"></span>
                            </a>
                            Edit Contact
                        </h3>   
                        
                    </div>
                    <div>
                    <b>
                        <?php
                            if(isset($_GET["error"])){
                            echo $_GET['error'];
                            }
                            ?>
                    </b>
                </div>
                <form action="./scripts/updatedata.php?id=<?php echo $_GET["id"];?>" method="post">
                    <div class="form-group">
                    <label for="name">Name</label>
                        <input type="text" 
                                name="name" 
                                id="name"
                                value="<?php
                                echo $data["name"]
                                ?> "
                                placeholder="Name"
                                class="form-control"
                                required
                        >
                    </div>
                    <div class="form-group">
                    <label for="dob">DOB</label>
                        <input type="date" 
                                name="dob" 
                                id="dob"
                                value="<?php
                                echo $data["date"]
                                ?> " 
                                placeholder="dd/mm/yyyy"
                                class="form-control"
                        >
                    </div>
                    <div class="form-group">
                    <label for="mobile">Mobile Number</label>
                        <input type="text" 
                                name="mobile" 
                                id="mobile" 
                                value="<?php
                                echo $data["mobile"]
                                ?> "
                                placeholder="Mobile No"
                                class="form-control"
                                required
                        >
                    </div>
<!--                     Error when phone number already exists ------------------------->
                    <div>
                        <b style="color:red;">
                            <?php 
                                if(isset($_GET["msg"])){
                                    echo $_GET["msg"];
                                    }    
                            ?>
                        </b>
                    </div>
 <!--         ---------------------------------------------------------------------------------->                   

                    <div class="form-group">
                    <label for="email">Email</label>
                        <input type="email" 
                                name="email" 
                                id="email" 
                                value="<?php
                                echo $data["email"]
                                ?> "
                                placeholder="Email"
                                class="form-control"
                                required
                        >
                    </div>
                    <div class="form-group">
                        <input type="submit" 
                                value="Update"
                                class="btn btn-success"
                        >
                    </div>
                </form>
            </div> 
        </div>
       
    </div>
</body>
</html>