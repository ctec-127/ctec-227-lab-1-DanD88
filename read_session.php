<?php
session_start();

    $role    = isset($_SESSION ['role']) ? $_SESSION['role'] : 'Destroyed';
    $browser = isset($_SESSION ['browser']) ? $_SESSION['browser'] : 'Destroyed' ;
    $views   = isset($_SESSION ['views']) ? $_SESSION['views'] : 'Destroyed';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Read Session</h1>

    <h5>Your session Id is <?php echo session_id(); ?> </h5>

    <h5>Your role is <?php echo $role; ?></h5>
    <h5>Your browsers are <?php echo $browser; ?> </h5>
    <h5>The amount of views is <?php echo $views; ?> </h5>

    <footer>
        <div class="nav">
            <nav>
                <ul>
                    <li><a href="create_session.php">Create Session</a></li>
                    <li><a href="destroy_session.php">Destroy Session</a></li>
                    <li><a href="destroy_all_session.php">Destroy All Sessions</a></li>
                </ul>
            </nav>
        </div>
    </footer>
    

</body>
</html>