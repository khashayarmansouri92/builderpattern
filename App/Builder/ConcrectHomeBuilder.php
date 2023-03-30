<?php
namespace App\Builder;

use App\Builder\HomeBuilderInterFace;
class ConcrectHomeBuilder implements HomeBuilderInterFace
{
    public $material;
    public $windows = [];
    public $doors = [];
    public $outerWalls = [];
    public $innerWalls = [];

    public function __construct()
    {
        $this->material = 'Concrect';
    }
    public static function init()
    {
        return new self();
    }

    public function makeWindow($name)
    {
        $this->windows[] = $name;

        return $this;
    }

    public function makeDoor($name)
    {
        $this->doors[] = $name;

        return $this;
    }

    public function makeOuterWall($name)
    {
        $this->outerWalls[] = $name;

        return $this;
    }

    public function makeInnerWall($name)
    {
        $this->innerWalls[] = $name;

        return $this;
    }

    public function build()
    {
        return [
            'material' => $this->material,
            'windows' => $this->windows,
            'doors' => $this->doors,
            'innerWalls' => $this->innerWalls,
            'outerWalls' => $this->outerWalls
        ];
    }
}