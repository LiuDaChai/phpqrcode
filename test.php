<?php

require_once 'vendor/autoload.php';
use PHPQrcode\QrcodeServer;
QrcodeServer::png("test", 'game_test'.time().'.png');