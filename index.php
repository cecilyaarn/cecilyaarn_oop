<?php

class Buku
{
    public $judul;
    public $penulis;
    public $tahunTerbit;

    function __construct($judul, $penulis, $tahunTerbit)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->tahunTerbit = $tahunTerbit;
    }

    function tampilkanInformasi()
    {
        echo "Judul: " . $this->judul . "<br>";
        echo "Penulis: " . $this->penulis . "<br>";
        echo "Tahun Terbit: " . $this->tahunTerbit . "<br><br>";
    }

    function __destruct()
    {
        echo "Selesai: " . $this->judul . "<br>";
    }
}

$buku1 = new Buku("Kobeng: Jiwa yang Tersesat", "Kus", 2025);
$buku2 = new Buku("KHW: Kisah Horor Wawak", "Nadia Omara", 2026);

$buku1->tampilkanInformasi();
$buku2->tampilkanInformasi();