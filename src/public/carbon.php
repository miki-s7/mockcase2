<?php
require '../vendor/autoload.php';

use Carbon\Carbon;

Carbon::setLocale('ja');
$dt = Carbon::now()->isoFormat('YYYY/MM/DD(ddd)');
echo $dt;
$time = Carbon::now()->isoFormat('HH:mm');
echo $time;