<?php
namespace Yoda;
class Cuboid extends Rectangle implements Cytonn
{
    private $height;
    public function __construct($length, $width, $height) {
        parent::__construct($length, $width);
        $this->height = $height;
    }

    public function setHeight($height) {
        $this->height = $height;
    }

    public function getHeight() {
        return $this->height;
    }

    public function area() {
        return  $this->getHeight() * parent::area();
    }
}