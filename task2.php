<?php
    $err = array();
    if(isset($_GET['submit'])){
            
        if(isset($_GET['time'])){
            date_default_timezone_set($_GET['time']);
            echo "The time is " . date("h:i:sa");
        }    
    }
    
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display TimeZones</title>
</head>
<body>
    <form action="task2.php" method="GET">
        <label for="time/date">Time/Date</label><br>
        <select name="time" >
            <option selected value="">Please select value</option>
            <option value="Asia/Kolkata">India</option>
            <option value="Australia/Melbourne">Australia</option>
            <option value="America/New_York">USA</option>
            <option value="Europe/Paris">UK</option>
        </select><br><br>
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>