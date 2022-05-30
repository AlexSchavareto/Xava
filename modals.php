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
     <pre>https://freight-calculation.gateway.linkapi.com.br/v1/tray?apiKey=</pre>
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
      Essa integração não precisamos informar nenhuma credencial, o cliente consegue seguir sozinho com o manual.
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
<div class="modal fade" id="gsenhaModal" tabindex="-1" aria-labelledby="gsenha" aria-hidden="true">
 <div class="modal-dialog modal-lg">
   <div class="modal-content">
     <div class="modal-header">
       <h5 class="modal-title" id="gsenha">De x Para - Amazon DBA</h5>
       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
     </div>
     <div class="modal-body">
     <?php echo generatePassword();?>
     </div>
     <div class="modal-footer">
       <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">OK</button>
       <button type="input" class="btn btn-primary" type="button" value="novaSenha" onclick='generatePassword()'>Gerar nova senha</button>
     </div>
   </div>
 </div>
</div>