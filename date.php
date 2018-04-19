<?php
date_default_timezone_set("Asia/Taipei");

$dateTime = new DateTime("now", new DateTimeZone("Asia/Taipei"));

echo $dateTime->format("Y/m/d/ H:i:s");

$dateTime2 = DateTime::createFromFormat('M j, Y H:i:s', "Jan 2, 2014 23:04:12");

echo "<hr>";

echo $dateTime2->format("Y-m-d H:i:s");

echo "<hr>";
$dateTime3 = new DateTime('2014-03-31 00:00:00');
$dateTime3->sub( new DateInterval("PT1M"));
echo $dateTime3->format('Y-m-d H:i:s');

echo "<hr>";


$start = DateTime::createFromFormat("Y-m-d H:i:s", "2011-01-01 00:00:00", new DateTimeZone("Asia/Taipei"));
$interval = new DateInterval("P3W");
$interval = DateInterval::createFromDateString("-3 weeks");
$occurrences = 3;
$period = new DatePeriod($start, $interval, $occurrences);

$show = "";
foreach ($period as $value) {
    $show .= $value->format("Y/m/d H:i:s") . PHP_EOL;
}
echo nl2br($show);

$dateDiff = $dateTime2->diff($start);
$days = ((new DateTime())->setTimeStamp(0)->sub($dateDiff)->getTimestamp() / 60 / 60 / 24);
echo $days;
