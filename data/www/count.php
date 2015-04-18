<?php
$redis = new Redis();
$redis->connect('redis');
$redis->incr('count');
print($redis->get('count').'<br/>');
$redis->close();
print("done\n");
?>
