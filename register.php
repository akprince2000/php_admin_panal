<?php

    include "classes/user.php";
    $obj = new User;
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registion Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3  mt-5">
                    <!-- alert  -->
                    <!-- <div class="alert alert-success">Registration Successfull</div> -->
                    <!-- <div class="alert alert-danger">Registration Un-Successfull</div> -->


                    <?php
                    
                        if(isset($_POST['submit'])){

                            $obj->registration($_POST);

                        }

                    
                    
                    ?>





                    <form method="POST">
                        <div class="form-group mt-4">
                            <label for="fuName">Enter Your Full Name</label>
                            <input class="form-control" type="text" name="fuName" id="fuName" placeholder="Full Name">
                        </div>
                        <div class="form-group mt-4">
                            <label for="usName">Enter Your User Name</label>
                            <input class="form-control" type="text" name="usName" id="usName" placeholder="User Name">
                        </div>
                        <div class="form-group mt-4">
                            <label for="email">Enter Your Email</label>
                            <input class="form-control" type="email" name="email" id="email" placeholder="email">
                        </div>
                        <div class="form-group mt-4 mb-4">
                            <label for="password">Enter Your Password</label>
                            <input class="form-control" type="password" name="password" id="password" placeholder="password">
                        </div>
                        <div class="form-group mt-4 mb-4">
                            <label for="coFrPassword">Enter Your Password</label>
                            <input class="form-control" type="password" name="coFrPassword" id="coFrPassword" placeholder="conform Password">
                        </div>
                        <input type="submit" name="submit" value="Regester" class="my-3 btn btn-success form-control">
                        <label class="mb-5"><a href="login.php">Already Member ? Login Form</a></label>
                    </form>
            </div>
        </div>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>