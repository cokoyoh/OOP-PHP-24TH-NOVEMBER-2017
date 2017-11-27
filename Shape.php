 <?php
interface Cytonn{
    public function area();
}
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
$yoda = new Cuboid(56, 7.9,2.9);
var_dump($yoda);