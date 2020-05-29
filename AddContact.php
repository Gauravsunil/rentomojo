<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

        <link rel="stylesheet" href="./styles/AddContactstyle.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
    <title>Add Contact</title>
</head>
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
                           Add Contact
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
                <form action="./scripts/adddata.php" method="post" id='addForm'>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" 
                                name="name" 
                                id="name" 
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
                                placeholder="dd/mmm/yyyy"
                                class="form-control"
                        >
                    </div>
                    <div class="form-group ">
                    <label for="mobile">Mobile Number</label>
                        <input type="text" 
                                name="mobile" 
                                id="mobile" 
                                placeholder="Mobile No"
                                class="form-control phoneNum"
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
                                placeholder="Email"
                                class="form-control"
                                required
                        >
                        
                    </div>
                    
                    <div class="form-group">
                        <input type="submit" 
                                value="Save"
                                class="btn btn-success"
                        >
                    </div>
                </form>
            </div> 
        </div>
       
    </div>
</body>

</html>