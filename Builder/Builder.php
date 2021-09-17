<?php

interface BuilderRumah{
    public function setJendela(int $jendela);
    public function setAtap(string $atap);
    public function setPintu(string $pintu);
}

class RumahKayu implements BuilderRumah{
    public function setJendela(int $jendela)
    {
        
    }
    public function setAtap( string $atap)
    {

    }
    public function setPintu(string $pintu)
    {

    }
}

class RumahKaca implements BuilderRumah{
    public function setJendela(int $jendela)
    {

    }
    public function setAtap( string $atap)
    {

    }
    public function setPintu(string $pintu)
    {

    }
}