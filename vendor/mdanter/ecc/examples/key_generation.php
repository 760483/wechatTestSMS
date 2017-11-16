<?php

require "../vendor/autoload.php";

use Mdanter\Ecc\EccFactory;
use Mdanter\Ecc\Serializer\PrivateKey\DerPrivateKeySerializer;
use Mdanter\Ecc\Serializer\PrivateKey\PemPrivateKeySerializer;

$adapter = EccFactory::getAdapter();
$generator = EccFactory::getNistCurves()->generator384();
$private = $generator->createPrivateKey();

$keySerializer = new PemPrivateKeySerializer(new DerPrivateKeySerializer($adapter));
$data = $keySerializer->serialize($private);
echo $data . PHP_EOL;