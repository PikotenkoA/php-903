<?php
/**
 * Created by PhpStorm.
 * User: skillup_student
 * Date: 10.06.19
 * Time: 19:14
 */

class Form
{

    /**
     * @var FormElement[]
     */
    private $elements;

    /**
     * @var string
     */

    private $method;

    /**
     * @var boolean
     */

    private $isSumitted = false;

    public function __construct(string $method = 'post')

    {
        $this->method = strtolower($method);
    }

    public function add(FormElement $element)

    {
        $this->elements[$element->getName()] = $element;
    }

    public function getElements()
    {
        return $this->elements;
    }

    public function render()
    {
        $html = '<form>';

        foreach ($this->elements as $element) {

            $html .= sprintf('<form method="%s">', $this->method);

            $html .= $element->render() . '<br>';
        }
        $html .= '<form>';
        return $html;
    }

    public function handleRequest()
    {
        $data = $this->method == 'post' ? $_POST : $_GET;

        foreach ($this->elements as $element) {
            if (isset($data[$element->getName()])) {
                $this->isSumitted = true;
                $element->setValue($data[$element->getName()]);
            }
        }
    }

    public function getValue($name)
    {
        return $this->elements[$name]->getValue();
    }

    /**
     * @return bool
     */
    public function isSumitted(): bool
    {
        return $this->isSumitted;
    }
}