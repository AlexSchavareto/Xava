<?php
  require_once("assets/head.php");
?>

<div class="container">

<h1>Integrações Amazon</h1><br>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Amazon DBA</h5>
        <p class="card-text">- Nessa integração as encomendas são direcionadas automaticamente pelo CEP do seller, dentro do arquivo. <br> 
                                - O cadastro do seller é automático, quando se trata de um seller novo, ele será criado assim que importar o arquivo no ICS. </p>
        <a href="#" class="btn btn-primary"></a>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#dbaModal"> De x Para</button>

        
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Amazon FBAOS</h5>
        <p class="card-text">Os arquivos são direcionados pela tag &lt;warehouseLocationId&gt;</p>
        <a href="#" class="btn btn-primary"></a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Amazon PCP</h5>
        <p class="card-text"></p>
        <a href="#" class="btn btn-primary"></a>
      </div>
    </div>
  </div>
</div>




<?php require_once("modals.php")?>