<?php 
    
    $botaoVisualizar = '<button class="btn btn-primary">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
      <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
      <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
    </svg> Visualizar</button>';
    $botaoDownload = '<button class="btn btn-success">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-down" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M3.5 10a.5.5 0 0 1-.5-.5v-8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 0 0 1h2A1.5 1.5 0 0 0 14 9.5v-8A1.5 1.5 0 0 0 12.5 0h-9A1.5 1.5 0 0 0 2 1.5v8A1.5 1.5 0 0 0 3.5 11h2a.5.5 0 0 0 0-1h-2z"/>
      <path fill-rule="evenodd" d="M7.646 15.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 14.293V5.5a.5.5 0 0 0-1 0v8.793l-2.146-2.147a.5.5 0 0 0-.708.708l3 3z"/>
    </svg> Download</button>';

    $requestnfo = '<?xml version="1.0" encoding="UTF-8"?>
    <SOAP-ENV:Envelope xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/" xmlns:SOAP-ENC="http://schemas.xmlsoap.org/soap/encoding/" xmlns:ns1="urn:RegistraColeta" xmlns:ns2="http://edi.totalexpress.com.br/soap/webservice_v24.total" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" SOAP-ENV:encodingStyle="http://schemas.xmlsoap.org/soap/encoding/">
       <SOAP-ENV:Body>
          <ns1:RegistraColeta>
             <RegistraColetaRequest xsi:type="ns2:RegistraColetaRequest">
                <CodRemessa xsi:type="xsd:string">00</CodRemessa>
                <Encomendas SOAP-ENC:arrayType="ns2:Encomenda[2]" xsi:type="ns2:Encomendas">
                   <item xsi:type="ns2:Encomenda">
                      <TipoServico xsi:type="xsd:nonNegativeInteger">1</TipoServico>
                      <TipoEntrega xsi:type="xsd:nonNegativeInteger">0</TipoEntrega>
                      <Volumes xsi:type="xsd:nonNegativeInteger">1</Volumes>
                      <CondFrete xsi:type="xsd:string">CIF</CondFrete>
                      <Pedido xsi:type="xsd:string">00000</Pedido>
                      <IdCliente xsi:type="xsd:string">000000</IdCliente>
                      <Natureza xsi:type="xsd:string">xxxxxxx</Natureza>
                      <IsencaoIcms xsi:type="xsd:nonNegativeInteger">0</IsencaoIcms>
                      <DestNome xsi:type="xsd:string">xxxxxxx</DestNome>
                      <DestCpfCnpj xsi:type="xsd:string">00000000</DestCpfCnpj>
                      <DestEnd xsi:type="xsd:string">xxxxxxxxx</DestEnd>
                      <DestEndNum xsi:type="xsd:string">0000000</DestEndNum>
                      <DestCompl xsi:type="xsd:string" />
                      <DestBairro xsi:type="xsd:string">xxxxxx</DestBairro>
                      <DestCidade xsi:type="xsd:string">xxxxxxxx</DestCidade>
                      <DestEstado xsi:type="xsd:string">xx</DestEstado>
                      <DestCep xsi:type="xsd:nonNegativeInteger">0000000</DestCep>
                      <DocFiscalO SOAP-ENC:arrayType="ns2:DocFiscalOutroTipo[1]" xsi:type="ns2:DocFiscalO">
                         <item xsi:type="ns2:DocFiscalOutroTipo">
                            <NfoTipo xsi:type="xsd:string">00</NfoTipo>
                            <NfoNumero xsi:type="xsd:nonNegativeInteger">000000</NfoNumero>
                            <NfoData xsi:type="xsd:date">2020-05-29</NfoData>
                            <NfoValTotal xsi:type="xsd:decimal">20.99</NfoValTotal>
                            <NfoValProd xsi:type="xsd:decimal">33.32</NfoValProd>
                            <NfoCfop xsi:type="xsd:nonNegativeInteger">000</NfoCfop>
                         </item>
                      </DocFiscalO>
                </Encomendas>
             </RegistraColetaRequest>
          </ns1:RegistraColeta>
       </SOAP-ENV:Body>
    </SOAP-ENV:Envelope>';