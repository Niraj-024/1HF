<?php
include ('../controller/session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
    <div class="sidebar">
        <h2>Welcome, <?php echo $_SESSION['uname'] ;?></h2><hr>
        <div class="menu-item">
            <i class="fas fa-user"></i>
            <span><a href="admin.php">Admins</a></span>
        </div>
        <div class="menu-item">
            <i class="fas fa-users"></i>
            <span><a href="admin_client.php">Clients</a></span>
        </div>
        <div class="menu-item">
            <i class="fas fa-briefcase"></i>
            <span><a href="admin_spr.php">Service Providers</a></span>
        </div>
        <div class="menu-item">
            <i class="fas fa-tasks"></i>
            <span><a href="admin_service.php">Services</a></span>
        </div>
        <div class="menu-item">
            <i class="fas fa-arrow-right-from-bracket"></i>
            <span><a href="logout.php">Logout</a></span>
        </div>
    </div>
</body>
</html>