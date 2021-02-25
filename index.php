<?php
$saldo = 1000.00;
$saque = 1000.00;

if($saque <= $saldo) {
    $saldo = $saldo - $saque;
    echo "Valor sacado: R$ " . $saque . "\n";
} else {
    echo "Valor do saque superior ao valor do saldo!!!\n";
}
