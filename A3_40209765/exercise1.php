<?php
function findSummation(...$numbers) {
  $sum = 0;
  foreach ($numbers as $n) {
    if (!is_numeric($n) || $n < 1) {
      return false;
    }
    $sum += $n;
  }
  return $sum;
}

function uppercaseFirstandLast(string $str): string {
    $words = explode(" ", $str);
    $result = "";
    foreach ($words as $word) {
      $len = strlen($word);
      if ($len > 1) {
        $word = strtoupper($word[0]) . substr($word, 1, -1) . strtoupper($word[$len - 1]);
      } else {
        $word = strtoupper($word);
      }
      $result .= $word . " ";
    }
    return trim($result);
  }  
  

  function findMedian() {
    $numbers = func_get_args();
    $count = count($numbers);
    if ($count > 0) {
      sort($numbers);
      $middle = floor(($count-1)/2);
      if ($count % 2) {
        $median = $numbers[$middle];
      } else {
        $low = $numbers[$middle];
        $high = $numbers[$middle+1];
        $median = (($low+$high)/2);
      }
      return $median;
    } else {
      return 0;
    }
  }
  

  function find4Digits($str) {
    $nums = explode(' ', $str);
    foreach ($nums as $num) {
      if (strlen($num) === 4 && is_numeric($num)) {
        return $num;
      }
    }
    return false;
  }  

?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Functions</title>
</head>
<body>
<h3> Function findSummation():</h3>
<p>findSummation(10, 9, 3): <?php echo findSummation(10, 9, 3); ?></p>
<p>findSummation(5, 2, 1, 8): <?php echo findSummation(5, 2, 1, 8); ?></p>
<p>findSummation(-5, 3, 7): <?php var_dump(findSummation(-5, 3, 7)); ?></p>
<p>findSummation(2, 'hello', 4): <?php var_dump(findSummation(2, 'hello', 4)); ?></p>
<br>

<h3> Function uppercaseFirstandLast():</h3>
<p>uppercaseFirstandLast("hello world"): <?php echo uppercaseFirstandLast("hello world"); ?></p>
<p>uppercaseFirstandLast("this is a test"): <?php echo uppercaseFirstandLast("this is a test"); ?></p>
<p>uppercaseFirstandLast("php is awesome"): <?php echo uppercaseFirstandLast("i love soen 287"); ?></p>

<br>
<h3> Function findMedian Function ():</h3>
<p>findMedian(1, 2, 3, 4, 5): <?php echo findMedian(1, 2, 3, 4, 5); ?></p>
<p>echo findMedian(10, 20): <?php echo findMedian(10, 20); ?></p>
<p>echo findMedian(): <?php echo findMedian(); ?></p>

<br>
<h3> Function find4Digits():</h3>
	<p>find4Digits('1234 56 789'): <?php echo find4Digits('1234 56 789'); ?></p>
	<p>find4Digits('1 2 3 4 5 6 7 8 9'): <?php echo find4Digits('1 2 3 4 5 6 7 8 9'); ?></p>
	<br>