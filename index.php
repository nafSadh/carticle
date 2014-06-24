<?php
echo "hello<br/>";

include_once 'EdmundsAPI-sdk-js2php-port/edmunds.api.sdk.php';

$edpi = new EdmundsAPI('4gcfhrfgmz35qfxsrp9rg9df');
echo $edpi->call('api/vehicle/v2/makes','');
?>
