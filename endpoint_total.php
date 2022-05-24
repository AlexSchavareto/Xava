<?php
	require_once("assets/head.php");

	  $ws24 = "https://edi.totalexpress.com.br/webservice24.php?wsdl";
    $ws26 = "https://edi.totalexpress.com.br/webservice26.php?wsdl";
    $ws24qa = "https://edi-qa.totalexpress.com.br/webservice24.php?wsdl";
    $ws26qa = "https://edi-qa.totalexpress.com.br/webservice26.php?wsdl";
    $wsCalculoFrete = "https://edi.totalexpress.com.br/webservice_calculo_frete.php";
    $smartToken = "https://apis.totalexpress.com.br/ics-seguranca/v1/oauth2/tokenGerar";
    $smarttokenqa = "https://apis-qa.totalexpress.com.br/ics-seguranca/v1/oauth2/tokenGerar";
    $smartColeta = "https://apis.totalexpress.com.br/ics-edi/v1/coleta/smartLabel/registrar";
    $smartColetaqa = "https://apis-qa.totalexpress.com.br/ics-edi/v1/coleta/smartLabel/registrar";
    $prevEntrega = "https://edi.totalexpress.com.br/previsao_entrega_atualizada.php";
    $prevEntregaqa = "https://edi-qa.totalexpress.com.br/previsao_entrega_atualizada.php";
    $buscarRota = "https://apis.totalexpress.com.br/ics-edi/v1/coleta/smartLabel/rota/buscar";
    $buscarRotaqa = "https://apis-qa.totalexpress.com.br/ics-edi/v1/coleta/smartLabel/rota/buscar";


?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<div class="container">

<br>
<h1>ENDPOINTS</h1><br>
<h3>Smart Label:</h3> 
<table class="table table-info table-striped table-bordered table-hover "> 
  <thead>
    <tr>
      <th scope="col">Gerar TOKEN Produção</th>
      <th scope="col">Gerar TOKEN Homologação</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $smartToken;?></td>
      <td><?php echo $smarttokenqa;?></td>
    </tr>
  </tbody>
  <thead>
    <tr>
      <th scope="col">Criar COLETA Produção</th>
      <th scope="col">Criar COLETA Homologação</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $smartColeta;?></td>
      <td><?php echo $smartColetaqa;?></td>
    </tr>
  </tbody> 
<thead>
  </thead>
<table class="table table-dark table-striped table-bordered table-hover"> 

  <hr>

<h3>Webservice SOAP 24:</h3>
  <thead>
    <tr>
      <th scope="col">Produção</th>
      <th scope="col">Homologação</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $ws24;?></td>
      <td><?php echo $ws24qa;?></td>
    </tr>
  </tbody>
</table>


</table>
<hr>
<h3>Previsão de entrega:</h3> 
<table class="table table-success table-striped table-bordered table-hover"> 
  <thead>
    <tr>
      <th scope="col">Produção</th>
      <th scope="col">Homologação</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $prevEntrega;?></td>
      <td><?php echo $prevEntregaqa;?></td>
    </tr>
  </tbody>
</table>
<h3>Buscar Rota:</h3> 
<table class="table table-warning table-striped table-bordered table-hover"> 
  <thead>
    <tr>
      <th scope="col">Produção</th>
      <th scope="col">Homologação</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $buscarRota;?></td>
      <td><?php echo $buscarRotaqa;?></td>
    </tr>
  </tbody>
</table>
<hr>
<h3>Calculo de Frete:</h3> 
<table class="table table-primary table-striped table-bordered table-hover"> 
  <thead>
    <tr>
      <th scope="col">Produção</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $wsCalculoFrete;?></td>
    </tr>
  </tbody>
</table>
<hr>

<h3>Webservice SOAP 26:</h3> 
<table class="table table-danger table-striped table-bordered table-hover"> 
  <thead>
    <tr>
      <th scope="col">Produção</th>
      <th scope="col">Homologação</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $ws26;?></td>
      <td><?php echo $ws26qa;?></td>
    </tr>
  </tbody>
</table>


</body>
</html>