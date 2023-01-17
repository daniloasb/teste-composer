<?php

namespace Daniloasb\TesteComposer;

class Calculadora{
    
    public function soma(...$n){  

        return array_sum($n);
    }

    public function subtracao($a, $b){  

        return $a-$b;
    }

    public function multiplicacao($a, $b){  

        return $a*$b;
    }

    public function divisao($a, $b){  

        return $a/$b;
    }

}