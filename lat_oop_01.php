<?php

require 'iWireless.php';

class EarPhone
{
    private $merk;
    private $seri;
    private $harga;

    function __construct($m,$s,$h)
    {
        $this->merk = $m;
        $this->seri = $s;
        $this->harga = $h;
    }

    public function getMerk()
    {
        return $this->merk;
    }

    public function getSeri()
    {
        return $this->seri;
    }

    public function getHarga()
    {
        return $this->harga;
    }
}

class InEar extends EarPhone implements iWireless
{
    function __construct($m,$s,$h)
    {
        parent::__construct($m,$s,$h);
    }

    function wireless($status)
    {
        return "Wireless : ".$status;
    }
}

class Earbud extends EarPhone implements iWireless
{
    function __construct($m,$s,$h)
    {
        parent::__construct($m,$s,$h);
    }

    function wireless($status)
    {
        return "Wireless : ".$status;
    }
}


$iem = new InEar('Sony', 'S1001', 5000);
$bud = new Earbud('Sennheiser', 'MX375', 1000);
echo $iem->getMerk() . "\n";
echo $iem->getSeri() . "\n";
echo $iem->getHarga() . "\n";
echo $iem->wireless("Yes") . "\n";
echo "\n";
echo $bud->getMerk() . "\n";
echo $bud->getSeri() . "\n";
echo $bud->getHarga() . "\n";
echo $bud->wireless("No") . "\n";
echo "\n";

?>