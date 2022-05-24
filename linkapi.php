<?php
    require_once("assets/head.php");

?>

<div class="container text-center"> <br>
<h1>Plataformas Integradoras</h1>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</div>
<div class= "container"> 

<div class="row row-cols-1 row-cols-md-6 g-1">
  <div class="col">
    <div class="card">
    <img src="assets/traylogo.jpg" class="img-fluid rounded-start" alt="Tray">
    
      <div class="card-body">
        <h5 class="card-title">TRAY</h5>
        <p class="card-text">Integração possibilita: <br>
                                – Consultar fretes <br>
                                – Solicitar coletas <br>
                                – Tracking de pedidos <br>
                                <a href = "https://totalexpress.com.br/integracao-tray/" target="_blank"> Ver Manual </a></p></p>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#trayModal">
                                Configuração</button>

        <!-- Modal -->
          <div class="modal fade" id="trayModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Gerar URL de rastreio TRAY</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                - Configurar coleta Webservice e Tracking no ICS. <br>
                - Informar credenciais de Webservice ao cliente. <hr>

                    Atribuir o ID gerado na LinkApi no link abaixo: <br>
                <pre>https://freight-calculation.gateway.linkapi.com.br/v1/tray?apiKey=</pre>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">OK</button>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="assets/blinglogo.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">BLING</h5>
        <p class="card-text">Integração possibilita: <br>
                                – Consultar fretes <br>
                                – Solicitar coletas <br>
                                – Tracking de pedidos <br>
                                <a href = "https://ajuda.bling.com.br/hc/pt-br/articles/360047026793-Integra%C3%A7%C3%A3o-com-a-Total-Express" target="_blank"> Ver Manual </a></p>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#blingModal">
                                Configuração</button>

        <!-- Modal -->
          <div class="modal fade" id="blingModal" tabindex="-1" aria-labelledby="bling" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="bling">Bling</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                - Configurar coleta Webservice e Tracking no ICS. <br>
                - Informar credenciais de Webservice ao cliente. <hr>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">OK</button>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
</div>