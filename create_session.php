<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create-Session</title>
</head>
<body>
    <h1>Create Session Variables</h1>
<?php 

    if (!isset($SESSION['views'])) {
        $SESSION['views'] = 1;
    }

    if (!isset($_SESSION['browser'])) {
        $_SESSION['browser'] = $_SERVER['HTTP_USER_AGENT'];
    }

    if (!isset($_SESSION['role'])) {
        $_SESSION['role'] = 'admin';
    }

    echo "<p>Your session ID is: " . session_id() . "</p>";

    echo "<p>Your current role is: " . $_SESSION['role'] . "</p>";
    
    echo "<p>The version of browser is: " . $_SESSION['browser'] . "</p>";
    
    //  if ($_SESSION['views'] == 3) {
        
    //  }

    $_SESSION['views'] = $_SESSION['views'] + 1;

    echo "The number of page views is: " . $_SESSION['views'];

?>

    <footer>
        <div class="nav">
            <nav>
                <ul>
                    <li><a href="read_session.php">Read Session</a></li>
                    <li><a href="destroy_session.php">Destroy Session</a></li>
                    <li><a href="destroy_all_session.php">Destroy All Sessions</a></li>
                </ul>
            </nav>
        </div>
    </footer>

</body>
</html>
