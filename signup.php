<?php
include "./database/dbcon.php";
?>
<html>
    <head>
        <title>BeerHUB</title>
        <link rel="stylesheet" type="text/css" href="css/signup.css">
    </head>
    <body>
    <div class="container"> <!-- Whole Background Image -->
        <div class="reg">
            <form class="form" action="#" method="POST">
                <p class="title">Register </p>
    <div class="flex">
    <label>
            <input class="input" type="text" placeholder="" required="" name="fname">
            <span>Firstname</span>
    </label>

    <label>
            <input class="input" type="text" placeholder="" required="" name="lname">
            <span>Lastname</span>
    </label>
    </div>  
            
    <label>
        <input class="input" type="email" placeholder="" required="" name="email">
        <span>Email</span>
    </label>
     
    <div class="flex">
    <label>
            <input class="input" type="text" placeholder="" required="" name="age">
            <span>Age</span>
    </label>
    </div>
        
    <label>
        <input class="input" type="password" placeholder="" required="" name="password">
        <span>Password</span>
    </label>
    <label>
        <input class="input" type="password" placeholder="" required="" name="rpassword">
        <span>Confirm password</span>
    </label>
    <button class="submit" name="submit">Submit</button>
    <p class="signin">Already have an acount ? <a href="#">Signin</a> </p>
            </form>
            </div>
        </div>
    </body>
</html>
