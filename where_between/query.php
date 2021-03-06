<?php

$redis = include_once(dirname(__FILE__).'/../redis.inc.php');

$start = microtime(true);

$time = 1436323400+rand(500, 2000);
$timeEnd = $time+50000;
$result = $redis->zRangeByScore('stress_redis::where_between', $time, $timeEnd, array('withscores' => TRUE, 'limit' => array(0, 10000)));


$end = microtime(true);

$elapsed = number_format($end - $start, 4);

echo "Result is ".count($result)." records. Runs in $elapsed seconds\n";