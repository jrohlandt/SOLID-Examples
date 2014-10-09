 <?php

/**
*   Acme/AreaCalculator.php
*/
namespace Acme;

class AreaCalculator {

    public function calculate($shapes)
    {
        foreach($shapes as $shape)
        {
            if (is_a($shape, 'Square'))
            {
                $area[] = $shape->width * $shape->height;
            }
            elseif (is_a($shape, 'Circle'))
            {
                $area[] = $shape->radius * $shape->radius * pi();
            }
            elseif (is_a($shape, 'Triangle'))
            {
                //This class (original source code) will have to be modified every time
                // a new shape is introduced to the application.
                // This breaks the Open/Closed principle,
                // and can lead to breakage and code rot.
            }
        }

        return array_sum($area);
    }
}

/**
*   Acme/Square.php
*/
namespace Acme;

class Square {

    public $width;
    public $height;

    public function __construct($width, $height)
    {
        $this->width = $width
        $this->height = $height;
    }
}

/**
*   Acme/Circle.php
*/
namespace Acme;

class Circle {

    public $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }