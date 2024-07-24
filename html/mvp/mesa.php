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
  </div>
  </nav>
 


  <div class="container">
    <div class="col s12 m8 offset-m2 l6 offset-l3">
        <div class="card-panel grey lighten-5 z-depth-1">
          <div class="row valign-wrapper">
            <div class="col s2">
              <img src="https://cdn-icons-png.flaticon.com/512/1315/1315556.png" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
            </div>
            <div class="col s10">
                <span class="black-text">
                Mesa <?=$_GET['id']?> - Comanda <?=rand(10,999)?>

              </span>
            </div>
          </div>
        </div>
      </div>
      <ul class="collapsible" data-collapsible="accordion">
  <li>
    <div class="collapsible-header">
      <i class="material-icons">filter_drama</i>
      Total
      <span class="badge">R$ 40,00</span></div>
    <div class="collapsible-body">

    <table class="striped">
        <thead>
          <tr>
              <th>QTD</th>
              <th>Descrição</th>
              <th>Valor Unitário</th>
              <th>Valor Total</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>2</td>
            <td>Prato Principal A</td>
            <td>R$ 25,00</td>
            <td>R$ 50,00</td>
          </tr>
          <tr>
            <td>1</td>
            <td>Bebida B</td>
            <td>R$ 10,00</td>
            <td>R$ 10,00</td>
          </tr>
          <tr>
            <td>1</td>
            <td>Macaxeira com fritas e peixe ao molho chinês</td>
            <td>R$ 10,00</td>
            <td>R$ 10,00</td>
          </tr>
         
        </tbody>
      </table>
            
    </div>
  </li>
  <li>
    <div class="collapsible-header">
      <i class="material-icons">place</i>
      Itens Pendenes
      <span class="badge">1</span></div>
    <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
  </li>
</ul> 

<div class="row">
      <div class="col s6 m6">
            <a class="waves-effect waves-light btn"><i class="material-icons left">cloud</i>Voltar</a>
      </div>
      <div class="col s7 m7">
            <a class="waves-effect waves-light btn"><i class="material-icons left">cloud</i>Encerrar comanda</a>
      </div>
      <div class="col s12 m12 right-align">
            <a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a>
      </div>
    </div>
          
        
              
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
