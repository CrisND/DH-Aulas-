<?php 

/*

$contador = 1; 

while ($contador <= 10) {
    echo "$contador <br>"; 
    $contador++; // $contador = $contador + 1
}

$cont = 11; 

do {
    echo 'Ola <br>';
    $cont++; 
} while ($cont <=5); 

for ($contador1=0; $contador1 < 30; $contador1++) { 
    echo $contador1 . '<br>'; // "." é para concatenar 
}

*/

$cidades = [            // array começa com 0
    'Sao Paulo', 
    'Paris', 
    'Taboão da Serra', 
    'Guarulhos', 
    'Osasco', 
    'Diadema'
]; 

echo $cidades [2];

echo '<br>';

foreach ($cidades as $chave => $cidades) { 
    if ($chave === 2) {
        continue; 
    }
    echo $chave . $cidades . '<br>'; 
 
 /*   
    if ($chave === 2) {
        break; // valido para toda repetição 
    }
    */

}

