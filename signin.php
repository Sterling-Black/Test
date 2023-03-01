<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css" />
    <title>signin page</title>
   
</head>
<body>
    <?php
        if(isset($_POST['email']) AND isset($_POST['uname']) AND isset($_POST['pass'])){
            $name = $_POST['uname'];
            $pass = $_POST['pass'];
            $email =  $_POST['pass'];
        }
    ?>
    <header>
        <div class="logo">
            <img src="logo.png" alt=""/>
        </div>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="index.html" class="log">Login</a></li>
            <li><a href="signin.php" class="sign">Signin</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Help</a></li>
        </ul>
    </header>

    <div class="box">
        <h2>Signin</h2>

        <form method="post" action="signin.php">
            <input type="email" placeholder="User email" name="email">
            <input type="text" placeholder="User name" name="uname">
            <input type="password" placeholder="Password" name="pass">
            <input type="submit" value="Signin">
        </form>
    </div>
    <?php  
        if(isset($_POST['email']) AND isset($_POST['uname']) AND isset($_POST['pass'])){
            if($_POST['email']!=NULL AND $_POST['uname']!=NULL AND $_POST['pass']!=NULL){
                $log = mysqli_connect("localhost","root","","test");

                $sql = "INSERT INTO login(Email, username, userpassword) VALUE ('$email','$name','$pass')";

                if(mysqli_query($log,$sql)){
                    ?>
                        <script>alert("Entry successful");</script>
                        
                    <?php
                }else{
                    ?>
                        <script>alert("ERROR:");</script>
                    <?php
                }
                mysqli_close($log);
    
            }else{
                if(!isset($_GET['x'])){
                    ?>
                    <script>alert("Please fill in all information");</script>
                     <?php
                }
            }
        }
    ?>
</body>
