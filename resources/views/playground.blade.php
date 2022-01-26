<?php

//class House
//{
//
//    private $door;
//    private $window;
//    private $material;
//    private $color;
//
//    public function __construct($door, $window, $material, $color = "brown")
//    {
//        $this->door = $door;
//        $this->window = $window;
//        $this->material = $material;
//        $this->color = $color;
//    }
//
//    public function getMaterial()
//    {
//        return $this->material;
//    }
//
//    public function setMaterial($material): House
//    {
//        $this->material = $material;
//        return $this;
//    }
//
//    public function getDoor()
//    {
//        return $this->door;
//    }
//
//    public function setDoor($door): House
//    {
//        $this->door = $door;
//        return $this;
//    }
//
//    public function getWindow()
//    {
//        return $this->window;
//    }
//
//    public function setWindow($window): House
//    {
//        $this->window = $window;
//        return $this;
//    }
//
//    public function getColor()
//    {
//        return $this->color;
//    }
//
//    public function setColor($color): House
//    {
//        $this->color = $color;
//        return $this;
//    }
//}
//
//class BrickHouse extends House
//{
//
//    private $brick;
//
//    public function __construct()
//    {
//        parent::__construct(true, true, "brick", "red");
//    }
//
//    public function brick()
//    {
//        $this->material = true;
//    }
//
//    public function getBrick()
//    {
//        return $this->brick;
//    }
//
//    public function setBrick($brick): BrickHouse
//    {
//        $this->brick = $brick;
//        return $this;
//    }
//}
//
//class BlockHouse extends House
//{
//
//    private $wood;
//
//    public function __construct()
//    {
//        parent::__construct(true, true, "wood", true);
//    }
//
//    public function getWood()
//    {
//        return $this->wood;
//    }
//
//    public function setWood($wood): BlockHouse
//    {
//        $this->wood = $wood;
//        return $this;
//    }
//}
//
//class PaperHouse extends House
//{
//
//    private $paper;
//
//    public function __construct()
//    {
//        parent::__construct(false, false, "paper", "white");
//    }
//
//    public function getPaper()
//    {
//        return $this->paper;
//    }
//
//    public function setPaper($paper): PaperHouse
//    {
//        $this->paper = $paper;
//        return $this;
//    }
//}
//
//$z = new PaperHouse();
//$z->setMaterial("Paper ");
//echo $z->getMaterial();
//$z->setColor("White")
//    public function brick()
//    {
//        $this->material = true;
//    }
//    ->setPaper('recycling')
//;
//echo $z->getColor();
//echo "<br>";
//
//$y = new BlockHouse();
//$y->setMaterial("Wood ");
//echo $y->getMaterial();
//$z->setColor("Brown");
//echo $z->getColor();
//echo "<br>";
//
//$x = new BrickHouse();
//$x->setMaterial("Brick ");
//echo $x->getMaterial();
//$z->setColor("Red");
//echo $z->getColor();
//echo "<br>";

//class Car {
//    private $reifen;
//    private $door;
//    private $motor;
//    private $farbe;
//    private $model;
//
//    public function __construct($reifen, $door, $motor, $model = "normal", $farbe = "Schwarz")
//    {
//        $this->reifen = $reifen;
//        $this->door = $door;
//        $this->motor = $motor;
//        $this->farbe = $farbe;
//        $this->model = $model;
//    }
//
//    public function getReifen()
//    {
//        return $this->reifen;
//    }
//
//    public function setReifen($reifen) : Car
//        {
//            $this->reifen = $reifen;
//            return $this;
//        }
//
//    public function getDoor()
//        {
//            return $this->tür;
//        }
//
//    public function setDoor($door) : Car
//    {
//        $this->tür =$door;
//        return $this;
//    }
//
//    public function getMotor()
//        {
//            return$this->motor;
//        }
//
//    public function setMotor($motor) : Car
//    {
//        $this->motor = $motor;
//        return $this;
//    }
//
//    public function getFarbe()
//        {
//            return $this->farbe;
//        }
//
//    public function  setFarbe($farbe) : Car
//    {
//        $this->farbe =$farbe;
//        return $this;
//    }
//
//    public function getModel()
//        {
//            return $this->model;
//        }
//
//    public function setModel($model) :Car
//    {
//        $this->model = $model;
//        return $this;
//    }
//}
//
//class SportCar extends Car
//{
//    private $sport;
//
//    public function __construct()
//        {
//            parent::__construct(true, true, true, "Sport", "Blau");
//        }
//
//    public function getSportCar()
//    {
//        return $this->sport;
//    }
//
//    public function setSportCar($sport) : SportCar
//    {
//        $this->sport = $sport;
//        return $this;
//    }
//}
//
//class Cabrio extends Car
//{
//    private $cabrio;
//
//    public function __construct()
//        {
//            parent::__construct(true, true, true, "Cabrio", "Weiß");
//        }
//
//    public function getCabrio()
//        {
//            return$this->cabrio;
//        }
//
//    public function setCabrio($cabrio) : Cabrio
//    {
//        $this->cabrio =$cabrio;
//        return $this;
//    }
//}
//
//$y = new Cabrio();
//$y->setModel("Cabrio");
//echo $y->getModel();
//$y->setFarbe("Weiß");
//echo $y->getFarbe();
//echo "<br>";
//
//$x = new SportCar();
//$x->setModel("Sport");
//echo $x->getModel();
//$x->setFarbe("Blau");
//echo $x->getFarbe();



