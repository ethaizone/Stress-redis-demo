<?php

$redis = include_once(dirname(__FILE__).'/../redis.inc.php');
// $redis->delete('stress_redis::where_between');

$start = microtime(true);

$totalData = 100000;
$time = 1436323400+rand(100, 1000);
for ($i=1; $i <= $totalData; $i++) { 
    $redis->zAdd('stress_redis::where_between', $time+rand(10, 30), 'ID:'.$i);
    $time += 30;
}

$end = microtime(true);

$elapsed = number_format($end - $start, 4);
$one = number_format(($end - $start) / $totalData, 7);
echo "$totalData runs in $elapsed seconds, average of $one seconds per call\n";