<?php include"header.php" ?>
<head>
<link rel="stylesheet" href="Acceuil.css" >
</head>
<body>
<div id="content">
            <!-- tester si l'utilisateur est connecté -->
            <?php
                session_start();
                if (!empty($_SESSION['username'])) {
                    $user = $_SESSION['username'];
                    // afficher un message
                    echo "Bonjour $user, vous êtes connecté";
                }
            ?>
        </div>
    </body>
</html>