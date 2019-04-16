<?php 
    session_start();

    unset($_SESSION['role']);
    unset($_SESSION['browser']);
    unset($_SESSION['views']);
    
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Destroy Session</title>
</head>
<body>
    <h1>Destroy Session</h1>

    <h4>The session variables have been destroyed.</h4>
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