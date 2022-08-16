<?php

namespace App\Caixa;

class Loteria {

  // URL base da API de loterias da caixa
  const URL_BASE = 'https://servicebus2.caixa.gov.br/portaldeloterias/api';

  // Metódo responsavel por obter os resultados da loteria da caixa
  public static function consultarResultado($loteria){

    //endpoint completo
    $endpoint = self::URL_BASE.'/'.$loteria;
    
    // inicia o cURL
    $curl = curl_init();

    //configura o curl
    curl_setopt_array($curl, [
      CURLOPT_URL => $endpoint,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_CUSTOMREQUEST => 'GET'
    ]);

    // executa o cURL
    $response = curl_exec($curl);

    // fecha o cURL
    curl_close($curl);

    echo "<pre>";
    print_r($response);
    echo "</pre>"; exit;
  }
}