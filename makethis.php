<?php

function isCLI() {
    return (PHP_SAPI == 'cli');
}

if (!isCLI()) {
    ":)";
    exit();
}
include 'vendor/autoload.php';

use Anekdotes\File\File;
use FtpClient\FtpClient;
use GuzzleHttp\Client;
use League\CLImate\CLImate;


$vendor = new Phar("job.phar");
$vendor->buildFromDirectory("vendor");
$vendor->addFile("job.php");
$vendor->setStub($vendor->createDefaultStub('job.php', 'job.php'));


