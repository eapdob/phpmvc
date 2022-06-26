<?php

namespace eapdob\phpmvc;

use eapdob\phpmvc\middlewares\BaseMiddleware;

/**
 * Class Controller
 * @author Evgenii Poperezhai eapdob@gmail.com
 * @package eapdob\phpmvc
 */
class Controller
{
    public string $layout = 'main';
    public string $action = '';

    /**
     * @var \eapdob\phpmvcframeworkcore\middlewares\BaseMiddleware[]
     */
    protected array $middlewares = [];

    public function setLayout($layout)
    {
        $this->layout = $layout;
    }

    public function render($view, $params = [])
    {
        return Application::$app->view->renderView($view, $params);
    }

    public function registerMiddleware(BaseMiddleware $middleware)
    {
        $this->middlewares[] = $middleware;
    }

    public function getMiddlewares(): array
    {
        return $this->middlewares;
    }
}