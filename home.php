<?php
    session_start();
    echo "welcome " . $_SESSION['email'];
?>
<br><a href="logout.php">logout</a>