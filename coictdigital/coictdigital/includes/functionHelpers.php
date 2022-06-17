<?php

function updateResultFormatWithRow($result, $row)
{

    return $result;
}


function updateValueForQn($resultB, $qnNo, $val)
{
    switch ($val) {
        case 1:
            $resultB[$qnNo]["excellent"] += 1;
            break;
        case 2:
            $resultB[$qnNo]["veryGood"] += 1;
            break;

        case 3:
            $resultB[$qnNo]["satisfactory"] += 1;
            break;
        case 4:
            $resultB[$qnNo]["poor"] += 1;
            break;
        case 5:
            $resultB[$qnNo]["veryPoor"] += 1;
            break;
        default:

            array_push($resultB[$qnNo]["explanations"], $val);
            // print_r($resultB[$qnNo]["explanations"]);
            // die();
            break;
    }
    return $resultB;
}
