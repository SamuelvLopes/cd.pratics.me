<!DOCTYPE html>
<?php
require 'utils.php';
?>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>CD</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Morena Bar</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">C Link</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Navbar Link</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
 


  <div class="container">
    <div class="section">
      
      <div class="row">
        <form class="col s12">
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">search</i>
              <input id="icon_prefix" type="text" class="validate">
              <label for="icon_prefix">Buscar</label>
            </div>
          </div>
        </form>
      </div>
      <?php
      
        for ($i = 1; $i <= 10; $i++) {
            geraCardMesa($i);
        }
    
      ?>
    </div>
    <br><br>
  </div>



  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script> <div class="row">

    <div class="col s4">
      <!-- Promo Content 1 goes here -->
    </div>
    <div class="col s4">
      <!-- Promo Content 2 goes here -->
    </div>
    <div class="col s4">
      <!-- Promo Content 3 goes here -->
    </div>

  </div>
  <script src="js/init.js"></script>



  <script>
    function refreshPage() {
        location.reload();
    }

    setInterval(refreshPage, 10000);
  </script>



  </body>
</html>
