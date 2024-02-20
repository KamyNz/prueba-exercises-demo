<?php
// Connect to Redis server
$redis = new Redis();
$redis->connect('redis', 6379);

// Check if the message is cached
$message = $redis->get('hello_world');

// If not cached, generate the message and cache it
if (!$message) {
    $message = "Hello World! from PHP";
    $redis->set('hello_world', $message);
}

// Output the message
echo $message;
