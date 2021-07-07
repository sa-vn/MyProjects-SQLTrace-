<?php

declare(strict_types=1);

namespace App\Handler;

use App\Middleware\AuthenticationMiddleware;
use App\Service\CalculatorService;
use Laminas\Diactoros\Response\HtmlResponse;
use Mezzio\Router;
use Mezzio\Template\TemplateRendererInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

class HomePageHandler implements RequestHandlerInterface
{
    private $template;
    private $calcService;

    public function __construct(
        TemplateRendererInterface $template,
        CalculatorService $calcService
    ) {
        $this->template = $template;
        $this->calcService = $calcService;
    }

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $myVar = $request->getAttribute(AuthenticationMiddleware::class);
        $b = $this->calcService->calculate();
        var_dump($b);
        die;
        return new HtmlResponse($this->template->render('app::home-page'));
    }

}
