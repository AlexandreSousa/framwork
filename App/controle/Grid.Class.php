<?php
class Grid{
    public $_campo;
    public $_value;
        public function __construct($campo,$value){
            echo '<input type="'.$this->_campo = $campo.'" value="'.$this->_value = $value.'">';
        }

}