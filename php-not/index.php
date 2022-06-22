


<?php

// Get and retrieve from txt file with php from: https://youtu.be/1vS2KXf0Esc
// Stack ways look better

// In Form HTML
if (file_exists("loggg.txt")) {
  $file = "loggg.txt";
  // $f = file_get_contents($file);

  $f = "";
  // $myf = fopen($file, "r");
  // while(!feof($file)) {
  $array = explode("\n", file_get_contents($file));
  foreach ($array as $val) {
    $f = $f . "<h3>$val</h3>";
  };

// fwrite($myf, $comment);
// fwrite(myf, "\n");
// fclose($myf);



}
else {
  $myfile = fopen("loggg.txt", "w");
  header("Refresh:0");    // refreshes the page, the number is the delay

}

?>

<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title>php Testing</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

<!--    <link rel="manifest" href="site.webmanifest">-->
<!--   <link rel="apple-touch-icon" href="icon.png">-->
  <!-- Place favicon.ico in the root directory -->

<!--   <link rel="stylesheet" href="css/normalize.css"> -->
<!-- <link rel="stylesheet" href="css/main.css"> -->

  <meta name="theme-color" content="#fafafa">
</head>

<body>

  <h1>Ma Test for PHP</h1>

  <form method="POST" action="process.php">

  <textarea name="comment" rows="25" cols="50">
  </textarea>
   <br>
   <button>SEND</button>
  </form>

  <br>
  <h3>
  <?php
  // contents from txt file
  echo $f;
  ?>

</body>

</html>
