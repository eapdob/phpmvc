<?php

namespace eapdob\phpmvc\form;

use eapdob\phpmvc\Model;

/**
 * Class Form
 * @author Evgenii Poperezhai <eapdob@gmail.com>
 * @package eapdob\phpmvcframeworkcore\form
 */
class Form
{
    public static function begin($action, $method)
    {
        echo sprintf('<form action="%s" method="%s">', $action, $method);
        return new Form();
    }

    public static function end()
    {
        echo '</form>';
    }

    public function field(Model $model, $attribute)
    {
        return new InputField($model, $attribute);
    }
}