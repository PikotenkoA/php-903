<?php

class ButtonElement extends FormElement
{
    protected $type = 'submit';

    public function render(): string
    {
        return sprintf('<button type="%s">%s</button>', $this->type, $this->getLabel());
    }
}