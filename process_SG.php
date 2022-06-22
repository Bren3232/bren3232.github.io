
<?php

// In process.php
$comment = $_POST["comment"];
$file = "loggg.txt";

// file_put_contents($file, $comment);

// $newline = "\n";
// file_put_contents($file, $comment, $flags=FILE_APPEND);
// file_put_contents($file, $newline, $flags=FILE_APPEND);

$myf = fopen($file, "a");
fwrite($myf, $comment . "\n");
// fwrite(myf, "\n");
fclose($myf);
// Above should make new line, but have to save to file better, and html in index.php


// My test

// echo "<!doctype html>
// <html
// <head>
// <meta http-equiv="refresh" content="0;url=https://www.kitco.com/">
// </head>
// <body>
// <h2>This is HTML echo'd from php, stuck on this page?</h2>
// <p>It's logging to a txt file, but not sending back to index.php</p>

// </body>
// </html>";


// Send user back to index page
// header('Location: http://brendanm21.sg-host.com/');
// header('Location: http://brendanm21.sg-host.com/index.php');

// Send user back to index page
// header('Location: http://brendanm21.sg-host.com/');
// header('Location: http://brendanm21.sg-host.com/index.php');
// http://brendanm21.sg-host.com/

?>



<!doctype html>
<html
<head>
<meta http-equiv="refresh" content="2;url=http://brendanm21.sg-host.com/">
</head>
<body>
<h2>This is HTML echo'd from php, stuck on this page?</h2>
<p>It's logging to a txt file, but not sending back to index.php</p>
<p>Redirecting in 2s</p>

</body>
</html>
