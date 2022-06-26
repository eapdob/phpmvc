<?php

namespace eapdob\phpmvc\middlewares;

use eapdob\phpmvc\Application;
use eapdob\phpmvc\exception\ForbiddenException;

/**
 * Class AuthMiddleware
 * @author Evgenii Poperezhai eapdob@gmail.com
 * @package app\core
 */
class AuthMiddleware extends BaseMiddleware
{
    public array $actions = [];

    public function __construct($actions = [])
    {
        $this->actions = $actions;
    }

    public function execute()
    {
        if (Application::isGuest()) {
            if (empty($this->actions) || in_array(Application::$app->controller->action, $this->actions)) {
                throw new ForbiddenException();
            }
        }
    }
}