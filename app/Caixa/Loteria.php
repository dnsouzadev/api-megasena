<?php

namespace App\Caixa;

class Loteria {

  // URL base da API de loterias da caixa
  const URL_BASE = 'https://servicebus2.caixa.gov.br/portaldeloterias/api';

  // Metódo responsavel por obter os resultados da loteria da caixa
  public static function consultarResultado($loteria){
    echo "<pre>";
    print_r($loteria);
    echo "</pre>";
  }

}