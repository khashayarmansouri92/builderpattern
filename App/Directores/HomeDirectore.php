<?php

namespace App\Directores;

use App\Builder\HomeBuilderInterFace;

class HomeDirectore
{
    protected $homeBuilder;

    public function __construct(HomeBuilderInterFace $homeBuilder)
    {
        $this->homeBuilder = $homeBuilder;
    }

    public function buildHome()
    {
        return $this->homeBuilder
            ->makeWindow('room1window')
            ->makeDoor('room1door')
            ->makeInnerWall('room1left')
            ->makeInnerWall('room1right')
            ->makeOuterWall('left')
            ->makeOuterWall('right')
            ->build();
    }

}