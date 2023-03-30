<?php
namespace App\Builder;
interface HomeBuilderInterFace
{
    public function makeWindow($name);
    public function makeDoor($name);
    public function makeOuterWall($name);
    public function makeInnerWall($name);
    public function build();

}