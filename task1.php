<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>
    
    <form action="data.php" method="POST">
        <label for="Name">Full name:</label>
        <input type="text"  name="name"><br><br>

        <label for="Email">Email:</label>
        <input type="email"  name="email"><br><br>

        <label for="contact">Contact:</label>
        <input type="number"  name="contact"><br><br>

        <label for="city">City:</label>
        <input type="text"  name="city"><br><br>
        
        <label for="state">State:</label>
        <input type="text"  name="state"><br><br>

        <label for="about_myself">About Myself:</label>
        <textarea  name="about_myself" rows="4" cols="50" >
        
        </textarea><br><br>

        <input type="submit" value="Submit">
    </form>
    
    
</body>
</html>