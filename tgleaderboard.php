<?php
  $ch = curl_init("https://aoe2.net/api/leaderboard?game=aoe2de&leaderboard_id=4&start=1&count=10000");
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_HEADER, 0);
  $leaderboard_tg = curl_exec($ch);
  curl_close($ch);
  echo $leaderboard_tg;
?>
