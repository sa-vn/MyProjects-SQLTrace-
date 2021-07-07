<?php declare(strict_types=1);

namespace App\Service;

use Mezzio\Router\RouteResult;

class CalculatorService
{

    public function calculate(): float
    {
        return 2 * 2;
    }
}
