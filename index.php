<?php

    $frutas = [
        "Banana",
        "Maçã",
        "Pêra",
        "Melancia",
        "Melão",
        "Tomato",
        "Uva",
    ];

    $frutaAProcurar = "Maçã";

    $encontrei = false;

    foreach($frutas as $chave => $fruta){
        if($fruta == $frutaAProcurar){
            echo "Fruta deletada - $fruta  ";
            unset($frutas[$chave]);
            $encontrei = true;
        }
    }
    if(!$encontrei){
    echo "Fruta não encontrada";
    }

    print_r($frutas);
?>