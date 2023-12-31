<?php
    class Cajero {
        protected $saldo = 3000; // Saldo inicial
    
        public function consultarSaldo() {
            echo "Saldo actual: $".$this->saldo. "<br>";
        }
    }
    
    class Transferencia extends Cajero {
        public function transferir($cantidad, $cuentaDestino) {
            if ($cantidad <= $this->saldo) {
                $this->saldo -= $cantidad;
                echo "Transferencia de $".$cantidad." a la cuenta ".$cuentaDestino." exitosa. Nuevo saldo: $".$this->saldo. "<br>";
                $this->cajeroRetiro($cantidad);
            } else {
                echo "Fondos insuficientes para realizar la transferencia. <br>";
            }
        }
    
        private function cajeroRetiro($cantidad) {
            echo "Retirando efectivo: $".$cantidad. "<br>";
        }
    }
    
    class Depositar extends Cajero {
        public function depositar($cantidad) {
            $this->saldo += $cantidad;
            echo "Depósito de $".$cantidad." realizado. Nuevo saldo: $".$this->saldo. "<br>";
        }
    }
    
    class Retiro extends Cajero {
        public function cajeroRetiro($cantidad) {
            if ($cantidad <= $this->saldo) {
                $this->saldo -= $cantidad;
                echo "Retiro de $".$cantidad." realizado. Nuevo saldo: $".$this->saldo. "<br>";
            } else {
                echo "Fondos insuficientes para realizar el retiro.". "<br>";
            }
        }
    }
?>