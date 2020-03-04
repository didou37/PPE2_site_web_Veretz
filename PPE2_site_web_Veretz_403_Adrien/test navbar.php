<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Bibliotheque de Veretz</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:Lato:300,400,700,300italic,400italic|Raleway:400,300,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <!-- Libraries CSS Files -->
  <link href="lib/icomoon/icomoon.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="js/main.js" async></script>

  <!-- =======================================================
    Template Name: Shield
    Template URL: https://templatemag.com/shield-bootstrap-agency-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body data-spy="scroll" data-offset="58" data-target="#navbar-main" id ="body-fade">
 
 <div id="navbar-main">
    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li> <a href="#home" class="smoothscroll">Acceuil</a></li>
            <li> <a href="#about" class="smoothscroll"> Livre</a></li>
            <li> <a href="#services" class="smoothscroll"> Classement</a></li>
            <li> <a href="#team" class="smoothscroll"> Jeux</a></li>
		  </ul>
		   <ul class="nav navbar-nav navbar-right">
            <button>Connexion</button>
          </ul>
        </div>
        <!--/.nav-collapse -->
      </div>
    </div>
  </div>
  
<div id="greywrap" class="text">
    <div class="row">
      <div class="col-lg-4 callout">
        <span class="icon icon-stack"></span>
        <h2>Acceuil</h2>
        <p>Shield 0 Theme is powered by Bootstrap 3. The incredible Mobile First Framework is the best option to run your website. </p>
      </div>
    </div>
    <!-- row -->
  </div>
  <div class="container">
  <h2>Modal Example</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-body">
          <?php include("connexion.php") ?>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

</body>
</html>