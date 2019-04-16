<?php
    session_start();

    session_destroy();
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

    <h1>Session has been destroyed</h1>

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