<?php

namespace eapdob\phpmvc\middlewares;

/**
 * Class BaseMiddleware
 * @author Evgenii Poperezhai eapdob@gmail.com
 * @package app\core
 */
abstract class BaseMiddleware
{
    abstract public function execute();
}