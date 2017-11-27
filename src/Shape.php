<?php
namespace Yoda;
class Shape
{
    private $length;
    public function __construct($length) {
        $this->length = $length;
    }
    public function setLength($length){
        $this->length = $length;
    }

    public function getLength() {
        return $this->length;
    }
}