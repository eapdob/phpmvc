<?php

namespace eapdob\phpmvc;

/**
 * Class Response
 * @author Evgenii Poperezhai <eapdob@gmail.com>
 * @package eapdob\phpmvc
 */
class Response
{
    public function setStatusCode(int $code)
    {
        return http_response_code($code);
    }

    public function redirect(string $url)
    {
        header('Location: ' . $url);
    }
}