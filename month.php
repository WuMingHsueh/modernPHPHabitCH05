<?php
$monthDiff = 12;

$date = DateTime::createFromFormat("Y-m-d", "2018-03-31", new DateTimeZone("Asia/Taipei"));
$date2 = clone $date;
$date2->add(DateInterval::createFromDateString($monthDiff." months"));

$theTrueMonth = $date->format('n') + $monthDiff;
echo $theTrueMonth. "<hr>";
if ($theTrueMonth > 12) {
    $theTrueMonth %= 12;
}
while ($theTrueMonth < 0) {
    $theTrueMonth += 12;
}
if ($theTrueMonth == 0) {
    $theTrueMonth = 12;
}
echo $theTrueMonth. "<hr>";

if (($theTrueMonth) != $date2->format('n')) {
    echo $date2->format('Y') . '-' . $theTrueMonth . '-' . date('t', strtotime($date2->format('Y').'-'. $theTrueMonth .'-'.'01'));
} else {
    echo $date2->format('Y-m-d');
}
