

<!DOCTYPE html>
<html>
<body>

<?php
class Mahasiswa {
  // Properties
  private $Nama;
  private $NIM;
  private $Mata_Kuliah;
  private $Dosen_Killer;
  private $cita_cita;

  // Methods
  function __construct ($Nama, $NIM, $Mata_Kuliah, $Dosen_Killer, $cita_cita ) {
    $this->Nama = $Nama;
    $this->NIM = $NIM;
    $this->Mata_Kuliah = $Mata_Kuliah;
    $this->Dosen_Killer = $Dosen_Killer;
    $this->cita_cita = $cita_cita;
  }
  function get_Nama() {
    return $this->Nama;
 }
  function get_NIM() {
    return $this->NIM;
  }
  function get_Mata_Kuliah() {
    return $this->Mata_Kuliah;
  }
  function get_Dosen_Killer() {
    return $this->Dosen_Killer;
  }
 function get_cita_cita() {
    return $this->cita_cita;
 }
}

$thoif = new Mahasiswa("Thoif", "2255201026", "PBO", "Pak_Arif", "Belum
_ada");


echo $thoif->get_Nama();
echo "<br>";
echo $thoif->get_NIM();
echo "<br>";
echo $thoif->get_Mata_Kuliah();
echo "<br>";
echo $thoif->get_Dosen_Killer();
echo "<br>";
echo $thoif->get_cita_cita();
?>
 
</body>
</html>
