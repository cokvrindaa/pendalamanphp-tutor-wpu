<?php
class ContohStatic
{
  public static $angka = 1;
  public function halo()
  {
    return "halo " . self::$angka++ . "Kali";
  }
}
// dibandingkan menginstans class menggunakan objek pada umumnya , kita menggunakan  "::"
// echo ContohStatic::$angka;
// echo ContohStatic::halo();
$obj = new ContohStatic;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<br>";

$obj2 = new ContohStatic;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();