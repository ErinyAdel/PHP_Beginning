<?php

require "vendor/autoload.php";

use Eriny\Composer\App;

$app = new App();

$apiUrl = 'https://api.coingecko.com/api/v3/simple/price?ids=bitcoin&vs_currencies=usd';
$app->get($apiUrl);