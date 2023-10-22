<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <?php include "../components/Menu/headers.php"?>
    <?php include "../components/Navbar/headers.php"?>

    <style>
        body{
            width: 100%;
            min-height: 100vh;
            display: flex;
        }

        main{
            width: 100%;
        }
    </style>
</head>
<body>    
    <?php include "../components/Menu/menu.php"; ?>
    <main>
        <?php  include "../components/Navbar/navbar.php"; ?>
    </main>
</body>
</html>