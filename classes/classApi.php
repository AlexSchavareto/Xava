<?php
    Class GerarTokenApi{
    function gerarToken(){
        $request = '{"grant_type": "password","username": "hidrogenio-api","password": "UaN8q@uun"}';
          $curlOptions = [
              CURLOPT_URL => 'https://apis.totalexpress.com.br/ics-seguranca/v1/oauth2/tokenGerar',
              CURLOPT_POST => true,
              CURLOPT_HTTPHEADER => [
                  'Authorization: Basic SUNTOnRvdGFs',
                  'Content-Type: application/json',
                  'x-li-format: json'
              ],
              CURLOPT_POSTFIELDS => $request,
          ];
          
          $ch = curl_init();
          curl_setopt_array($ch, $curlOptions);
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
          $token = json_decode(curl_exec($ch));
          $ch = curl_close($ch);
          echo $token->access_token;
        }

    function buscarRota(){
            //API Gerar Token
    $request = '{"grant_type": "password","username": "hidrogenio-api","password": "UaN8q@uun"}';
    $curlOptions = [
        CURLOPT_URL => 'https://apis.totalexpress.com.br/ics-seguranca/v1/oauth2/tokenGerar',
        CURLOPT_POST => true,
        CURLOPT_HTTPHEADER => [
            'Authorization: Basic SUNTOnRvdGFs',
            'Content-Type: application/json',
            'x-li-format: json'
        ],
        CURLOPT_POSTFIELDS => $request,
    ];
    
    $ch = curl_init();
    curl_setopt_array($ch, $curlOptions);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $token = json_decode(curl_exec($ch));
    $ch = curl_close($ch);
        if (isset($token->access_token)){
            $bearerToken = $token->access_token;
            //API Buscar Rota
            $request = '{"reid": "28223","cep": "38755000"}';

            $curlOptions = [
                CURLOPT_URL => 'https://apis.totalexpress.com.br/ics-edi/v1/coleta/smartLabel/rota/buscar',
                CURLOPT_POST => true,
                CURLOPT_HTTPHEADER => [
                    'Content-Type: application/json',
                    'x-li-format: json'
                ],
                CURLOPT_POSTFIELDS => $request,
            ];

            $ch = curl_init();
            curl_setopt_array($ch, $curlOptions);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BEARER);
            curl_setopt($ch,CURLOPT_XOAUTH2_BEARER, $token->access_token);
            $rota = json_decode(curl_exec($ch));
            echo $rota->descricao;
    }
        
    }
}

Class Outra extends GerarTokenApi{
    function alex(){
        echo $rota->descricao;
    }
}
?>