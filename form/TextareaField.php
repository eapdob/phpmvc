<?php

namespace eapdob\phpmvc\form;

/**
 * Class TextareaField
 * @author Evgenii Poperezhai eapdob@gmail.com
 * @package eapdob\phpmvcframeworkcore\form
 */
class TextareaField extends BaseField
{
    public function renderInput(): string
    {
        return sprintf('<textarea name="%s" class="form-control %s">%s</textarea>',
            $this->attribute,
            $this->model->hasError($this->attribute) ? 'is-invalid' : '',
            $this->model->{$this->attribute}
        );
    }
}