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
         * @var
         */
        private $label;

        public function __construct(string $name, string $label)
        {
            $this->name = $name;
            $this->label = $label;
        }

        public function getName(): string
        {
            return $this->name;
        }

        public function getLabel(): string{
            return $this->label;
        }

        abstract public function render(): string;



    }