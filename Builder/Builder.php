<?php

interface BuilderRumah{
    public function setJendela(int $jendela);
    public function setAtap(string $atap);
    public function setPintu(string $pintu);
    public function build();
}

class RumahKayu implements BuilderRumah{

    private $jendela;
    private $atap;
    private $pintu;
    private $tangga;
    public function setJendela(int $jendela)
    {
        $this->jendela =$jendela;
        return $this;
    }
    public function setAtap( string $atap)
    {
        $this->atap = $atap;
        return $this;
    }
    public function setPintu(string $pintu)
    {
        $this->pintu = $pintu;
        return $this;
    }

    public function settTangga(bool $tangga)
    {
        $this->tangga = $tangga;
        return $this;
    }

    public function build()
    {
        echo $this->jendela.$this->atap.$this->pintu.$this->tangga;
    }
}

class RumahKaca implements BuilderRumah{

    private $jendela;
    private $atap;
    private $pintu;
    private $kolam;

    public function setJendela(int $jendela)
    {
        $this->jendela =$jendela;
        return $this;
    }
    public function setAtap( string $atap)
    {
        $this->atap = $atap;
        return $this;
    }
    public function setPintu(string $pintu)
    {
        $this->pintu = $pintu;
        return $this;
    }

    public function kolamRenang(bool $kolam)
    {
        $this->kolam = $kolam;
        return $this;
    }

    public function build()
    {
        echo $this->jendela.$this->atap.$this->pintu.$this->kolam;
    }
}



class ClientCode{
    
    private $buildRumah;
    public function __construct(BuilderRumah $builderRumah)
    {
        $this->buildRumah = $builderRumah;
    }

    public function BangunRumah()
    {
        $this->buildRumah->build();
    }
}



$rumahKayu = new RumahKayu();

$rumahKayu->setJendela(2)->setAtap("semen")->setPintu("kayu");

$clicentCode = new ClientCode($rumahKayu);

$clicentCode->BangunRumah();