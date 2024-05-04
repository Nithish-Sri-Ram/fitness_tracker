<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
     <link rel="stylesheet" href="style.css">
     <title>User Dashboard</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php ">Fitness Tracker</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="workouts.php">Workouts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Diet</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Goals</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Body Measurements</a>
                        </li>
                        <li class="align-items-end">
                            <a href="logout.php" class="btn btn-warning">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    <div class="container">
        <h1>Welcome to Dashboard</h1>
        <?php
        // include "login.php";
        echo $_SESSION["user"][1];
        ?>
       
</body>
</html>