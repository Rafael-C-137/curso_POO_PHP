<?php 
require_once "Lutador.php";
class Luta {
    //***ATRIBUTOS***
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

    //***MÉTODOS PÚBLICOS***
    public function marcarLuta($l1, $l2) {
        if ($l1->getCategoria() === $l2->getCategoria() && ($l1 !== $l2))  {
            $this->aprovada = true;
            $this->desafiado = $l1;
            $this->desafiante = $l2;
        } else {
            $this->aprovada = false;
            $this->desafiado = null;
            $this->desafiante = null;

        }
    }

    public function lutar() {
        if ($this->aprovada) {
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            $vencedor = rand(0, 2);
            switch ($vencedor) {
                case 0://Empate
                    echo "<p>Empate!</p>";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                    break;
                    
                case 1://Desafiado vence
                    echo "<p>".$this->desafiado->getNome()." Venceu!</p>";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;
                        
                case 2://desafiante vence
                    echo "<p>".$this->desafiante->getNome()." Venceu!</p>";
                    $this->desafiante->ganharLuta();
                    $this->desafiado->perderLuta();
                    break;

                    default: // Caso não esperado
                    echo "<p>Resultado inesperado!</p>";
            }
        } else {
            echo "<p>Luta não pode acontecer!</p>";
        }
    }  

    //MÉTODOS ESPECIAIS
    function getDesafiado () {
        return $this->desafiado;
    }

    function getDesafiante() {
        return $this->desafiado;
    }

    function getRounds() {
        return $this->rounds;
    }

    function getAprovada() {
        return $this->aprovada;
    }

    function setDesafiado($desafiado){
        $this->desafiado = $desafiado;
    }

    function setDesafiante($desafiante) {
        $this->desafiante = $desafiante;
    }

    function setRounds($rounds) {
        $this->rounds = $rounds;
    }

    function setAprovada($aprovada) {
        $this->aprovada = $aprovada;
    }
}
?>