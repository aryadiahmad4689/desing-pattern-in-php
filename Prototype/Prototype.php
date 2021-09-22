<?php

interface Prototype {
    public function clone(): Prototype;
}


class Pesawat implements Prototype{
    private $mesin;
    private $kursi;

    public function setMesin(string $mesin)
    {
        $this->mesin = $mesin;
    }

    public function setKursi(int $kursi)
    {
        $this->kursi =$kursi;
    }

    public function buatPesawat()
    {
        echo $this->mesin." ".$this->kursi;
    }

    public function clone(): Pesawat
    {

        $pesawat = new Pesawat;

        $pesawat->mesin = $this->mesin;
        $pesawat->kursi = $this->kursi;

        return $pesawat;

    }
}


$pesawat1 = new Pesawat;

$pesawat1->setMesin("Kargo");
$pesawat1->setKursi(40);

print_r($pesawat1->buatPesawat());
// output = Kargo 40

$pesawat2 = $pesawat1->clone();
$pesawat2->setKursi(200);

print_r($pesawat2->buatPesawat());
// output = Kargo 200







