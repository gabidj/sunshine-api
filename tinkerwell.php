<?php

use App\Models\User;
use Laravel\Pennant\Feature;
use Illuminate\Support\Lottery;
use Illuminate\Process\Pool;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Process;
 
 // process example
 /*
 [$first, $second, $third] = Process::concurrently(function (Pool $pool) {
    $pool->command('ls .');
    $pool->command('ls ./storage');
    $pool->command('ls app');
});
 
return $first->output();
*/


// Pennant example attempt
/*
$featureActive = 0;

Feature::define('new-onboarding-flow', function () use ($featureActive) {
    return true;
});

if (Feature::active('new-onboarding-flow')) {
    echo 'v2';
} else {
  echo 'v1';
}
*/

// password helper
// echo Str::password();

