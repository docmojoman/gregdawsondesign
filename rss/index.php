<?php
/* 
 ======================================================================
 lastRSS usage DEMO 1
 ----------------------------------------------------------------------
 This example shows, how to
     - create lastRSS object
    - set transparent cache
    - get RSS file from URL
    - show result in array structure
 ======================================================================
*/

// include lastRSS
include "./lastRSS.php";

// Create lastRSS object
$rss = new lastRSS;

// Set cache dir and cache time limit (1200 seconds)
// (don't forget to chmod cahce dir to 777 to allow writing)
$rss->cache_dir = '';
$rss->cache_time = 0;
$rss->cp = 'US-ASCII';
$rss->date_format = 'l';

// Try to load and parse RSS file of Slashdot.org
$rssurl = 'http://feeds.feedburner.com/blogspot/TaWF?format=xml';

if ($rs = $rss->get($rssurl)) {
    echo '<pre>';
    print_r($rs);
    echo '</pre>';
    }
else {
    echo "Error: It's not possible to get $rssurl...";
}

?> 