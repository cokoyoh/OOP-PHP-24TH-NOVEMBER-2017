<?php
class Rectangle extends Shape implements Cytonn
{
    private $width;
    public function __construct($length, $width) {
        parent::__construct($length);
        $this->width = $width;
    }

    public function setWidth($width) {
        $this->width = $width;
    }

    public function getWidth() {
        return $this->width;
    }

    public function area() {
        return $this->getWidth() * parent::getLength();
    }
}
