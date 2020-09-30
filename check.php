<?php
    if(isset($_POST['submit'])){
        $email = "abc@gmail.com";
        $password = "123";
        if($_POST['Email'] == $email && $_POST['Password'] == $password){
            session_start();
            $_SESSION['email'] = $email;
            echo "login success";
            header('location: home.php');  
        }
        else{
            echo 'Login failed, please try again';
            ?>
            <br><a href="form.php">Login Page</a>
            <?php
        }
    }
?>