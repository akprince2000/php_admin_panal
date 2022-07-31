<?php

    include "database.php";

    class User extends Database{

        function registration ($data){
            $fuName = $data["fuName"];
            $usName = $data["usName"];
            $email = $data["email"];
            $password = $data["password"];
            $coFrPassword = $data["coFrPassword"];
            $role = "user";
            $status = "0";

            if (empty($fuName)) {
                echo '<div class="alert alert-danger">Full name cant be empty </div>';
            }elseif (empty($usName)) {
                echo '<div class="alert alert-danger">User name cant be empty </div>';
            }elseif (empty($email)) {
                echo '<div class="alert alert-danger">Email cant be empty </div>';
            }elseif (empty($password)) {
                echo '<div class="alert alert-danger">Password cant be empty </div>';
            }elseif (empty($coFrPassword)) {
                echo '<div class="alert alert-danger">Conform Password cant be empty </div>';
            }
            elseif($password != $coFrPassword ){
                echo '<div class="alert alert-danger">Conform Password cant be Not Match </div>';
            }else{
                
                $chack = $this->checkEmailUsName($usName,$email);
                if ($chack == TRUE) {
                     echo '<div class="alert alert-danger">User Name/email allrade exit </div>';
                }else{
                    $password= md5($password);
                    $result = $this->con->query("INSERT INTO tbl_user(fuName,usName,email,role,password,status)VALUES('$fuName','$usName','$email','$role','$password','$status')");
                    if ($result) {
                        echo '<div class="alert alert-success">Registration Successfull </div>';
                    }else{
                         echo '<div class="alert alert-danger">Registration Not Successfull </div>';
                    }
                    
                }
            }
            
        }
        

        // Chack user name and Mail for registion table 
        function checkEmailUsName($usName,$email){
            $result = $this->con->query("SELECT *FROM tbl_user WHERE  usName = '$usName' OR email='$email'");

            if ($result->num_rows>0) {
                return true;
            }else{
                return false;
            }
        }
        
    }





?>