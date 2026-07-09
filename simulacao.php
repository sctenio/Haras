<?php

$parcelas = $_POST ["sel_parcelas"];
$idade = $_POST ["num_idade"];
$valor = $_POST ["num_valor"];

if ($parcelas == 1)
    {
        echo "<h1>Você pagará R$ $valor</h1>";
    }
    else if ($parcelas == 12)
            {

            }