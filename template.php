<?php require_once 'config.php'; ?>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<!-- Navigation Bar -->
<nav class="navbar navbar-expand-sm navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
            <img src="images/logo.jpg" alt="" width="80" height="80">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
            </ul>
            <?php
            $accessLevel = 2;
            if (isset($_SESSION["username"])) {
                echo "<div class='alert alert-success d-flex'><span>Welcome, " . $_SESSION["username"] . "<br><a href='logout.php'>Logout</a></span></div>";
                // access level in database
                if ($conn->query("SELECT COUNT(*) FROM Users WHERE AccessLevel='$accessLevel'")) {
                    echo "<div class='alert alert-info d-flex'><a href='Register-ESP32.php'>ESp32 registration</a> </div>";
                }
            } else {
                echo "<div class='alert alert-info d-flex'><a href='register.php'>Sign Up</a> </div>";
                echo "<div class='alert alert-info d-flex'><a href='login.php'>Sign In</a> </div>";


            }
            ?>
        </div>
    </div>
</nav>
<script src="js/bootstrap.bundle.js"></script>
<?php
function sanitise_data($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function outputFooter()
{
    date_default_timezone_set('Australia/Canberra');
    echo "<footer>This page was last modified: " . date("F d Y H:i:s.", filemtime("index.php")) . "</footer>";
}

?>
