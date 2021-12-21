<?php 
/**
 * Атрибуты тегов в классе Tag
 */ 

/** Задача 1
 * Самостоятельно, не подсматривая в мой код, добавьте в класс Tag возможность добавления атрибутов тега.
 */ 
    class Tag
    {
        private $name;
        private $attrs;
        
        public function __construct($name, $attrs = [])
        {
            $this->name = $name;
            $this->attrs = $attrs;
        }
        
        public function open()
        {
            $name = $this->name;
            $attrsStr = $this->getAttrsStr($this->attrs);

            
            return "<$name$attrsStr>";
        }
        
        public function close()
        {
            $name = $this->name;
            return "</$name>";
        }

        private function getAttrsStr($attrs)
        {
            if (!empty($attrs)) {
                $result = '';
                
                foreach ($attrs as $name => $value) {
                    $result .= " $name=\"$value\"";
                }
                
                return $result;
            } else {
                return '';
            }
        }
    }
?>