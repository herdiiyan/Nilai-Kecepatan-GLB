<?php

class Kecepatan {
    
    public $jarak;

    public $waktu;

    public function setJarak($jarak) {
	$this->jarak = $jarak;
    }

    public function getJarak() {
	return $this->jarak;
    }

    public function setWaktu($waktu) {
	$this->waktu = $waktu;
    }

    public function getWaktu() {
	return $this->waktu;
    }

    public function getNilaiKecepatan() {
	return $this->getJarak() / $this->getWaktu();
    }
}

$kecepatan = new Kecepatan();
$kecepatan->setJarak(5);
$kecepatan->setWaktu(2);

echo "Menghitung Nilai Kecepatan GLB(Gerah Lurus Beraturan)" . "<br>";
echo "Nilai s = " . $kecepatan->getJarak() . "<br>";
echo "Nilai t = " . $kecepatan->getWaktu() . "<br>";
echo "Nilai v = " . $kecepatan->getNilaiKecepatan();
