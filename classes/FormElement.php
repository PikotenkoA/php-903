<?php
/**
 * Created by PhpStorm.
 * User: skillup_student
 * Date: 10.06.19
 * Time: 19:30
 */

    abstract class FormElement
    {
        /**
         * @var string
         */
        private $name;

        /**
         * @var string
         */
        private $label;

        /**
         * @var string
         */

        protected $value;

        /**
         * @var bool
         */
        protected $required = false;

        /**
         * @var string
         */
        protected $error = '';

        public function __construct(string $name, string $label, bool $required = false)
        {
            $this->name = $name;
            $this->label = $label;
            $this->required = $required;
        }

        public function getName(): string
        {
            return $this->name;
        }

        public function getLabel(): string{
            return $this->label;
        }

        /**
         * @return string
         */
        public function getValue(): string
        {
            return $this->value;
        }

        /**
         * @param string $value
         */
        public function setValue(string $value): void
        {

            $this->value = $value;

            if (empty($value) && $this->required){
                $this->error = 'Поле не должно быть пустым';
            }
        }

        /**
         * @return string
         */
        public function getError(): string
        {
            return $this->error;
        }
        abstract public function render(): string;

    }