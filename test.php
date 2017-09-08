<?php
use Anekdotes\File\File;
use FtpClient\FtpClient;
use GuzzleHttp\Client;
use League\CLImate\CLImate;

function teste($nome) {
    $cli = new CLImate();
    $cli->out("Seu nome é $nome");
}
