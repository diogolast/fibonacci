<?php

class Fibonacci
{
    /**
     * Exemplo de formas de Fibonacci
     *
     * 0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144, ...
     *
     */


    /**
     * Função modo iterativa
     * @param $n
     * @return array
     */
    public function iterativo($n)
    {
        $start_time = microtime(TRUE);

        $atual = 0;
        $anterior = 0;
        $resultado[] = $atual;
        for ($i = 1; $i <= $n; $i++) {
            if ($i == 1) {
                $atual = 1;
                $anterior = 0;
            } else {
                $atual += $anterior;
                $anterior = $atual - $anterior;
            }
            $resultado[] = $atual;
        }

        $end_time = microtime(TRUE);

        $benchmark = $end_time - $start_time;

        $saida = [
            'Número de Fibonacci' => $resultado,
            'Benchmark' => round($benchmark * 1000, 4) . ' ms'
        ];

        return $saida;
    }

    public function recursivo($n)
    {
        $start_time = microtime(TRUE);
        $fibo = $this->fiboRecursivo($n);
        $end_time = microtime(TRUE);

        $benchmark = $end_time - $start_time;

        $saida = [
            'Número de Fibonacci' => $fibo,
            'Benchmark' => round($benchmark * 1000, 4) . ' ms'
        ];

        return $saida;
    }

    public function fiboRecursivo($n)
    {
        if ($n < 2) {
            return $n;
        } else {
            return $a = $this->fiboRecursivo($n - 1) + $this->fiboRecursivo($n - 2);
        }
    }

    public function matricial($n)
    {
        $start_time = microtime(TRUE);
        $vetor = array();
        $vetor[0] = 0;
        $vetor[1] = 1;
        for ($i = 2; $i <= $n; $i++) {
            $vetor[$i] = $vetor[$i - 1] + $vetor[$i - 2];
        }

        $end_time = microtime(TRUE);

        $benchmark = $end_time - $start_time;

        $saida = [
            'Número de Fibonacci' => $vetor,
            'Benchmark' => round($benchmark * 1000, 4) . ' ms'
        ];

        return $saida;
    }
}