//class Mensch
//{
//    private $haare;
//    private $augen;
//    private $größe;
//
//    public function __construct($haare = "Braun", $augen = "Braun", $größe = "180cm")
//        {
//            $this->haare;
//            $this->augen;
//            $this->größe;
//        }
//
//
//    public function getHaare()
//        {
//            return $this->haare;
//        }
//
//    public function setHaare($haare) : Mensch
//    {
//        $this->haare = $haare;
//        return $this;
//    }
//
//    public function getAugen()
//        {
//            return $this->augen;
//        }
//
//    public function setAugen($augen) : Mensch
//    {
//        $this->augen = $augen;
//        return $this;
//    }
//
//    public function getGröße()
//        {
//            return $this->größe;
//        }
//
//    public function setGröße($größe) : Mensch
//    {
//        $this->größe = $größe;
//        return $this;
//    }
//}
//
//class Frau extends Mensch
//{
//    private $geschlecht;
//
//    public function __construct()
//        {
//            parent::__construct("schwarz", "blau", "169cm");
//        }
//
//    public function getGeschlecht()
//        {
//            return $this->geschlecht;
//        }
//
//    public function setGeschlecht($geschlecht) : Frau
//    {
//        $this->geschlecht = $geschlecht;
//        return $this;
//    }
//}
//class Mann extends Mensch
//{
//    private $geschlecht;
//
//    public function __construct()
//        {
//            parent::__construct("braun", "braun", "180cm");
//        }
//
//    public function getGeschlecht()
//        {
//            return $this->geschlecht;
//        }
//
//    public function setGeschlecht($geschlecht) : Mann
//    {
//        $this->geschlecht = $geschlecht;
//        return $this;
//    }
//}
//
//
//$y = new Mann();
//$y->setGeschlecht("Mann");
//echo $y->getGeschlecht();
//echo "<br>";
//$y->setHaare("Braun");
//echo $y->getHaare();
//echo "<br>";
//$y->setAugen("Braun");
//echo $y->getAugen();
//echo "<br>";
//$y->setGröße("180cm");
//echo $y->getGröße();
//echo "<br>";
//echo "<br>";
//
//$x = new Frau();
//$x->setGeschlecht("Frau");
//echo $x->getGeschlecht();
//echo "<br>";
//$x->setHaare("Schwarz");
//echo $x->getHaare();
//echo "<br>";
//$x->setAugen("Blau");
//echo $x->getAugen();
//echo "<br>";
//$x->setGröße("169cm");
//echo $x->getGröße();
class PC
{
    private $gpu;
    private $cpu;
    private $motherbord;
    private $ram;
    private $speicher;
    private $netzteil;
    private $kabel;

    public function __construct($gpu, $cpu, $motherbord, $ram, $speicher, $netzteil, $kabel)
        {
            $this->gpu = $gpu;
            $this->cpu = $cpu;
            $this->motherbord = $motherbord;
            $this->ram = $ram;
            $this->speicher = $ram;
            $this->netzteil = $netzteil;
            $this->kabel = $kabel;
        }

    public function getGpu()
    {
        return $this->gpu;
    }

    public function setGpu($gpu) : PC
    {
        $this->gpu = $gpu;
        return $this;
    }

    public function getCpu()
    {
        return $this->cpu;
    }

    public function setCpu($cpu) : PC
    {
        $this->cpu = $cpu;
        return $this;
    }

    public function getMotherbord()
    {
        return $this->motherbord;
    }

    public function setMotherbord($motherbord) : PC
    {
        $this->motherbord = $motherbord;
        return $this;
    }

    public function getRam()
    {
        return $this->ram;
    }

    public function setRam($ram) : PC
    {
        $this->ram = $ram;
        return $this;
    }

    public function getSpeicher()
    {
        return $this->speicher;
    }

    public function setSpeicher($speicher) : PC
    {
        $this->speicher = $speicher;
        return $this;
    }

    public function getNetzteil()
    {
        return $this->netzteil;
    }

    public function setNetzteil($netzteil) : PC
    {
        $this->netzteil = $netzteil;
        return $this;
    }

    public function getKabel()
    {
        return $this->kabel;
    }

    public function setKabel($kabel) : PC
    {
        $this->kabel = $kabel;
        return $this;
    }
}

class GamingPc extends PC
{
    private $gaming;

    public function __construct()
    {
        parent::__construct("Gtx 3080", "i7", true, true, "festplatte 6t", true, true );
    }

    public function getGaming()
    {
        return $this->gaming;
    }

    public function setGaming($gaming) : GamingPc
    {
        $this->gaming =$gaming;
        return $this;
    }
}


$x = new GamingPc();
$x->setGpu("Gtx 3080");
echo $x->getGpu();
echo "<br>";
$x->setCpu("i7");
echo $x->getCpu();
echo "<br>";
$x->setMotherbord("true");
echo $x->getMotherbord();
echo "<br>";
$x->setRam("32 GB");
echo $x->getRam();
echo "<br>";
$x->setSpeicher("Festplatte 6t");
echo $x->getSpeicher();
echo "<br>";
$x->setNetzteil("true");
echo $x->getNetzteil();
echo "<br>";
$x->setKabel("true");
echo $x->getKabel();
echo "<br>";
$x->setGaming("true");
echo $x->getGaming();

