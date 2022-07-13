<?php
  require_once("assets/head.php");
  require_once("assets/botoes.php");
  $ocorrenInt = "https://ics.totalexpress.com.br/oper/edi_retorno_conf.php?reid=13120&ediretconf=13228";
  $notfisInt = "https://ics.totalexpress.com.br/oper/edi_coleta_conf.php?reid=13120&confid=22545";
  $podInt = "https://ics.totalexpress.com.br/oper/edi_retorno_conf.php?reid=12707&ediretconf=19091";
  $notfis5 = "https://ics.totalexpress.com.br/oper/edi_coleta_conf.php?reid=13601&confid=23975";
  $oco5 = "https://ics.totalexpress.com.br/oper/edi_retorno_conf.php?reid=19172&ediretconf=12979";
  $declaracao = "https://ics.totalexpress.com.br/oper/edi_conf_csv.php?edicolconf_id=28855";
  $conembInt = "https://ics.totalexpress.com.br/oper/edi_faturamento_conf.php?reid=17717&fatarqconf_id=2767";
  $xmlcte = "https://ics.totalexpress.com.br/oper/edi_retorno_conf.php?reid=17717&ediretconf=14142";

?>
<div class="container">

<h1>Clientes/Configurações de exemplo</h1><br>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/gh/google/code-prettify@master/loader/run_prettify.js"></script>

<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Notfis
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <strong><li>NOTFIS 3.1</li></strong> - Cliente de Exemplo: <a href=<?php echo $notfisInt;?> target="_blank"> RIACHUELO</a><br> - Arquivo de Exemplo: <a href="/assets/Downloads/Notfis31.txt" download> DOWNLOAD</a> <hr>
      <strong><li>NOTFIS 5.0</li></strong> - Cliente de Exemplo: <a href=<?php echo $notfis5;?> target="_blank"> MERCUR</a><br>- Arquivo de Exemplo: <a href="/assets/Downloads/Notfis50.txt" download> DOWNLOAD</a>
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
      <strong><li>OCORREN 5.0</li></strong> - Cliente de Exemplo: <a href=<?php echo $oco5?> target="_blank"> C & C</a><br> - Arquivo de Exemplo: <a href=> DOWNLOAD</a> <hr>
      <strong><li>OCORREN 3.1</li></strong> - Cliente de Exemplo: <a href=<?php echo $ocorrenInt;?> target="_blank"> RIACHUELO</a><br> - Arquivo de Exemplo: <a href=> DOWNLOAD</a>
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
      <strong><li>NOTFIS 3.1</strong> - <a href=<?php echo $notfisInt;?> target="_blank"> RIACHUELO</a><br>
      <strong><li>OCORREN 3.1</strong> - <a href=<?php echo $ocorrenInt;?> target="_blank"> RIACHUELO</a><br>
      <strong><li>POD Intelipost</strong> - <a href=<?php echo $podInt;?> target="_blank"> PHILIP MORRIS</a><br>
      <strong><li>CONEMB </strong> - <a href=<?php echo $conembInt;?> target="_blank"> TEM NA TRENA</a><br>
      <strong><li>CTE (zip)</strong> - <a href=<?php echo $xmlcte;?> target="_blank"> TEM NA TRENA</a><br>
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
      <strong>Webservice NFo</strong> -  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
         Requisição de exemplo</button> Ignorar esse botão por enquanto

        <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Declaração de Conteúdo com Webservice</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  Para utilizar essa integração no Webservice, precisa utilizar o documento fiscal como "outros".
                  <pre class="prettyprint lang-xml"> &lt;&#x3f;xml version&#x3d;&quot;1.0&quot;&#x3f;&gt;
&lt;users&gt;
&nbsp;&nbsp;&nbsp;&nbsp;&lt;user uid&#x3d;&quot;user12&quot; name&#x3d;&quot;Matt&quot; mail&#x3d;&quot;user12&#x40;example.com&quot;&#x2f;&gt;
&lt;&#x2f;users&gt;</pre>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>

    </div>
    </div>
  </div>
</div>