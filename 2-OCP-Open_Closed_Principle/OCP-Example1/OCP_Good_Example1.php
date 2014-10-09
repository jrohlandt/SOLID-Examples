 <?php
/**
*   Acme/ShapesInterface.php
*/
namespace Acme;

interface Shape {

    public function area();
}

/**
*   Acme/AreaCalculator.php
*/
namespace Acme;

class AreaCalculator {

    public function calculate($shapes)
    {
        foreach($shapes as $shape)
        {
            $area[] = $shape->area();
        }

        return array_sum($area);
    }
}

/**
*   Acme/Square.php
*/
namespace Acme;

class Square implements Shape {

    public $width;
    public $height;

    public function __construct($width, $height)
    {
        $this->width = $width
        $this->height = $height;
    }

    public function area()
    {
        return  $this->width * $this->height;
    }
}

/**
*   Acme/Circle.php
*/
namespace Acme;

class Circle implements Shape {

    public $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function area()
    {
        return  $this->radius * $this->radius * pi();
    }

}