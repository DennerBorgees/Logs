<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogsController extends Controller
{
    public function sum($num1, $num2)
    {
        $sum = $num1 + $num2;

        logger()->info('Soma Feita');

        return $sum;
    }

    public function sub($num1, $num2)
    {
        $sub = $num1 - $num2;

        logger()->debug('Sub feita', [
            'num1' => $num1,
            'num2' => $num2,
            'sub' => $sub
        ]);

        return $sub;
    }

    public function div($num1, $num2)
    {
        $div = $num1 / $num2;

        if($num2 == 0)
        {
            logger()->error('Divisor zero!');
            return;
        }

        logger()->info('Div feita' );

        return $div;
    }

    public function mult($num1, $num2)
    {
        if($num1 < 0 || $num2 < 0)
        {
            logger()->warning('Negativo');
            return;
        }

        $mult = $num1 * $num2;

        return $mult;
    }
}
