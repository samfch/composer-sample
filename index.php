<?php
require_once('vendor/autoload.php');

use \phpseclib\Crypt\AES;
use \phpseclib\Crypt\Random;

$cipher = new AES(); // could use CRYPT_AES_MODE_CBC
$random = new Random();

$cipher->setKey('abcdefghijklmnop');

$cipher->setIV($random->string($cipher->getBlockLength() >> 3));

$plaintext = "This is plain text sample";

echo $plaintext. "<br/><hr>";

echo "Chipertext : ". $cipher->encrypt($plaintext) . "<br/><hr>";

echo "Decrypt result : ". $cipher->decrypt($cipher->encrypt($plaintext)) . "<br/>";
?>