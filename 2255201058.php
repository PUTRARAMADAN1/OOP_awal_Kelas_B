<!DOCTYPE html>
<html>
<body>

<?php
class mahasiswa{
  // Properties
  private $name;
  private $nim;
  private $mata_kuliah;
  private $dosen_killer;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
  function set_nim($nim) {
    $this->nim = $nim;
  }
  function get_nim() {
    return $this->nim;
  }
   function set_mata_kuliah($mata_kuliah) {
    $this->mata_kuliah= $mata_kuliah;
  }
  function get_mata_kuliah() {
    return $this->mata_kuliah;
  }
  function set_dosen_killer($dosen_killer) {
    $this->dosen_killer= $dosen_killer;
  }
  function get_dosen_killer() {
    return $this->dosen_killer;
  }
}

$sri_wiji_astuti = new mahasiswa();
$sri_wiji_astuti->set_name('Sri_Wiji_Astuti');
$sri_wiji_astuti->set_nim('2255201058');
$sri_wiji_astuti->set_mata_kuliah('pbo');
$sri_wiji_astuti->set_dosen_killer('arif mudi priyanto.s.t.m.kom');

echo $sri_wiji_astuti ->get_name();
echo "<br>";
echo $sri_wiji_astuti ->get_nim();
echo "<br>";
echo $sri_wiji_astuti ->get_mata_kuliah();
echo "<br>";
echo $sri_wiji_astuti ->get_dosen_killer();






?>
 
</body>
</html>
