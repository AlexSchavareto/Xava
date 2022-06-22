<?php 
    require_once("assets/head.php");
    require_once("classes/classDocs.php");
    require_once("assets/botoes.php");

    new DocumentosRest;
    new DocumentosSoap;
    new OutrosDocs;
    

?>
<div class="container">

<h1>Donwload Documentações</h1><br>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<hr>
<h3>API's REST</h3> 
<table class="table table-success table-striped table-bordered table-hover"> 
  <tbody>
    <tr>
    <th scope="col">SmartLabel</th>
      <td><a href=<?php DocumentosRest::smartlabeldoc_download(); ?>><?php echo $botaoDownload ?></a><br></td>
      <td><a href=<?php DocumentosRest::smartlabeldoc_visualizar(); ?> target="_blank"><?php echo $botaoVisualizar?></a></td>
    </tr>
    <tr>
    <th scope="col">Previsão de entrega</th>
      <td><a href=<?php DocumentosRest::apiprevisao_download(); ?>><?php echo $botaoDownload ?></a><br></td>
      <td><a href=<?php DocumentosRest::apiprevisao_visualizar(); ?> target="_blank"><?php echo $botaoVisualizar?></a></td>
    </tr>
    <th scope="col">SmartLabel Offline</th>
      <td><a href=<?php DocumentosRest::smartoffline_download(); ?>><?php echo $botaoDownload ?></a><br></td>
      <td><a href=<?php DocumentosRest::smartoffline_visualizar(); ?> target="_blank"><?php echo $botaoVisualizar?></a></td>
    </tr>
    <th scope="col">SmartLabel em Inglês</th>
      <td><a href=<?php DocumentosRest::smartingles_download(); ?>><?php echo $botaoDownload ?></a><br></td>
      <td><a href=<?php DocumentosRest::smartingles_visualizar(); ?> target="_blank"><?php echo $botaoVisualizar?></a></td>
    </tr>
    <th scope="col">API Comprovante de Entrega (POD)</th>
      <td><a href=<?php DocumentosRest::apipod_download(); ?>><?php echo $botaoDownload ?></a><br></td>
      <td><a href=<?php DocumentosRest::apipod_visualizar(); ?> target="_blank"><?php echo $botaoVisualizar?></a></td>
    </tr>
    <th scope="col">API Buscar Rota</th>
      <td><a href=<?php DocumentosRest::apibuscarota_download(); ?>><?php echo $botaoDownload ?></a><br></td>
      <td><a href=<?php DocumentosRest::apibuscarota_visualizar(); ?> target="_blank"><?php echo $botaoVisualizar?></a></td>
    </tr>
  </tbody>
</table>

<hr>
<h3>API's SOAP</h3> 
<table class="table table-danger table-striped table-bordered table-hover"> 
  <tbody>
    <tr>
    <th scope="col">Webservice 24</th>
      <td><a href=<?php DocumentosSoap::ws24_download(); ?>><?php echo $botaoDownload ?></a><br></td>
      <td><a href=<?php DocumentosSoap::ws24_visualizar(); ?> target="_blank"><?php echo $botaoVisualizar?></a></td>
    </tr>
    <tr>
    <th scope="col">Webservice 26</th>
      <td><a href=<?php DocumentosSoap::ws26_download(); ?>><?php echo $botaoDownload ?></a><br></td>
      <td><a href=<?php DocumentosSoap::ws26_visualizar(); ?> target="_blank"><?php echo $botaoVisualizar?></a></td>
    </tr>
    <th scope="col">Cálculo de Frete</th>
      <td><a href=<?php DocumentosSoap::calculofrete_download(); ?>><?php echo $botaoDownload ?></a><br></td>
      <td><a href=<?php DocumentosSoap::calculofrete_visualizar(); ?> target="_blank"><?php echo $botaoVisualizar?></a></td>
    </tr>
    <th scope="col">Cadastro de Embarcadores (Sellers)</th>
      <td><a href=<?php DocumentosSoap::cadastroembarcador_download(); ?>><?php echo $botaoDownload ?></a><br></td>
      <td><a href=<?php DocumentosSoap::cadastroembarcador_visualizar(); ?> target="_blank"><?php echo $botaoVisualizar?></a></td>
    </tr>
  </tbody>
</table>

<hr>
<h3>Outros Documentos</h3> 
<table class="table table-dark table-striped table-bordered table-hover"> 
  <tbody>
    <tr>
    <th scope="col">Declaração de Conteúdo</th>
      <td><a href=<?php OutrosDocs::declaracaoconteudo_download(); ?>><?php echo $botaoDownload ?></a><br></td>
      <td><a href=<?php OutrosDocs::declaracaoconteudo_visualizar(); ?> target="_blank"><?php echo $botaoVisualizar?></a></td>
    </tr>
    <tr>
    <th scope="col">CARDS CSV</th>
      <td><a href=<?php OutrosDocs::cards_download(); ?>><?php echo $botaoDownload ?></a><br></td>
      <td><a href=<?php OutrosDocs::cards_visualizar(); ?> target="_blank"><?php echo $botaoVisualizar?></a></td>
    </tr>
    <th scope="col">Salvar CSV</th>
      <td><a href=<?php OutrosDocs::salvarcsv_download(); ?>><?php echo $botaoDownload ?></a><br></td>
      <td><a href=<?php OutrosDocs::salvarcsv_visualizar(); ?> target="_blank"><?php echo $botaoVisualizar?></a></td>
    </tr>
    <th scope="col">Total 23 CSV </th>
      <td><a href=<?php OutrosDocs::total23_download(); ?>><?php echo $botaoDownload ?></a><br></td>
      <td><a href=<?php OutrosDocs::total23_visualizar(); ?> target="_blank"><?php echo $botaoVisualizar?></a></td>
    </tr>
  </tbody>
</table>


