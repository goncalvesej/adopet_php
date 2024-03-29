<?php
namespace adopet\View;

use Psr\Http\Message\ResponseInterface;
use Zend\Diactoros\Response;

class ViewRenderer implements IViewRenderer
{
  private $twigEnvironment;

  public function __construct(\Twig_Environment $twigEnvironment)
  {
    $this->twigEnvironment = $twigEnvironment;
  }

  public function render(string $template, array $context = []): ResponseInterface
  {
    $result = $this->twigEnvironment->render($template, $context);
    $response = new Response();
    $response->getBody()->write($result);
    return $response;
  }
}
