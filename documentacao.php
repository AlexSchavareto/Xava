<?php 
    require_once("assets/head.php");
    require_once("classes/classDocs.php");

    $obj = new DocumentosRest;
    $obj = new DocumentosSoap;
    $obj = new OutrosDocs;
    

?>
<div class="container">

<h1>Donwload Documentações</h1><br>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</table>
<hr>
<h3>API's REST</h3> 
<table class="table table-success table-striped table-bordered table-hover"> 
  <tbody>
    <tr>
    <th scope="col">SmartLabel</th>
      <td><a href=<?php DocumentosRest::smartlabeldoc_download(); ?>> Download </a><br></td>
      <td><a href=<?php DocumentosRest::smartlabeldoc_visualizar(); ?> target="_blank"> Visualizar </a></td>
    </tr>
    <tr>
    <th scope="col">Previsão de entrega</th>
      <td><a href=<?php DocumentosRest::apiprevisao_download(); ?>> Download </a><br></td>
      <td><a href=<?php DocumentosRest::apiprevisao_visualizar(); ?> target="_blank"> Visualizar </a></td>
    </tr>
  </tbody>
</table>


