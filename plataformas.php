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
    
      <div class="card-body"  style="width: 200px;">

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
      <img src="assets/frenet.png" class="card-img-top rounded float-start" style="width: 200px" alt="Frenet">
      <div class="card-body">
        <h5 class="card-title">FRENET</h5>
        <p class="card-text">Integração possibilita: <br>
                                – Consultar fretes <br>
                                 <br>
                                 <br><br>
                                <a href = "https://ajuda.frenet.com.br/s/article/integracao-total-express" target="_blank"> Ver Manual </a></p>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#frenetModal">
                                Configuração</button>
          <!-- Modal -->
          <div class="modal fade" id="frenetModal" tabindex="-1" aria-labelledby="frenet" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="frenet">Frenet</h5>
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
      <img src="assets/nuvemshop.png" class="card-img-top" style="width: 200px" alt="Nuvemshop">
      <div class="card-body">
        <h5 class="card-title">Nuvemshop</h5>
        <p class="card-text">Integração possibilita: <br>
                                – Consultar fretes <br>
                                – Solicitar coletas <br>
                                – Tracking de pedidos <br>
                                <a href = "https://totalexpress.com.br/integracao-nuvemshop/" target="_blank"> Ver Manual </a></p>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#nuvemshopModal">
                                Configuração</button>
          <!-- Modal -->
          <div class="modal fade" id="nuvemshopModal" tabindex="-1" aria-labelledby="nuvemshop" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="nuvemshop">Nuvemshop</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                - Configurar coleta Webservice e Tracking ssssno ICS. <br>
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
    <div class="card" >
      <img src="assets/tiny.png" class="card-img-top" style="width: 200px" alt="Tiny">
      <div class="card-body">
        <h5 class="card-title">Tiny</h5>
        <p class="card-text">Integração possibilita: <br>
                                – Consultar fretes <br>
                                – Solicitar coletas <br>
                                – Tracking de pedidos <br>
                                <a href = "https://www.tiny.com.br/integracoes/total-express" target="_blank"> Ver Manual </a></p>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tinyModal">
                                Configuração</button>
          <!-- Modal -->
          <div class="modal fade" id="tinyModal" tabindex="-1" aria-labelledby="tiny" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="tiny">TINY</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                - Configurar coleta Webservice e Tracking ssssno ICS. <br>
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
      <img src="assets/vtex.png" class="card-img-center" alt="...">
      <div class="card-body"><br><br>
        <h5 class="card-title">Vtex</h5>
        <p class="card-text">Integração possibilita: <br>
                                – Consultar fretes <br>
                                – Solicitar coletas <br>
                                – Tracking de pedidos <br>
                                <a href = "https://totalexpress.com.br/integracao-vtex/" target="_blank"> Ver Manual </a></p>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#vtexModal">
                                Configuração</button>
          <!-- Modal -->
          <div class="modal fade" id="vtexModal" tabindex="-1" aria-labelledby="vtex" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="tiny">Vtex</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                - Configurar coleta Webservice e Tracking ssssno ICS. <br>
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
</div>


