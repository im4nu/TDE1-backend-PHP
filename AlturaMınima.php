<?php
$input = readline("Digite a quantidade de brinquedos e sua altura (em centímetros) separados por um espaço: ");
$alturaMinimaDeCadaBrinquedoInput = readline("Digite a altura mínima de cada brinquedo separada por um espaço: ");

list($brinquedos, $altura) = explode(' ', $input);

$alturasMinimas = explode(' ', $alturaMinimaDeCadaBrinquedoInput);

$alturaMinimaDeCadaBrinquedo = [];

for ($i = 0; $i < $brinquedos; $i++) {
    if (isset($alturasMinimas[$i])) {
        $alturaMinimaDeCadaBrinquedo[] = $alturasMinimas[$i];
    }
}

$podeIrEmQuantosBrinquedos = 0;

for ($i = 0; $i < count($alturaMinimaDeCadaBrinquedo); $i++){
    if ($alturaMinimaDeCadaBrinquedo[$i] <= $altura) {
        $podeIrEmQuantosBrinquedos++;
    }
}

echo "Pode ir em $podeIrEmQuantosBrinquedos brinquedos";
?>
