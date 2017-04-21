<?php
$RemainingYears = $_POST['RemainingYears'];
$RemainingYearsDisplay = $RemainingYears;

$d9 = $_POST['d9'];

$contributionGrowth = $d9;

$c6 = $_POST['c6'] / 100;
$d7 = $_POST['d7'];
$c7 = $_POST['c7'] / 100;

//=L15*(1+$C$7)^I16

$yearOfContribution = $_POST['yearOfContribution'];

$counter = 1;
$I16 = $RemainingYearsDisplay - 1;
// $futureValue1 = round($contributionGrowth * (((pow((1 + $d7), 12)) - 1) / $d7), 2);
// $futureValue2 = round($futureValue1 * pow((1 + $c7), $I16), 2);
$cummulative = 0;

while ($counter <= $yearOfContribution) {
    $RemainingYearsDisplay = $RemainingYearsDisplay - 1;
    $futureValue1 = $contributionGrowth * (((pow((1 + $d7), 12)) - 1) / $d7);
    $futureValue2 = $futureValue1 * pow((1 + $c7), $I16);
    $cummulative = $futureValue2 + $cummulative;
// $cummulative = number_format($cummulative, 2, '.', ',');
    if ($counter == $yearOfContribution) {
        $returnThis = number_format($cummulative, 2, '.', ',');
    } else {
        $returnThis = 'Not Available';
    }

    $counter++;
    $contributionGrowth = $contributionGrowth * $c6;
    $I16 = $I16 - 1;

}
echo $returnThis;
?>

