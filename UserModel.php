<?php

namespace eapdob\phpmvc;

use eapdob\phpmvc\db\DbModel;

/**
 * Class UserModel
 * @author Evgenii Poperezhai <eapdob@gmail.com>
 * @package eapdob\phpmvc
 */
abstract class UserModel extends DbModel
{
    abstract public function getDisplayName(): string;
}