<?php

$redis = include_once(dirname(__FILE__).'/../redis.inc.php');

$start = microtime(true);

$totalData = 100000;
$time = 1436323400;
for ($i=1; $i <= $totalData; $i++) { 
    $redis->set('stress_redis::where_in::'.$i, json_encode(['id' => $i, 'time' => $time]));
    $time += 30;
}

$end = microtime(true);

$elapsed = number_format($end - $start, 4);
$one = number_format(($end - $start) / $totalData, 7);
echo "$totalData runs in $elapsed seconds, average of $one seconds per call\n";