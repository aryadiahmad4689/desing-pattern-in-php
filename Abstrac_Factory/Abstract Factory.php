<?php

interface Kursi
{
    public function execute();
}

interface Meja
{
    public function execute();
}

interface Lemari 
{
    public function execute();
}


class MinimalistMeja implements Meja
{
    public function execute()
    {
        echo "Sedang Membuat Minimalist Meja";
    }  
}

class MinimalistKursi implements Kursi
{
    public function execute()
    {
        echo "Sedang Membuat Minimalist Kursi";
    }
}


class ModerenKursi implements Kursi
{
    public function execute()
    {
        echo "Sedang Membuat Kursi Moderen";
    }
}

class KlasikKursi implements Kursi
{
    public function execute()
    {
        echo "Sedang Membuat Kursi Klasik";
    }
}

class ModerenMeja implements Meja
{
    public function execute()
    {
        echo "Sedang Membuat Meja Moderen";
    }
}

class KlasikMeja implements Meja
{
    public function execute()
    {
        echo "Sedang Membuar Meja Klasik";
    }
}

// 
interface AbstractFurnitureFactory 
{
    public function createMeja(): Meja;
    public function createKursi() : Kursi;
}

class FurnitureModeren implements AbstractFurnitureFactory
{
    public function createMeja(): Meja
    {
        return new ModerenMeja;
    }

    public function createKursi(): Kursi
    {
        return new ModerenKursi;
    }
    
}

class FurnitureKlasik implements AbstractFurnitureFactory
{
    public function createMeja(): Meja
    {
        return new KlasikMeja;
    }

    public function createKursi(): Kursi
    {
        return new KlasikKursi;
    }
}

class FurnitureMinimalist implements AbstractFurnitureFactory
{
    public function createMeja(): Meja
    {
        return new MinimalistMeja;
    }

    public function createKursi(): Kursi
    {
        return new MinimalistKursi;
    }
}


// ariadi sedang pesan meja Moderen Dan Kursi Moderen

$AriadiPesanFurnitureModeren = new  FurnitureModeren;

$AriadiPesanFurnitureModeren->createMeja()->execute();
// Sedang Membuat Meja Moderen
$AriadiPesanFurnitureModeren->createKursi()->execute();
// Sedang Membuat Kursi Moderen

$AriadiPesanFurnitureMinimalist  = new FurnitureMinimalist;
$AriadiPesanFurnitureMinimalist->createMeja()->execute();
// Sedang Membuat Meja Minimalist
$AriadiPesanFurnitureMinimalist->createKursi()->execute();
// Sedang Membuat Kursi Minimalist

