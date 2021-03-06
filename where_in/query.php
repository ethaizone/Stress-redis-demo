<?php

$redis = include_once(dirname(__FILE__).'/../redis.inc.php');

$start = microtime(true);

$whereIn = [];
for ($i=1; $i <= 1000; $i++) { 
    $whereIn[] = 'stress_redis::where_in::'.($i+rand(1, 100)+20);
}

$result = $redis->mGet($whereIn);

$end = microtime(true);

$elapsed = number_format($end - $start, 4);

// print_r($result);

echo "Result is ".count($result)." records. Runs in $elapsed seconds\n";