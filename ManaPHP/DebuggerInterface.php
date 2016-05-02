<?php
namespace ManaPHP {

    interface DebuggerInterface
    {

        /**
         * @param mixed  $value
         * @param string $name
         *
         * @return static
         */
        public function dump($value, $name = null);

        /**
         * @param null|string $template
         *
         * @return string|array
         */
        public function output($template = 'Default');
    }
}