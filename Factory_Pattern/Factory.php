<?php

interface Baju{
   public function buatBaju();
}

class BajuLenganPanjang implements Baju{

    public function buatBaju()
    {
        echo "Baju Lengan Panjang";
    }
}

class BajuJeans implements Baju{

    public function buatBaju()
    {
        echo "Baju Jeans";
    }
}

class BajuLenganPendek implements Baju{

    public function buatBaju()
    {
        echo "Baju Lengan Pendek";
    }
}


abstract class PembuatBaju 
{
    abstract function produksi() : Baju;
}

class Adi extends PembuatBaju
{
    public function produksi(): Baju
    {
        return new BajuLenganPendek;
    }
}

class Herman extends PembuatBaju
{
    public function produksi(): Baju
    {
        return new BajuJeans;
    }
}


$herman = new Herman();
$herman->produksi()->buatBaju();

// output = Baju Jeans
echo"<br>";
$adi = new Adi();
$adi->produksi()->buatBaju();

// output = Baju Lengan Pendek

