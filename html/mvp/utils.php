<?php

function geraCardMesa($id){


    echo'<div class="col s12 m7">
    <div  class="card horizontal" id="mesa'.$id.'">
      <div class="card-image">
        <img  src="https://cdn-icons-png.flaticon.com/512/1315/1315556.png">
        
      </div>
      <div class="card-stacked">
        <div class="card-content">
          <p>MESA '.$id.' </p>
        </div>
        <div class="card-action">
          <a href="mesa.php?id='.$id.'">Detalhes</a>
        </div>
      </div>
    </div>
  </div>';
}