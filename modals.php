<?php
  $linktray = '<a href = "https://atendimento.tray.com.br/hc/pt-br/articles/360053111752-Pr%C3%A9-inser%C3%A7%C3%A3o-da-URL-de-Rastreio-em-suas-Tabelas-de-Frete-e-Pedidos" target="_blank">' 
?>
<!-- De Para DBA -->
<div class="modal fade" id="dbaModal" tabindex="-1" aria-labelledby="dba" aria-hidden="true">
 <div class="modal-dialog modal-lg">
   <div class="modal-content">
     <div class="modal-header">
       <h5 class="modal-title" id="dba">De x Para - Amazon DBA</h5>
       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
     </div>
     <div class="modal-body">
     <?php require_once("assets/deparadba.php")?>
     </div>
     <div class="modal-footer">
       <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">OK</button>
     </div>
   </div>
 </div>
</div>

<!-- Tiny -->
<div class="modal fade" id="tinyModal" tabindex="-1" aria-labelledby="tiny" aria-hidden="true">
 <div class="modal-dialog modal-lg">
   <div class="modal-content">
     <div class="modal-header">
       <h5 class="modal-title" id="tiny">TINY</h5>
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


<!-- Tray -->
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
     <pre>https://freight-calculation.gateway.linkapi.com.br/v1/tray?apiKey=</pre> <hr>

     - Como inserir a URL de rastreio <?php echo $linktray ?> Ver Manual </a> <br>
     - O cliente realizando essa configuração irá enviar o link para o cliente final. <hr>
     - <strong>URL Rastreio da Total:</strong>  <br> http://tracking.totalexpress.com.br/poupup_track.php?reid=<font color="#FF0000">wwww</font>&pedido=<font color="#FF0000">xxxx</font>&nfiscal=<font color="#FF0000">yyyyy</font> <br>
     <font color="#FF0000">wwww</font> = numero de registro na Total <br>
     <font color="#FF0000">xxxx</font>= numero do pedido <br>
     <font color="#FF0000">yyyy</font> = numero da nota fiscal <br>
     </div>
     <div class="modal-footer">
       <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">OK</button>
     </div>
   </div>
 </div>
</div>

<!-- Bling -->
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

<!-- Frenet -->
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

<!-- Nuvemshop -->
<div class="modal fade" id="nuvemshopModal" tabindex="-1" aria-labelledby="nuvemshop" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="nuvemshop">Nuvemshop</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      - Verificar se a conta se encontra Ativa no ICS <br><hr>
      Essa integração não precisamos informar nenhuma credencial, o cliente consegue seguir sozinho com o manual. <hr>
      Obs: Não funciona mais pela LinkApi, agora a integração está pela Digibee.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">OK</button>
      </div>
    </div>
  </div>
</div>

<!-- Vtex -->
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

<!-- Gerar Senha -->
<div class="modal fade" id="gsenhaModal" tabindex="-1" aria-labelledby="gsenha" aria-hidden="true" >
 <div class="modal-dialog modal-lg">
   <div class="modal-content">
     <div class="modal-header">
       <h5 class="modal-title" id="gsenha">Gerador de Senha</h5>
       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
     </div>
     <div class="modal-body">
     <script>
        function getPassword() {
      var chars = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJLMNOPQRSTUVWXYZ!@#$%&";
      var passwordLength = 8;
      var password = "";

      for (var i = 0; i < passwordLength; i++) {
        var randomNumber = Math.floor(Math.random() * chars.length);
        password += chars.substring(randomNumber, randomNumber + 1);
      }
      document.getElementById('password').value = password
    }
    </script>
     <input type="text" placeholder="Clique no botão abaixo" id="password">
     </div>
     <div class="modal-footer">
       <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">OK</button>
       <button type="submit" class="btn btn-primary"  name="enviar" value="enviar" onclick="getPassword()">Gerar nova senha</button>
     </div>
   </div>
 </div>
</div>

