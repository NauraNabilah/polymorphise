<?php

interface kendaraan {
    public function hitungKecepatan();
}

abstract class kecepatan {
    abstract public function lajuan();
}

class mobil extends kecepatan implements kendaraan {
    private $jarak;
    private $waktu;

    public function __construct($jarak, $waktu) {
        $this->jarak = $jarak;
        $this->waktu = $waktu;
    }

    public function hitungKecepatan() {
        return $this->jarak / $this->waktu;
    }

    public function lajuan() {
         return "melaju lambat <br>";
    }
}
class motor extends kecepatan implements kendaraan {
    private $jarak;
    private $waktu;

    public function __construct($jarak, $waktu) {
        $this->jarak = $jarak;
        $this->waktu = $waktu;
    }

    public function hitungKecepatan() {
        return $this->jarak / $this->waktu;
    }

    public function lajuan() {
         return "melaju cepat";
    }
}

$mobilWuling = new mobil (114,2);
$motorMio = new motor (200,2);

echo "mobil wuling memiliki kecepatan " . $mobilWuling->hitungKecepatan() . " km/jam <br>";
echo $mobilWuling->lajuan() . "\n \n";
echo "motor mio memiliki kecepatan " . $motorMio->hitungKecepatan() . " km/jam <br>";
echo $motorMio->lajuan();

?>