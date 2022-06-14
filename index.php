<?php require_once("assets/head.php"); 
      require_once("geradordesenha.php");
      require_once("modals.php");
      require_once("classes/classApi.php");
      $a = new GerarTokenApi;?>
<div class = "container text-center"><br>
<h1>Guia do Xavá boladão</h1>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


<a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
  Ferramentas
</a>
<!--<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
  Button with data-bs-target
</button> -->

<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Ferramentas</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div>
    </div>
    <div class="dropdown mt-3">
      <a type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#gsenhaModal">Gerador de senha</a><br><br>
      </ul>
    </div>
  </div>
</div>
<hr>

<form method="post" action="./">
    <input class="btn btn-primary" type=submit required  name='insert' value="Gerar Token(prod)">
</form><br>
 <?php
  if (isset($_POST['insert'])){
  echo '<div class="alert alert-dark" role="alert"><strong>access_token: </strong>';
  $a -> gerarToken();
  echo '</div>';
   }
?>


<?php //$a -> buscarRota();?></div>
 </div>





  </body>
</html>

