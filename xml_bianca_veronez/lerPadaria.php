<?php
$xml = simplexml_load_file("padaria.xml");

foreach ($xml->children() as $salgado ){
    echo "Nome: " . $salgado -> nome . "<br>";
    echo "Preço: " . $salgado -> preco . "<br>";
    echo "Calorias: " . $salgado -> calorias . "<br> <br>";
}

?>
