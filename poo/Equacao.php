<?php
class Equacao
{
    public $a;
    public $b;
    public $c;

    function __construct($a, $b = 0, $c = 0)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function calcularDelta()
    {
        return $this->b * $this->b - 4 * $this->a * $this->c;
    }

    public function calcularX1()
    {
        return (-$this->b + sqrt($this->calcularDelta())) / 2 * $this->a;
    }

    public function calcularX2()
    {
        return (-$this->b - sqrt($this->calcularDelta())) / 2 * $this->a;
    }

    public function resultado()
    {
        $delta = $this->calcularDelta();
        if ($delta < 0) {
            $resultado = "Não existe raizes reais.";
        } else {
            $resultado = ($delta == 0) ? "Existem duas raizes reais e iguais." : "Existem duas raizes reais e diferentes.";
            $resultado .= "<br>Delta = " . $delta;
            $resultado .= "<br>X1 = " . $this->calcularX1();
            $resultado .= "<br>X2 = " . $this->calcularX2();
        }
        return $resultado;
    }
}
