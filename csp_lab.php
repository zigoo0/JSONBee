<?php
// By Ebrahem Hegazy @Zigoo0
// This file is intended for those who would like to play with CSP. You can modify the CSP policy within the file and try to XSS it.
// CSP only works in modern browsers Chrome 25+, Firefox 23+, Safari 7+
$headerCSP = "Content-Security-Policy-Report-Only:".
        "connect-src 'self' ;". // XMLHttpRequest (AJAX request), WebSocket or EventSource.
        "default-src 'self';". // Default policy for loading html elements
        "frame-ancestors 'self' ;". // Allow parent framing - this one blocks click jacking and ui redress
        "frame-src 'none';". // Vaild sources for frames
        "media-src 'self' *.example.com;". // Vaild sources for media (audio and video html tags src)
        "object-src 'none'; ". // Valid object embed and applet tags src
        "report-uri https://example.com/violationReportForCSP.php;". // A URL that will get raw json data in post that lets you know what was violated and blocked
        "script-src 'self' *.uber.com *.twitter.com *.google.com code.jquery.com https://ssl.google-analytics.com ;". // Allows js from self, jquery and google analytics.  Inline allows inline js
        "style-src 'self' 'unsafe-inline';";// Allows css from self and inline allows inline css
// Sends the Header in the HTTP response to instruct the Browser how it should handle content and what is whitelisted
// It's up to the browser to follow the policy which each browser has varying support
header($headerCSP);
$xss = $_GET['name'];
echo "<html>Hello Mr.".$xss;
//echo "<script>document.write(document.location.search)</script>";
echo "</html>";
?>
