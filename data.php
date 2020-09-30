<!DOCTYPE html>
<html>
    <head>
        <title>Data</title>
    </head>
    <body>
        <h2>Thank You For Submitting The Form</h2>
        <?php
                echo("Full name: " . $_POST['name'] . "<br/>");
                echo("Email: " . $_POST['email'] . "<br/>");
                echo("Contact: " . $_POST['contact'] . "<br/>");
                echo("City: " . $_POST['city'] . "<br/>");
                echo("State: " . $_POST['state'] . "<br/>");
                $limit = 100;
                $len = strlen($_POST['about_myself']);
                if($len > $limit)
                {
                    echo "limit reahed";
                }
                else
                {
                    echo("About Myself: " . $_POST['about_myself'] . "<br/>");
                }
        ?>
        
        
    </body>
</html>