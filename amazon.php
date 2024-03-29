<?php
  require_once("assets/head.php");
  $a = "https://ics.totalexpress.com.br/oper/amazon_mfn.php";
?>

<div class="container">

<h1>Integrações Amazon</h1><br>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Amazon DBA</h5>
        <p class="card-text"> <li>Nessa integração as encomendas são direcionadas automaticamente pelo CEP do seller, dentro do arquivo.</li> <br> 
                                <li> O cadastro do seller é automático, quando se trata de um seller novo, ele será criado assim que importar o arquivo no ICS.</li><br>
                                  <li> O arquivo só irá ser processado caso o CEP estiver cadastrado na tabela amazon_mfn</li></p>
        <a href=<?php echo $a;?> target="_blank" class="btn btn-primary">Cadastrar/Consultar CEPs</a>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#dbaModal"> De x Para</button>

        
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Amazon FBAOS</h5>
        <p class="card-text"><li> Nessa integração as encomendas são direcionadas automaticamentepela tag &lt;warehouseLocationId&gt;</li><br>
                              <li> É possível consultar os IDs pela coluna ID Externo, dentro do cadastro do cliente</p>
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