<?php

$endDate = DateTime::createFromFormat("Y-m-d", "2018-05-05", new DateTimeZone("Asia/Taipei"));

$diffDateInterval = $endDate->diff(new DateTime("now", new DateTimeZone("Asia/Taipei")));

$diffDates = floor((new DateTime())->setTimestamp(0)->sub($diffDateInterval)->getTimestamp() / 60 / 60 / 24);
echo $diffDates;
echo "<hr>";
echo $endDate->diff(new DateTime("now", new DateTimeZone("Asia/Taipei")))->format("%a");
