<?php
session_start();

// Block bots and crawlers
$user_agent = $_SERVER['HTTP_USER_AGENT'] ?? '';
$blocked_agents = '/bot|crawl|slurp|spider|mediapartners|scraper|wget|curl|python/i';

if (preg_match($blocked_agents, $user_agent)) {
    header('HTTP/1.0 403 Forbidden');
    exit('Access denied');
}

// Block suspicious IP patterns
$ip = $_SERVER['REMOTE_ADDR'] ?? '';
$blocked_ips = ['192.168.0.', '10.0.0.', '172.16.'];

foreach ($blocked_ips as $blocked) {
    if (strpos($ip, $blocked) === 0) {
        header('HTTP/1.0 403 Forbidden');
        exit('Access denied');
    }
}

// Prevent iframe embedding
header('X-Frame-Options: DENY');
header('Content-Security-Policy: frame-ancestors none');

// Disable caching for sensitive pages
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Pragma: no-cache');

// Generate unique session token
if (!isset($_SESSION['token'])) {
    $_SESSION['token'] = bin2hex(random_bytes(32));
}
?>