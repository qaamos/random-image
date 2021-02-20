<!doctype html>

<html>

<head>
  <title>:DD</title>
</head>

<body>

  <?php
    $folder = 'img';
    $files = scandir($folder);

    // remove hidden files
    $files = array_diff($files, array('.','..'));

    // re-index array
    $files = array_values($files);

    $range = count($files);
    $index = rand(0,$range-1);
    $imageName = $files[$index];

/*
    print_r($files);
    echo "$range <br />";
    echo "$index <br />";
    echo $imageName;
*/

  ?>

  <img src='<?php echo "img/$imageName"; ?>' />

</body>

</html>
