<?php

function starRating($starNumber)
{
  for($x=1;$x<=$starNumber;$x++) {
      echo '<img src="images/full_star.png" />';
  }
  if (strpos($starNumber,'.')) {
      echo '<img src="images/half_star.png" />';
      $x++;
  }
  while ($x<=5) {
      echo '<img src="images/blank_star.png" />';
      $x++;
  }

}

?>
