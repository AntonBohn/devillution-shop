<?php

class House
{

    private $door;
    private $window;
    private $material;
    private $color;

    public function __construct($door, $window, $material, $color = "brown")
    {
        $this->door = $door;
        $this->window = $window;
        $this->material = $material;
        $this->color = $color;
    }

    public function getMaterial()
    {
        return $this->material;
    }

    public function setMaterial($material): House
    {
        $this->material = $material;
        return $this;
    }

    public function getDoor()
    {
        return $this->door;
    }

    public function setDoor($door): House
    {
        $this->door = $door;
        return $this;
    }

    public function getWindow()
    {
        return $this->window;
    }

    public function setWindow($window): House
    {
        $this->window = $window;
        return $this;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color): House
    {
        $this->color = $color;
        return $this;
    }
}

class BrickHouse extends House
{

    private $brick;

    public function __construct()
    {
        parent::__construct(true, true, "brick", "red");
    }

    public function brick()
    {
        $this->material = true;
    }

    public function getBrick()
    {
        return $this->brick;
    }

    public function setBrick($brick): BrickHouse
    {
        $this->brick = $brick;
        return $this;
    }
}

class BlockHouse extends House
{

    private $wood;

    public function __construct()
    {
        parent::__construct(true, true, "wood", true);
    }

    public function getWood()
    {
        return $this->wood;
    }

    public function setWood($wood): BlockHouse
    {
        $this->wood = $wood;
        return $this;
    }
}

class PaperHouse extends House
{

    private $paper;

    public function __construct()
    {
        parent::__construct(false, false, "paper", "white");
    }

    public function getPaper()
    {
        return $this->paper;
    }

    public function setPaper($paper): PaperHouse
    {
        $this->paper = $paper;
        return $this;
    }
}

$z = new PaperHouse();
$z->setMaterial("Paper ");
echo $z->getMaterial();
$z->setColor("White")
    ->setPaper('recycling')
;
echo $z->getColor();
echo "<br>";

$y = new BlockHouse();
$y->setMaterial("Wood ");
echo $y->getMaterial();
$z->setColor("Brown");
echo $z->getColor();
echo "<br>";

$x = new BrickHouse();
$x->setMaterial("Brick ");
echo $x->getMaterial();
$z->setColor("Red");
echo $z->getColor();
echo "<br>";

