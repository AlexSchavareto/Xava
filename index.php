<?php require_once("assets/head.php"); 
      require_once("geradordesenha.php");
      require_once("modals.php");
      require_once("classes/Rota.php");
      $b = new Rota();?>
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
<h3>Gerador de Token</h3>
<form method="post" action="./  ">
    <input class="btn btn-primary" type=submit required  name='insert' value="Gerar Token(prod)">
</form><br>
 <?php
  if (isset($_POST['insert'])){
  echo '<div class="alert alert-dark" role="alert"><strong>access_token: </strong>' . $b -> gerarToken() . '</div>';
   }
?>
<hr>
  <h3>Buscar Rota</h3>
  
    <form action="./" method="post">
			<div class="form-group">
				<label>REID</label>
				<input type="text" name="reid" class="form-control" >
			</div>

			<div class="form-group">
				<label>CEP</label>
				<input type="text" name="cep" class="form-control" >
			</div>
			<button type="submit" name="enviar" class="btn btn-primary" value="enviar">Enviar</button>
		</form>

<?php 
    if (isset($_POST['reid'],$_POST['cep'] )){
      echo $b->buscarRota($_POST['reid'], $_POST['cep']);       
        }if (in_array(NULL, $_POST)) { 
?>
    <div class="alert alert-primary text-center" role="alert">
        Algum campo está vazio, volte e preencha novamente.
    </div>
<?php  } ?>

    </div>
  </div>
  </body>
</html>