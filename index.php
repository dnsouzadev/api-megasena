<?php

// Autoload de classes do composer
require __DIR__.'/vendor/autoload.php';

//Dependencias do projeto
use \App\Caixa\Loteria;

// Executa a consulta dos dados do concurso
$resultado = Loteria::consultarResultado('megasena');
