<?php

namespace eapdob\phpmvc\exception;

/**
 * Class ForbiddenException
 * @author Evgenii Poperezhai eapdob@gmail.com
 * @package eapdob\phpmvcframeworkcore\exception
 */
class ForbiddenException extends \Exception
{
    protected $message = 'You don\'t have permission to access page';
    protected $code = 403;
}