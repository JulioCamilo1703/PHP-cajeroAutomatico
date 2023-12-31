<?php

    require_once 'cajeroAutomatico.php';

    echo "CAJERO AUTOMATICO". "<br>";
    $cajeroTransferencia = new Transferencia();
    $cajeroDepositar = new Depositar();
    $cajeroRetiro = new Retiro();

    // Consultar saldo antes de operaciones
    $cajeroTransferencia->consultarSaldo();

    // Realizar una transferencia
    $transferencia = 200;
    $destinoTransferencia = "CuentaDestino123";
    $cajeroTransferencia->transferir($transferencia, $destinoTransferencia);

    // Consultar saldo después de transferencia
    
    $cajeroTransferencia->consultarSaldo();

    // Realizar un depósito
    $deposito = 300;
    $cajeroDepositar->depositar($deposito);

    // Consultar saldo después de depósito
    $cajeroDepositar->consultarSaldo();

    // Realizar un retiro
    $retiro = 150;
    $cajeroRetiro->cajeroRetiro($retiro);

    // Consultar saldo después de retiro
    $cajeroRetiro->consultarSaldo();
            
?>