<?php
  require_once("assets/head.php");
  $ocorrenInt = "https://ics.totalexpress.com.br/oper/edi_retorno_conf.php?reid=13120&ediretconf=13228";
  $notfisInt = "https://ics.totalexpress.com.br/oper/edi_coleta_conf.php?reid=13120&confid=22545";
  $podInt = "https://ics.totalexpress.com.br/oper/edi_retorno_conf.php?reid=12707&ediretconf=19091";
  $notfis5 = "https://ics.totalexpress.com.br/oper/edi_coleta_conf.php?reid=13601&confid=23975";
  $oco5 = "https://ics.totalexpress.com.br/oper/edi_retorno_conf.php?reid=19172&ediretconf=12979";
  $declaracao = "https://ics.totalexpress.com.br/oper/edi_conf_csv.php?edicolconf_id=28855";

?>
<div class="container">

<h1>Clientes/Configurações de exemplo</h1><br>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Notfis
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <strong>NOTFIS 3.1</strong> - <a href=<?php echo $notfisInt;?>target="_blank"> RIACHUELO</a><br>
      <strong>NOTFIS 5.0</strong> - <a href=<?php echo $notfis5;?>target="_blank"> MERCUR</a><br>
    </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Ocorren
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <strong>OCORREN 5.0</strong> - <a href=<?php echo $oco5?> target="_blank"> C & C</a><br>
      <strong>OCORREN 3.1</strong> - <a href=<?php echo $ocorrenInt;?> target="_blank"> RIACHUELO</a><br>
    </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Intelipost
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <strong>NOTFIS 3.1</strong> - <a href=<?php echo $notfisInt;?> target="_blank"> RIACHUELO</a><br>
      <strong>OCORREN 3.1</strong> - <a href=<?php echo $ocorrenInt;?> target="_blank"> RIACHUELO</a><br>
      <strong>POD Intelipost</strong> - <a href=<?php echo $podInt;?> target="_blank"> PHILIP MORRIS</a><br>
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingFour">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
        Declaração de Conteúdo
      </button>
    </h2>
    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <strong>Declaração CSV</strong> - <a href=<?php echo $declaracao?> target="_blank"> CONFIGURAÇÃO</a><br>
    </div>
    </div>
  </div>
</div>