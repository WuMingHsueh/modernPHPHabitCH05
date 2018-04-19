<?php
$monthDiff = -3;

$date = DateTime::createFromFormat("Y-m-d", "2018-03-27", new DateTimeZone("Asia/Taipei"));
$date2 = clone $date;
$date2->add(DateInterval::createFromDateString($monthDiff." months"));

if (((int) ($date->format('m')) + $monthDiff) != $date2->format('m')) {
    echo $date2->format('Y') . '-' . ($date->format('m') + $monthDiff) . '-' . date('t', strtotime($date2->format('Y').'-'. ($date->format('m') + $monthDiff).'-'.'01'));
} else {
    echo $date2->format('Y-m-d');
}
