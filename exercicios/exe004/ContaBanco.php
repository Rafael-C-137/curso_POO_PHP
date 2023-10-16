<?php 
class ContaBanco {
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;
 
    public function abrirConta($t) {
        $this->setTipo($t);
        $this->setStatus(true);
        if ($t == "CC") {
            $this->setSaldo(50);
        } elseif ($t == "CP") {
                $this->saldo = 150;
            }
    }
     
    public function fecharConta() {
        if($this->getSaldo() > 0) {
            echo "<p>Conta ainda tem dinheiro</p>";
        }elseif ($this->getSaldo() < 0) {
            echo "<p>Conta com débito negativo, favor realizar o pagamento antes dessa operação</p>";
        }else {
            $this->setStatus(false);
            echo "<p>Conta de ".$this->getDono()." fechada com sucesso</p>";
        }
    }

    public function depositar($v) {
        if($this->getStatus(true)) {
            $this->setSaldo($this->getSaldo() + $v);
            echo "<p>Deposito de R$ $v realizado na conta de ".$this->getDono()."</p>";
        } else {
            echo "<p>Impossivel depositar</p>";
        }
    }

    public function sacar($v) {
        if($this->getStatus()) {
            if($this->getSaldo() >= $v) {
                $this->setSaldo($this->getSaldo() - $v);
                echo "<p>Saque de R$ $v autorizado na conta de ".$this->getDono()."</p>";
            } else {
                echo "<p>Saldo Insuficiente para saque</p>";
            }
        } else {
            echo "<p>Impossivel sacar de uma conta fechada</p>";
        }
    }

    public function pagarMensal() {
        if($this->getTipo() == "CC") {
            $v = 12;
        }elseif($this->getTipo() == "CP") {
            $v = 20;
        }

        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() - $v);
            echo "<p>Mensalidade de R$ $v debita na conta de ".$this->getDono()."</p>";
            }else {
                echo "<p>Saldo insuficiente</p>";
            }
    }

    function __construct() {
        $this->setSaldo(0);
        $this->setStatus(false);
        echo "<p>Conta Criada com Sucesso!</p>";
    }

    function getnumConta() {
        return $this->numConta;
    }
    function geTtipo() {
        return $this->tipo;
    }
    function getDono() {
        return $this->dono;
    }
    function getSaldo() {
        return $this->saldo;
    }
    function getstatus() {
        return $this->status;
    }

    function setNumconta($numConta) {
        $this->numConta = $numConta;
    }
    function setTipo($tipo) {
        $this->tipo = $tipo;
    }
    function setDono($dono) {
        $this->dono = $dono;
    }
    function setSaldo($saldo) {
        $this->saldo = $saldo;
    }
    function setStatus($status) {
        $this->status = $status;
    }
}   
?>