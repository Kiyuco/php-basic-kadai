<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php
    $numbers =[80, 60, 55, 40, 100, 25, 80, 95, 30, 60];

    $sum = array_sum($numbers);

    $count = count($numbers);

    $average = $sum / $count;

    echo "平均値：". $average;

    ?>
    </p>
    <body>
      <head>