<?php

class Rota
{
    /**
     * Busca o código da rota
     * @param int $reid id do remetente
     * @param string $cep cep do remetente
    */
    public function buscarRota($reid, $cep)
    {
        $bearerToken = $this->gerarToken();
        //API Buscar Rota
        $request = '{"reid": ' . $reid . ',"cep": "' . $cep . '"}';

        $curlOptions = [
            CURLOPT_URL => 'https://apis.totalexpress.com.br/ics-edi/v1/coleta/smartLabel/rota/buscar',
            CURLOPT_POST => true,
            CURLOPT_HTTPHEADER => [
                'Content-Type: application/json',
            ],
            CURLOPT_POSTFIELDS => $request,
        ];

        $ch = curl_init();
        curl_setopt_array($ch, $curlOptions);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BEARER);
        curl_setopt($ch,CURLOPT_XOAUTH2_BEARER, $bearerToken);
        $rota = json_decode(curl_exec($ch), true);
        return $rota['descricao'];
    }

    public function gerarToken()
    {
         //API Gerar Token
         $request = '{"grant_type": "password","username": "hidrogenio-api","password": "UaN8q@uun"}';
         $curlOptions = [
             CURLOPT_URL => 'https://apis.totalexpress.com.br/ics-seguranca/v1/oauth2/tokenGerar',
             CURLOPT_POST => true,
             CURLOPT_HTTPHEADER => [
                 'Authorization: Basic SUNTOnRvdGFs',
                 'Content-Type: application/json',
             ],
             CURLOPT_POSTFIELDS => $request,
         ];
         
         $ch = curl_init();
         curl_setopt_array($ch, $curlOptions);
         curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
         $resultado = curl_exec($ch);
         $token = json_decode($resultado, true);
         $ch = curl_close($ch);
         return $token['access_token'];
    }
}