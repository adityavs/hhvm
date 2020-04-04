<?hh // strict

class Point
{
    private $x;    // Cartesian x-coordinate
    private $y;    // Cartesian y-coordinate

    public function __construct($x = 0, $y = 0)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function move($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function translate($x, $y)
    {
        $this->x += $x;
        $this->y += $y;
    }

    public function magnitude()
    {
        return sqrt($this->x ** 2 + $this->y ** 2);
    }

    public function __toString()
    {
        return '(' . $this->x . ',' . $this->y . ')';
    }
}
