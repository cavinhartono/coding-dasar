<?php

class Mahasiswa
{
  var $namasiswa;
  var $alamat = null;
  var $nilai;

  function getNamaSiswa()
  {
    return $this->namasiswa;
  }

  function setNamaSiswa(string $namaBaru)
  {
    $this->namasiswa = $namaBaru;
  }
}

$mahasiswaBaru = new Mahasiswa();
$mahasiswaBaru->setNamaSiswa('Cavin');
echo $mahasiswaBaru->getNamaSiswa();
