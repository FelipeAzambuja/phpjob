<?php
function isCLI() {
    return (PHP_SAPI == 'cli');
}
if(!isCLI()){
    ":)";
    exit();
}
include 'vendor/autoload.php';
use Anekdotes\File\File;
use FtpClient\FtpClient;
use GuzzleHttp\Client;
use League\CLImate\CLImate;

include $argv[1];
eval($argv[2] . "(" . "'" . implode("','", array_splice($argv, 3)) . "'" . ");");

