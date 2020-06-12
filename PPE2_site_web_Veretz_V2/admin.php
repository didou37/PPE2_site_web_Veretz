
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
                    echo "Salut $user, ca va ?";
                }
            ?>
			<?php 
			
			if (isset($_POST["envoi"])){
			$dbh = new PDO('mysql:host=localhost;dbname=bibliotheque_ppe', 'root');
			$req=$dbh->prepare("insert into livre(couvertureLivre) values(?)");
			$req->execute(array (file_get_contents($_FILES["lien"]["name"])));}
			?>
			<form name="ajouterLivre" method="POST">
				<p>lien du livre</p>
				<input type="file" name="lien">
				<input type="submit" name="envoi" value="charger">
			</form>
        </div>
    </body>