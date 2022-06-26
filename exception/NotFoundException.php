<?php

namespace eapdob\phpmvc\exception;

/**
 * Class ForbiddenException
 * @author Evgenii Poperezhai <eapdob@gmail.com>
 * @package eapdob\phpmvc\exception
 */
class NotFoundException extends \Exception
{
    protected $message = 'Page not found';
    protected $code = 404;
}