<?php

$redis = new Redis();
$redis->connect('127.0.0.1', 6379);
$redis->delete('stress_redis::zset');

$start = microtime(true);

$totalData = 100000;
$time = 1436323400+rand(100, 1000);
for ($i=1; $i <= $totalData; $i++) { 
    $redis->zAdd('stress_redis::zset', $time+rand(10, 30), 'ID:'.$i);
    $time += 30;
}

$end = microtime(true);

$elapsed = number_format($end - $start, 4);
$one = number_format(($end - $start) / $totalData, 7);
echo "$totalData runs in $elapsed seconds, average of $one seconds per call\n";