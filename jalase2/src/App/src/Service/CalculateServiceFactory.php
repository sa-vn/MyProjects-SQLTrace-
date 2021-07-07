<?php

namespace App\Service;


use Laminas\ServiceManager\Factory\FactoryInterface;
use Mezzio\Router\RouterInterface;
use Psr\Container\ContainerInterface;

class CalculateServiceFactory
{

    public function __invoke(ContainerInterface $container)
    {
        return new CalculatorService();
    }
}
