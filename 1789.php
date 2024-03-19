<?php
function nivelVelocidade($velocidades) {
    $mais_veloz = max($velocidades);

    if ($mais_veloz < 10) {
        return 1;
    } elseif ($mais_veloz < 20) {
        return 2;
    } else {
        return 3;
    }
}

while (($linha1 = fgets(STDIN)) !== false && ($linha2 = fgets(STDIN)) !== false) {
    
    $numero_lesmas = intval($linha1);

    $velocidades = array_map('intval', explode(' ', $linha2));

    $nivel = nivelVelocidade($velocidades);

    echo $nivel . "\n";
}
?>