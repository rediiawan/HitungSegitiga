<?php
class segitiga
{
    private $alas;
    private $tinggi;

    public function __construct ($alas, $tinggi)
    {
        $this ->alas = $alas;
        $this ->tinggi = $tinggi;
    }

    public function hitungLuas()
    {
        return 0.5 * $this ->alas * $this ->tinggi;
    }

    public function hitungKeliling()
    {
        $miring = sqrt(pow($this->alas,2) + pow($this->tinggi,2));
        return $this ->alas + $this ->tinggi + $miring;
    }
}