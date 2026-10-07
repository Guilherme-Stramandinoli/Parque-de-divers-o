<?php 

function verificarURL($URL) {
    return $URL == parse_url($_SERVER('URL_DA_SOLICITAÇÃO'),PHP_URL_PATH);
}

function verificarMetodo ($metodo){
    return $metodo == $_SERVER['REQUEST_METHOD'];
}

$rotas [
   [
   [
   "URL" => "/parque",
   "metodo" => "GET",
   "conteudo" => "parque de diversão"
   ],
   [
   "URL" => "/parque/carrinhobatebate",
   "metodo" => "GET",
   "conteudo" => "Carrinho Bate-Bate"
   ],
   [
   "URL" => "/parque/rodagigante",
   "metodo" => "GET",
   "conteudo" => "Roda Gigante"
   ],
   [
    "URL" => "/parque/montanharussa",
    "metodo" => "GET",
   "conteudo" => "Montanha Russa"
   ],
   [
    "URL" => "/parque/barcoviking",
    "metodo" => "GET",
    "conteudo" => "Barco Viking"
   ],
   [
    "URL" => "/parque/carrossel",
    "metodo" => "GET",
   "conteudo" => "Carrosel"
   ], 
   [
    "URL" => "/parque/quedalivre",
    "metodo" => "GET",
    "conteudo" => "Queda-livre"
   ]
   ]
   ];

foreach ($rotas as $rotas) {
    if(verificarURL($rota['url']) && verificarMetodo($rota['metodo'])) 
    { echo $rota('conteudo');}
}

?>